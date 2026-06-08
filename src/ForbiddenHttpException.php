<?php

declare(strict_types=1);

namespace Fuzz\HttpException;

use Exception;

class ForbiddenHttpException extends HttpException
{
    /**
     * Error code storage;
     *
     * @const string
     */
    const ERROR = 'forbidden';
    /**
     * HTTP status code
     *
     * @const int
     */
    const HTTP_CODE = 403;

    /**
     * AccessDeniedHttpException constructor.
     *
     * @param string|null    $errorDescription
     * @param array          $errorData
     * @param string|null    $userTitle
     * @param null           $userMessage
     * @param array          $headers
     * @param Exception|null $previous
     */
    public function __construct(
        string $errorDescription = null,
        array $errorData = [],
        string $userTitle = null,
        $userMessage = null,
        array $headers = [],
        Exception $previous = null
    ) {
        parent::__construct(
            static::HTTP_CODE,
            static::ERROR,
            $errorDescription,
            $errorData,
            $userTitle,
            $userMessage,
            $headers,
            $previous
        );
    }
}
