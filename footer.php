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
	document.getElementById('copyright_date').innerHTML = '<a href="https://www.johnyang.co">WordPress Design &amp; Development by JY</a>';
	</script>
</body>

</html>

