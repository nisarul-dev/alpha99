<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mt-5 text-center">
					<?php echo the_custom_logo(); ?>
				</div>
				<h3 class="tagline">
					<?php bloginfo( 'description' ); ?>
				</h3>
				<h1 class="align-self-center display-3 text-center heading"><a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="col-md-12">
				<div class="navigation h3 mb-5">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'header-menu-container',
							'menu_class'     => 'list-inline text-center'
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>
</div>