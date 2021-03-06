<?php

/*
 * This file is part of PHP Exceptions.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Exceptions\Standards\Logic;

use BrianFaust\Exceptions\Standards\LogicException;

class OutOfRangeException extends LogicException
{
    public function __construct($message = null, $errorCode = 'ERR-OUT-OF-RANGE', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
