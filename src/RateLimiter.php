<?php
/**
 * This file is part of SwowCloud
 * @license  https://github.com/swow-cloud/websocket-server/blob/main/LICENSE
 */

declare(strict_types=1);

namespace SwowCloud\RateLimit;

use SwowCloud\RateLimit\Exception\LimitExceeded;

interface RateLimiter
{
    /**
     * @throws LimitExceeded
     */
    public function limit(string $identifier): void;
}
