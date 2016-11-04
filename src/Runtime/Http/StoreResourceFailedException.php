<?php

namespace BrianFaust\Exceptions\Runtime\Http;

class StoreResourceFailedException extends UnprocessableEntityException
{
    public function __construct($message = null, $errorCode = 'ERR-STORE-RESOURCE-FAILED')
    {
        parent::__construct($message, $errorCode, 422);
    }
}
