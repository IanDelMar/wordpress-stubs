<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

use function PHPStan\Testing\assertType;
use function tag_exists;

$type = new TypeHelper();

assertType('array{term_id: string, term_taxonomy_id: string}|null', tag_exists($type->posInt));
assertType('0|array{term_id: string, term_taxonomy_id: string}|null', tag_exists($type->intOrString));
assertType('0', tag_exists(0));
assertType('null', tag_exists(''));
