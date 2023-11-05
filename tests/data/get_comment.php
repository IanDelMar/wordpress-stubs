<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

use function get_comment;
use function PHPStan\Testing\assertType;

$type = new TypeHelper();

// Default output
assertType('WP_Comment|null', get_comment());
assertType('WP_Comment|null', get_comment($type::anyOf($type->wpComment, $type->intOrString, null)));
assertType('WP_Comment|null', get_comment($type::anyOf($type->wpComment, $type->intOrString, null), 'OBJECT'));

// Associative array output
assertType('array<string, mixed>|null', get_comment($type::anyOf($type->wpComment, $type->intOrString, null), 'ARRAY_A'));

// Numeric array output
assertType('array<int, mixed>|null', get_comment($type::anyOf($type->wpComment, $type->intOrString, null), 'ARRAY_N'));

assertType('WP_Comment', get_comment($type->wpComment));
assertType('WP_Comment', get_comment($type->wpComment, 'OBJECT'));
assertType('array<string, mixed>', get_comment($type->wpComment, 'ARRAY_A'));
assertType('array<int, mixed>', get_comment($type->wpComment, 'ARRAY_N'));
