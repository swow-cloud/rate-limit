<?php
/**
 * This file is part of SwowCloud
 * @license  https://github.com/swow-cloud/websocket-server/blob/main/LICENSE
 */

declare(strict_types=1);

namespace SwowCloud\RateLimit\Exception;

use RuntimeException;

final class CannotUseRateLimiter extends RuntimeException implements RateLimitException
{
}
