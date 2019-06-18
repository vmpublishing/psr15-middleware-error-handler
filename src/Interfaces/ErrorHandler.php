<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Interfaces;

use Psr\Http\Message\ResponseInterface as Response;
use Throwable;
use VM\ErrorHandler\Exceptions\HttpException;

interface ErrorHandler
{
    public const NO_CACHE_HEADER = 'no-cache,no-store,must-revalidate';

    public function handle(Throwable $error): Response;
    public function handleHttpException(HttpException $exception): Response;
}
