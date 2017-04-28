<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php 
		// $enable_staff_picks = get_theme_mod( 'fashify_staff_picks', '' ) ;

		// if ( $enable_staff_picks == true ) {
		// 	get_template_part( 'template-parts/content', 'staff' );
		// }

		?>

		<?php //if ( is_active_sidebar( 'footer' ) ) { ?>
		<div class="footer-widgets">
			<div class="container">
				<div class="footer-inner">some footer sidebar
					<?php
							
							//dynamic_sidebar( 'footer' );
					?>
				</div>
			</div>
		</div>
		<?php //} ?>

		<div class="site-info">
			<div class="container">

				<div class="site-copyright"> copy
					<?php //printf( esc_html__( 'Copyright &copy; %1$s %2$s. All Rights Reserved.', 'fashify' ), date_i18n( __('Y', 'fashify') ), get_bloginfo( 'name' ) ); ?>
				</div>


				<?php //do_action('fashify_theme_info'); ?>


			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->
</body>
</html>