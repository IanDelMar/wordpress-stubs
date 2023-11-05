<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

class TypeHelper
{
    public bool $bool;

    public int $int;

    /** @var positive-int $posInt */
    public int $posInt;

    /** @var negative-int $negInt */
    public int $negInt;

    public string $string;

    /** @var array<array-key, mixed> $array */
    public array $array;

    /** @var array<string, mixed> $arrayA */
    public array $arrayA;

    /** @var array<int, mixed> $arrayN */
    public array $arrayN;

    public object $object;

    public \WP_Post $wpPost; // @phpstan-ignore-line

    public \WP_Error $wpError; // @phpstan-ignore-line

    public \WP_Term $wpTerm; // @phpstan-ignore-line

    public \WP_Comment $wpComment; // @phpstan-ignore-line

    public mixed $mixed;

    /** @var callable $callable */
    public mixed $callable;

    public \stdClass $stdClass;

    /** @var int|string $intOrString */
    public $intOrString;

    /** @var int|object $intOrObject */
    public $intOrObject;

    /** @var int|\WP_Post $intOrWpPost */
    public $intOrWpPost; // @phpstan-ignore-line

    /** @var int|null $intOrNull */
    public $intOrNull;

    /** @var string|null $stringOrNull */
    public $stringOrNull;

    /**
     * @phpstan-template T
     * @phpstan-template OT
     * @phpstan-param T $type
     * @phpstan-param OT $otherType
     * @phpstan-return T|OT
     */
    public static function or(mixed $type, mixed $otherType): mixed
    {
        return self::anyOf($type, $otherType);
    }

    /**
     * @phpstan-template T
     * @phpstan-param T $type
     * @phpstan-return T|string
     */
    public static function stringOr(mixed $type): mixed
    {
        return self::anyOf($type, uniqid('string'));
    }

    /**
     * @phpstan-template T
     * @phpstan-param T $type
     * @phpstan-return T|int
     */
    public static function intOr(mixed $type): mixed
    {
        return self::anyOf($type, random_int(-100, 100));
    }

    /**
     * @phpstan-template T
     * @phpstan-param T $type
     * @phpstan-return T|null
     */
    public static function addNull(mixed $type): mixed
    {
        return self::anyOf($type, null);
    }

    /**
     * @phpstan-template T
     * @phpstan-param T ...$types
     * @phpstan-return T
     */
    public static function anyOf(mixed ...$types): mixed
    {
        $index = count($types) - 1 === 0 ? 0 : count($types) - 1;
        return $types[$index];
    }
}
