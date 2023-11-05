<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

use function has_action;
use function has_filter;
use function PHPStan\Testing\assertType;

$type = new TypeHelper();

// Default callback of false
assertType('bool', has_filter($type->string));
assertType('bool', has_action($type->string));

// Explicit callback of false
assertType('bool', has_filter($type->string, false));
assertType('bool', has_action($type->string, false));

// Explicit callback
assertType('int|false', has_filter($type->string, 'intval'));
assertType('int|false', has_action($type->string, 'intval'));

// Maybe false callback
assertType('bool|int', has_filter($type->string, $type::anyOf($type->string, $type->array, $type->callable, false)));
assertType('bool|int', has_action($type->string, $type::anyOf($type->string, $type->array, $type->callable, false)));
