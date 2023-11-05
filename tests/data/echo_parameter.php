<?php

declare(strict_types=1);

namespace PhpStubs\WordPress\Core\Tests;

use function comment_class;
use function edit_term_link;
use function get_calendar;
use function next_posts;
use function PHPStan\Testing\assertType;
use function post_type_archive_title;
use function previous_posts;
use function single_cat_title;
use function single_month_title;
use function single_post_title;
use function single_tag_title;
use function single_term_title;
use function the_date;
use function the_modified_date;
use function the_title;
use function wp_loginout;
use function wp_register;
use function wp_title;

// Default value of true
assertType('void', comment_class());
assertType('void', edit_term_link());
assertType('void', get_calendar());
assertType('void', next_posts());
assertType('void', post_type_archive_title());
assertType('void', previous_posts());
assertType('void', single_cat_title());
assertType('void|false', single_month_title());
assertType('void', single_post_title());
assertType('void', single_tag_title());
assertType('void', single_term_title());
assertType('void', the_date());
assertType('void', the_modified_date());
assertType('void', the_title());
assertType('void', wp_loginout());
assertType('void', wp_register());
assertType('void', wp_title());

// Explicit value of true
assertType('void', comment_class('', null, null, true));
assertType('void', edit_term_link('', '', '', null, true));
assertType('void', get_calendar(true, true));
assertType('void', next_posts(0, true));
assertType('void', post_type_archive_title('', true));
assertType('void', previous_posts(true));
assertType('void', single_cat_title('', true));
assertType('void|false', single_month_title('', true));
assertType('void', single_post_title('', true));
assertType('void', single_tag_title('', true));
assertType('void', single_term_title('', true));
assertType('void', the_date('', '', '', true));
assertType('void', the_modified_date('', '', '', true));
assertType('void', the_title('', '', true));
assertType('void', wp_loginout('', true));
assertType('void', wp_register('', '', true));
assertType('void', wp_title('', true));

// Explicit value of false
assertType('string', comment_class('', null, null, false));
assertType('string|void', edit_term_link('', '', '', null, false));
assertType('string', get_calendar(true, false));
assertType('string', next_posts(0, false));
assertType('string|void', post_type_archive_title('', false));
assertType('string', previous_posts(false));
assertType('string|void', single_cat_title('', false));
assertType('string|false', single_month_title('', false));
assertType('string|void', single_post_title('', false));
assertType('string|void', single_tag_title('', false));
assertType('string|void', single_term_title('', false));
assertType('string', the_date('', '', '', false));
assertType('string', the_modified_date('', '', '', false));
assertType('string|void', the_title('', '', false));
assertType('string', wp_loginout('', false));
assertType('string', wp_register('', '', false));
assertType('string', wp_title('', false));
