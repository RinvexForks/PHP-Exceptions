<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class BlockedByWindowsParentalControlsException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-BLOCKED-BY-WINDOWS-PARENTAL-CONTROLS')
    {
        parent::__construct($message, $errorCode, 450);
    }
}