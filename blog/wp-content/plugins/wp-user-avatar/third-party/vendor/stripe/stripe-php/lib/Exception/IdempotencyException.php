<?php

namespace ProfilePressVendor\Stripe\Exception;

/**
 * IdempotencyException is thrown in cases where an idempotency key was used
 * improperly.
 * @internal
 */
class IdempotencyException extends ApiErrorException
{
}
