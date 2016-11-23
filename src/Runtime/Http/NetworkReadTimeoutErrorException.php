<?php

/*
 * This file is part of PHP Exceptions.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class NetworkReadTimeoutErrorException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-NETWORK-READ-TIMEOUT-ERROR')
    {
        parent::__construct($message, $errorCode, 598);
    }
}
