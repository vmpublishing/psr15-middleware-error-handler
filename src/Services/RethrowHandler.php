<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Services;

use Psr\Http\Message\ResponseInterface as Response;
use Throwable;
use VM\ErrorHandler\Exceptions\HttpException;
use VM\ErrorHandler\Interfaces\ErrorHandler;

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
