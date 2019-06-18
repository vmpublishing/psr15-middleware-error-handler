<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Services;

use Fig\Http\Message\StatusCodeInterface;
use Psr\Http\Message\ResponseInterface as Response;
use RuntimeException;
use Throwable;
use VM\ErrorHandler\Exceptions\HttpException;
use VM\ErrorHandler\Interfaces\ErrorHandler;

class StaticFileHandler implements ErrorHandler
{
    private $filePath;
    private $response;
    private $filesForCodes;

    public function __construct(string $filePath, Response $response, array $filesForCodes = [])
    {
        $this->filePath = $filePath;
        $this->response = $response;
        $this->filesForCodes = $filesForCodes;
    }

    public function handle(Throwable $error): Response
    {
        return $this->writeFile(StatusCodeInterface::STATUS_INTERNAL_SERVER_ERROR);
    }

    public function handleHttpException(HttpException $httpException): Response
    {
        return $this->writeFile($httpException->getHttpStatusCode());
    }

    private function writeFile(int $statusCode): Response
    {
        $filePath = $this->findFilePath($statusCode);
        $contents = file_get_contents($filePath);
        $this->response->getBody()->write($contents);
        $this->response = $this->response->withHeader('Cache-Control', self::NO_CACHE_HEADER);
        return $this->response->withStatus($statusCode);
    }

    private function findFilePath(int $statusCode): string
    {
        $filePath = $this->filePath;
        if (!empty($this->filesForCodes[$statusCode])) {
            $filePath = $this->filesForCodes[$statusCode];
        }
        $this->validateFilePath($filePath);
        return $filePath;
    }

    private function validateFilePath(string $filePath): void
    {
        if (!file_exists($filePath)) {
            throw new RuntimeException("unable to load error file: '{$filePath}'");
        }
    }
}
