<?php
/**
 * Home Page sections
 *
 * This is the template that includes all the other files for home page sections
 *
 * @package Theme Palace
 * @subpackage Web Artist
 * @since Web Artist 1.0.0
 */

// slider section
require get_template_directory() . '/inc/sections/slider.php';

// topic section
require get_template_directory() . '/inc/sections/topic.php';

// product section
require get_template_directory() . '/inc/sections/product.php';

// call to action section
require get_template_directory() . '/inc/sections/cta.php';

// blog section
require get_template_directory() . '/inc/sections/blog.php';

// search section
require get_template_directory() . '/inc/sections/search.php';
