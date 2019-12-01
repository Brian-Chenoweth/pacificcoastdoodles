<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pacificcoastdoodles
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
			printf( esc_html__( '%1$s, a custom theme by %2$s.', 'pacificcoastdoodles' ), 'pacificcoastdoodles', '<a href="mailto: contact@brainmediaco.com">Brian M. Chenoweth</a>' );
			?>
			<p>&copy; <?php echo date("Y"); printf( esc_html__( ' %1$s ', 'pacificcoastdoodles' ), 'pacificcoastdoodles' );?></p>
		</div>
		<div class="logo">
			<img src="/wp-content/themes/pacificcoastdoodles/img/logo.png" alt="">
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>	