<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class PreconditionFailedException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-PRECONDITION-FAILED')
    {
        parent::__construct($message, $errorCode, 412);
    }
}
