<?php

namespace ProfilePressVendor\Psr\Clock;

use DateTimeImmutable;
/** @internal */
interface ClockInterface
{
    /**
     * Returns the current time as a DateTimeImmutable Object
     */
    public function now() : DateTimeImmutable;
}
