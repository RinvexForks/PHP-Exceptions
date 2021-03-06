<?php

/*
 * This file is part of PHP Exceptions.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Exceptions\Standards\Runtime;

use BrianFaust\Exceptions\Standards\RuntimeException;

class OutOfBoundsException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-OUT-OF-BOUNDS', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
