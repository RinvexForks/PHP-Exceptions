<?php

namespace BrianFaust\Exceptions\Standards;

use BrianFaust\Exceptions\Contracts\ExceptionInterface;

class Exception extends \Exception implements ExceptionInterface
{
    protected $errorCode;

    protected $statusCode;

    protected $headers;

    public function __construct($message = 'An error occured.', $errorCode = null, $statusCode = null)
    {
        parent::__construct($message);

        if (!is_null($statusCode)) {
            $this->setStatusCode($statusCode);
        }

        if (!is_null($errorCode)) {
            $this->setErrorCode($errorCode);
        }
    }

    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    public function getErrorCode()
    {
        return $this->errorCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }
}
