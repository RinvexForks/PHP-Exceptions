<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class HttpVersionNotSupportedException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-HTTP-VERSION-NOT-SUPPORTED')
    {
        parent::__construct($message, $errorCode, 505);
    }
}
