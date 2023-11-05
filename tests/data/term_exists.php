<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

use function PHPStan\Testing\assertType;
use function term_exists;

$type = new TypeHelper();

// Empty taxonomy
assertType('string|null', term_exists($type->posInt));
assertType('string|null', term_exists($type->posInt, ''));
assertType('0|string|null', term_exists($type->intOrString));
assertType('0|string|null', term_exists($type->intOrString, ''));

// Fixed taxonomy string
assertType('array{term_id: string, term_taxonomy_id: string}|null', term_exists($type->posInt, 'category'));
assertType('0|array{term_id: string, term_taxonomy_id: string}|null', term_exists($type->intOrString, 'category'));

// Unknown taxonomy type
assertType('array{term_id: string, term_taxonomy_id: string}|string|null', term_exists($type->posInt, $type::stringOr('category')));
assertType('0|array{term_id: string, term_taxonomy_id: string}|string|null', term_exists($type->intOrString, $type::stringOr('category')));
assertType('null', term_exists('', $type::stringOr('category')));

// Term 0
assertType('0', term_exists(0));
assertType('0', term_exists(0, ''));
assertType('0', term_exists(0, 'category'));
assertType('0', term_exists(0, $type::stringOr('category')));

// Term empty string
assertType('null', term_exists(''));
assertType('null', term_exists('', ''));
assertType('null', term_exists('', 'category'));
assertType('null', term_exists('', $type::stringOr('category')));
