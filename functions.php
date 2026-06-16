<?php
/**
 * Pacer theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Sabuz/Pacer
 */

defined( 'ABSPATH' ) || exit;

// require necessary class files.
require_once get_template_directory() . '/includes/class-boot.php';

// kickstart.
new Sabuz\Pacer\Boot();
