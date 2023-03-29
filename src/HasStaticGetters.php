<?php

namespace BondarDe\Emoji;

use InvalidArgumentException;

trait HasStaticGetters
{
    public static function __callStatic(string $methodName, array $args): string
    {
        return static::getEmoji($methodName);
    }

    public static function getEmoji(string $camelCaseName): string
    {
        $upperSnakeCaseName = static::toUpperSnakeCase($camelCaseName);
        $constantName = 'static::' . $upperSnakeCaseName;

        if (!defined($constantName)) {
            throw new InvalidArgumentException('Unknown emoji: "' . $upperSnakeCaseName . '"');
        }

        return constant($constantName);
    }

    private static function toUpperSnakeCase(string $camelCase): string
    {
        return strtoupper(preg_replace('/([A-Z])/', '_$0', $camelCase));
    }
}
