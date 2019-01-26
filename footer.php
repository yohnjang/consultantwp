<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkle
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php get_template_part('custom/footer-columns'); ?>
<?php get_template_part('custom/footer-copyright'); ?>

<?php wp_footer(); ?>

</body>
</html>

