<?php

namespace ProfilePressVendor\Stripe;

/**
 * Class OrderItem.
 *
 * @property string $object
 * @property int $amount
 * @property string $currency
 * @property string $description
 * @property string $parent
 * @property int $quantity
 * @property string $type
 * @internal
 */
class OrderItem extends StripeObject
{
    const OBJECT_NAME = 'order_item';
}
