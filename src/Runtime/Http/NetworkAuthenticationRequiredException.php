<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class NetworkAuthenticationRequiredException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-NETWORK-AUTHENTICATION-REQUIRED')
    {
        parent::__construct($message, $errorCode, 511);
    }
}
