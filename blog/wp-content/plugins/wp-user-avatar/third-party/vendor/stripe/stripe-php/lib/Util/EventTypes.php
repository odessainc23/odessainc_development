<?php

namespace ProfilePressVendor\Stripe\Util;

class EventTypes
{
    const thinEventMapping = [
        // The beginning of the section generated from our OpenAPI spec
        \ProfilePressVendor\Stripe\Events\V1BillingMeterErrorReportTriggeredEvent::LOOKUP_TYPE => \ProfilePressVendor\Stripe\Events\V1BillingMeterErrorReportTriggeredEvent::class,
        \ProfilePressVendor\Stripe\Events\V1BillingMeterNoMeterFoundEvent::LOOKUP_TYPE => \ProfilePressVendor\Stripe\Events\V1BillingMeterNoMeterFoundEvent::class,
    ];
}
