<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Tests\Middlewares;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use TypeError;
use VM\ErrorHandler\Exceptions\Http\Forbidden;
use VM\ErrorHandler\Interfaces\ErrorHandler;
use VM\ErrorHandler\Middlewares\ErrorProcessor;
use VM\Psr15Mocks\Middleware;

class ErrorProcessorTest extends TestCase
{
    use Middleware;

    private $errorHandler;

    public function setUp(): void
    {
        $this->buildRequest();
        $this->buildResponse();
        $this->buildRequestHandler();
        $this->buildErrorHandler();
    }

    public function tearDown(): void
    {
        $this->destroyErrorHandler();
        $this->destroyRequestHandler();
        $this->destroyResponse();
        $this->destroyRequest();
    }

    public function testItShouldDoNothingWhenThereWasNoError(): void
    {
        $this->requestHandler->expects($this->once())->method('handle')->with($this->request)->willReturn($this->response);
        $this->errorHandler->expects($this->never())->method('handle');
        $this->errorHandler->expects($this->never())->method('handleHttpException');

        $middleware = new ErrorProcessor($this->errorHandler);
        $response = $middleware->process($this->request, $this->requestHandler);

        $this->assertInstanceOf(ResponseInterface::class, $response);
    }

    public function testItShouldCallUponItsErrorHandlerForHttpExceptions(): void
    {
        $httpException = new Forbidden();
        $this->requestHandler->expects($this->once())->method('handle')->with($this->request)->willThrowException($httpException);
        $this->errorHandler->expects($this->never())->method('handle');
        $this->errorHandler->expects($this->once())->method('handleHttpException')->with($httpException)->willReturn($this->response);

        $middleware = new ErrorProcessor($this->errorHandler);
        $response = $middleware->process($this->request, $this->requestHandler);

        $this->assertInstanceOf(ResponseInterface::class, $response);
    }

    public function testItShouldCallUponItsErrorHandlerForErrors(): void
    {
        $exception = new TypeError();
        $this->requestHandler->expects($this->once())->method('handle')->with($this->request)->willThrowException($exception);
        $this->errorHandler->expects($this->never())->method('handleHttpException');
        $this->errorHandler->expects($this->once())->method('handle')->with($exception)->willReturn($this->response);

        $middleware = new ErrorProcessor($this->errorHandler);
        $response = $middleware->process($this->request, $this->requestHandler);

        $this->assertInstanceOf(ResponseInterface::class, $response);
    }

    private function buildErrorHandler(): void
    {
        $this->errorHandler = $this->getMockBuilder(ErrorHandler::class)
            ->disableOriginalConstructor()
            ->setMethods(['handle', 'handleHttpException'])
            ->getMock()
        ;
    }

    private function destroyErrorHandler(): void
    {
        $this->errorHandler = null;
    }
}
