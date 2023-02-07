<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php if( is_active_sidebar( 'footer-left' ) ) {
					dynamic_sidebar( 'footer-left' );
				} ?>
			</div>
			<div class="col-md-4">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'secondary',
							'menu_id' => 'footer-container',
							'menu_class' => 'list-inline text-center',
						)
					);
				?>
			</div>
			<div class="col-md-4 text-right">
				<?php if ( is_active_sidebar( 'footer-right' ) ) {
					dynamic_sidebar( 'footer-right' );
				} ?>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>

</html>