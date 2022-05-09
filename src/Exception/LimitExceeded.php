<?php
/**
 * This file is part of SwowCloud
 * @license  https://github.com/swow-cloud/websocket-server/blob/main/LICENSE
 */

declare(strict_types=1);

namespace SwowCloud\RateLimit\Exception;

use JetBrains\PhpStorm\Pure;
use RuntimeException;
use SwowCloud\RateLimit\Rate;

final class LimitExceeded extends RuntimeException implements RateLimitException
{
    private string $identifier;

    private Rate $rate;

    #[Pure]
 public static function for(string $identifier, Rate $rate): self
 {
     $exception = new self(sprintf(
         'Limit has been exceeded for identifier "%s".',
         $identifier
     ));

     $exception->identifier = $identifier;
     $exception->rate = $rate;

     return $exception;
 }

    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    public function getRate(): Rate
    {
        return $this->rate;
    }
}
