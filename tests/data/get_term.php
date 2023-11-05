<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

use function get_term;
use function PHPStan\Testing\assertType;

$type = new TypeHelper();

assertType('WP_Error|WP_Term|null', get_term($type::or($type->intOrObject, $type->wpTerm)));
assertType('WP_Error|WP_Term|null', get_term($type::or($type->intOrObject, $type->wpTerm), $type->string));
assertType('WP_Error|WP_Term|null', get_term($type::or($type->intOrObject, $type->wpTerm), $type->string, 'OBJECT'));
assertType('array<string, int|string>|WP_Error|null', get_term($type::or($type->intOrObject, $type->wpTerm), $type->string, 'ARRAY_A'));
assertType('array<int, int|string>|WP_Error|null', get_term($type::or($type->intOrObject, $type->wpTerm), $type->string, 'ARRAY_N'));
