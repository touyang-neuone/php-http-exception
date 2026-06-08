<?php

declare(strict_types=1);

namespace Fuzz\HttpException;

/**
 * Empty class aliasing correct 403
 */
class AccessDeniedHttpException extends ForbiddenHttpException
{
    /**
     * Error code storage;
     *
     * @const string
     */
    const ERROR = 'access_denied';
}
