<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Services;

use PHPUnit\Framework\TestCase;
use VM\ErrorHandler\Exceptions\HttpException;
use VM\ErrorHandler\Exceptions\Http\NotFound;
use VM\ErrorHandler\Exceptions\Http\Forbidden;
use TypeError;
use RuntimeException;
use Fig\Http\Message\StatusCodeInterface;
use VM\ErrorHandler\Services\StaticFileHandler;
use VM\Psr15Mocks\Middleware;

class StaticFileHandlerTest extends TestCase
{
    use Middleware;

    public function setUp(): void
    {
        $this->buildResponse();
        $this->buildBody();
    }

    public function tearDown(): void
    {
        $this->destroyBody();
        $this->destroyResponse();
    }

    public function testHandleShouldRenderTheFileWithA500(): void
    {
        $this->response->expects($this->once())->method('getBody')->willReturn($this->body);
        $this->response->expects($this->once())->method('withHeader')->with('Cache-Control', StaticFileHandler::NO_CACHE_HEADER)->willReturn($this->response);
        $this->response->expects($this->once())->method('withStatus')->with(StatusCodeInterface::STATUS_INTERNAL_SERVER_ERROR)->willReturn($this->response);

        $this->body->expects($this->once())->method('write')->with("some static content\n");

        $filePath = __DIR__ . '/../Fixtures/static_file.txt';
        $handler = new StaticFileHandler($filePath, $this->response);

        $exception = new TypeError();

        $handler->handle($exception);
    }

    public function testHandleHttpExceptionShouldRenderTheFileWithADedicatedCode(): void
    {
        $this->response->expects($this->once())->method('getBody')->willReturn($this->body);
        $this->response->expects($this->once())->method('withHeader')->with('Cache-Control', StaticFileHandler::NO_CACHE_HEADER)->willReturn($this->response);
        $this->response->expects($this->once())->method('withStatus')->with(StatusCodeInterface::STATUS_NOT_FOUND)->willReturn($this->response);

        $this->body->expects($this->once())->method('write')->with("some static content\n");

        $filePath = __DIR__ . '/../Fixtures/static_file.txt';
        $handler = new StaticFileHandler($filePath, $this->response);

        $exception = new NotFound();

        $handler->handleHttpException($exception);
    }

    public function testHandleShouldThrowANewExceptionWhenThereIsNoFileConfigured(): void
    {
        $this->expectException(RuntimeException::class);

        $this->response->expects($this->never())->method('getBody');
        $this->response->expects($this->never())->method('withHeader');
        $this->response->expects($this->never())->method('withStatus');

        $handler = new StaticFileHandler('some-non-existing-file.txt', $this->response);

        $exception = new TypeError();

        $handler->handle($exception);
    }

    public function testHandleShouldUseOverrideFilesWhenPresent(): void
    {
        $this->response->expects($this->once())->method('getBody')->willReturn($this->body);
        $this->response->expects($this->once())->method('withHeader')->with('Cache-Control', StaticFileHandler::NO_CACHE_HEADER)->willReturn($this->response);
        $this->response->expects($this->once())->method('withStatus')->with(StatusCodeInterface::STATUS_FORBIDDEN)->willReturn($this->response);

        $this->body->expects($this->once())->method('write')->with("forbidden contents!\n");

        $filePath = __DIR__ . '/../Fixtures/static_file.txt';
        $forbiddenFilePath = __DIR__ . '/../Fixtures/forbidden_file.txt';
        $handler = new StaticFileHandler($filePath, $this->response, [StatusCodeInterface::STATUS_FORBIDDEN => $forbiddenFilePath]);

        $exception = new Forbidden();

        $handler->handleHttpException($exception);
    }
}
