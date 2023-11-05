<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

use function is_wp_error;
use function PHPStan\Testing\assertType;

$type = new TypeHelper();

assertType('false', is_wp_error($type->string));
assertType('true', is_wp_error($type->wpError));
assertType('bool', is_wp_error($type->mixed));
if (is_wp_error($type->mixed)) {
    assertType('WP_Error', $type->mixed);
}
