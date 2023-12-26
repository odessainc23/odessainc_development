<?php

namespace ProfilePressVendor\Carbon\Doctrine;

use ProfilePressVendor\Carbon\Carbon;
use ProfilePressVendor\Doctrine\DBAL\Types\VarDateTimeType;
/** @internal */
class DateTimeType extends VarDateTimeType implements CarbonDoctrineType
{
    /** @use CarbonTypeConverter<Carbon> */
    use CarbonTypeConverter;
}
