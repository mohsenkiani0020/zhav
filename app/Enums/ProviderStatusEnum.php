<?php
declare(strict_types = 1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static zhavstudio()
 * @method static static google()
 * @method static static facebook()
 */
final class ProviderStatusEnum extends Enum
{
    const zhavstudio = 0;
    const google     = 1;
    const facebook   = 2;

    public static function getDescription(mixed $value): string
    {
        return match ($value) {
            self::zhavstudio => 'Zhav Studio',
            self::google => 'Google',
            self::facebook => 'Facebook',
            default => self::getKey($value),
        };
    }
}
