<?php
/**
 * This is the page template for displaying your custom
 *
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php get_template_part( 'custom/hero' ); ?>

<?php get_template_part( 'custom/cta' ); ?>

<?php get_template_part( 'custom/featured' ); ?>

<?php get_template_part( 'custom/newsletter' ); ?>

<?php get_template_part( 'custom/testimonials'); ?>

<?php get_template_part( 'custom/consultation' ); ?>

<?php get_template_part( 'custom/news' ); ?>

<?php get_template_part( 'custom/gliders' ); ?>

<?php get_footer(); ?>

