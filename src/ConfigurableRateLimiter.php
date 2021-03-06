<?php
/**
 * This file is part of SwowCloud
 * @license  https://github.com/swow-cloud/websocket-server/blob/main/LICENSE
 */

declare(strict_types=1);

namespace SwowCloud\RateLimit;

abstract class ConfigurableRateLimiter
{
    protected Rate $rate;

    public function __construct(Rate $rate)
    {
        $this->rate = $rate;
    }
}
