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

<script type="text/javascript">
  let currentYear = new Date().getFullYear();
  let el = document.querySelector(".year");
  el.innerHTML = currentYear;
</script>

<script>
	document.getElementById('copyright_date').innerHTML = 'Made with &#9829; by <a href="#">Sparkle Sauce';
	</script>
</body>

</html>

