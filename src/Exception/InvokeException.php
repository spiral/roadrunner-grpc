<?php

/**
 * This file is part of RoadRunner GRPC package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Spiral\RoadRunner\GRPC\Exception;

use Spiral\RoadRunner\GRPC\StatusCode;

class InvokeException extends GRPCException
{
    /**
     * {@inheritDoc}
     */
    protected const CODE = StatusCode::UNAVAILABLE;
}
