<?php

namespace ProfilePressVendor\Stripe;

/**
 * Interface for a Stripe client.
 * @internal
 */
interface StripeStreamingClientInterface extends BaseStripeClientInterface
{
    public function requestStream($method, $path, $readBodyChunkCallable, $params, $opts);
}
