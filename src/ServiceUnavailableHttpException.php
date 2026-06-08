<?php

declare(strict_types=1);

namespace Fuzz\HttpException;

use Throwable;

class ServiceUnavailableHttpException extends HttpException
{
    /**
     * HTTP status code
     *
     * @const int
     */
    const HTTP_CODE = 503;

    /**
     * Error code storage;
     *
     * @const string
     */
    const ERROR = 'service_unavailable';

    /**
     * ServiceUnavailableHttpException constructor.
     *
     * @param int|null       $wait
     * @param string|null    $errorDescription
     * @param array          $errorData
     * @param string|null    $userTitle
     * @param null           $userMessage
     * @param array          $headers
     * @param Throwable |null $previous
     */
    public function __construct(
        $wait = null,
        string $errorDescription = null,
        array $errorData = [],
        string $userTitle = null,
        $userMessage = null,
        array $headers = [],
        Throwable $previous = null
    ) {
        if (!is_null($wait)) {
            $headers['Retry-After'] = $wait;
        }

        parent::__construct(
            self::HTTP_CODE,
            self::ERROR,
            $errorDescription,
            $errorData,
            $userTitle,
            $userMessage,
            $headers,
            $previous
        );
    }
}
