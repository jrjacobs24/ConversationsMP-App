<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "main-content" section and all content after.
 *
 * @package Conversations_MP
 * @since Conversations Made Possible 1.0
 */
?>

			</section><!-- #main-content -->

			<footer class="site-footer" role="contentinfo">
				<div class="site-info text-center">
					<?php
						/**
						 * Fires before the Conversations Made Possible footer text for footer customization.
						 *
						 * @since Conversations Made Possible 1.0
						 */
						do_action( 'conversationsmp_credits' );
					?>
					<a href="<?php echo esc_url(home_url()); ?>/#" class="go-top">
		            	<i class="fa fa-angle-up"></i>
		            </a>
				</div><!-- .site-info -->
			</footer><!-- .site-footer -->

		</section><!-- .site -->

		<?php wp_footer(); ?>

	</body>
</html>
