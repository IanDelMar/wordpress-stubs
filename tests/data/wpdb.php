<?php

declare(strict_types=1);

// phpcs:disable WordPress.DB.PreparedSQL.NotPrepared

namespace PhpStubs\WordPress\Core\Tests;

use wpdb;

use function PHPStan\Testing\assertType;

$type = new TypeHelper();
$wpdb = new wpdb('', '', '', '');

// Assert return type for get_row()
assertType('stdClass|void|null', $wpdb->get_row());
assertType('stdClass|void|null', $wpdb->get_row($type->string, 'OBJECT'));
assertType('array<string, mixed>|void|null', $wpdb->get_row($type->stringOrNull, 'ARRAY_A'));
assertType('array<int, mixed>|void|null', $wpdb->get_row($type->stringOrNull, 'ARRAY_N'));

// Assert return type for get_results()
assertType('stdClass|null', $wpdb->get_results());
assertType('stdClass|null', $wpdb->get_results($type->stringOrNull, 'OBJECT'));
assertType('array<string, stdClass>|null', $wpdb->get_results($type->stringOrNull, 'OBJECT_K'));
assertType('array<string, mixed>|null', $wpdb->get_results($type->stringOrNull, 'ARRAY_A'));
assertType('array<int, mixed>|null', $wpdb->get_results($type->stringOrNull, 'ARRAY_N'));
