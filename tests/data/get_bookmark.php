<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

use function get_bookmark;
use function PHPStan\Testing\assertType;

$type = new TypeHelper();

assertType('stdClass|null', get_bookmark($type::or($type->stdClass, $type->int)));
assertType('stdClass|null', get_bookmark($type::or($type->stdClass, $type->int), 'OBJECT'));
assertType('array<string, mixed>|null', get_bookmark($type::or($type->stdClass, $type->int), 'ARRAY_A'));
assertType('array<int, mixed>|null', get_bookmark($type::or($type->stdClass, $type->int), 'ARRAY_N'));
