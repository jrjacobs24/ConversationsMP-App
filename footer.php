<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Conversations_MP
 * @since Conversations Made Possible 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Conversations Made Possible footer text for footer customization.
				 *
				 * @since Conversations Made Possible 1.0
				 */
				do_action( 'conversationsmp_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'conversationsmp' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'conversationsmp' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
