<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Services;

use VM\ErrorHandler\Interfaces\ErrorHandler;
use VM\ErrorHandler\Exceptions\HttpException;
use Throwable;
use Psr\Http\Message\ResponseInterface as Response;

class RethrowHandler implements ErrorHandler
{
    public function handle(Throwable $error): Response
    {
        throw $error;
    }

    public function handleHttpException(HttpException $exception): Response
    {
        throw $exception;
    }
}
