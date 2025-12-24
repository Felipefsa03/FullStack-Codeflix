<?php

namespace Core\Domain\Validation;

use http\Exception\BadConversionException;

class DomainValidation
{

    public static function notNull(string $value, string $exceptMessage = null): void
    {
        if (empty($value)) {
            throw new BadConversionException($exceptMessage ?? 'Value cannot be null.');
        }
    }
}