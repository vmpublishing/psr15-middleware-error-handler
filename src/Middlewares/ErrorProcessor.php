<?php

declare(strict_types=1);

namespace VM\ErrorHandler\Middlewares;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Throwable;
use VM\ErrorHandler\Exceptions\HttpException;
use VM\ErrorHandler\Interfaces\ErrorHandler;

class ErrorProcessor implements MiddlewareInterface
{
    private $errorHandler;

    public function __construct(ErrorHandler $errorHandler)
    {
        $this->errorHandler = $errorHandler;
    }

    public function process(Request $request, RequestHandler $requestHandler): Response
    {
        try {
            return $requestHandler->handle($request);
        } catch (HttpException $httpException) {
            return $this->errorHandler->handleHttpException($httpException);
        } catch (Throwable $error) {
            return $this->errorHandler->handle($error);
        }
    }
}
