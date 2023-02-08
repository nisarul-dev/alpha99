<?php $alpha99_featured_image = get_the_post_thumbnail_url( null, "large" ); ?>

<div class="header header-bg" style="background: url(<?php echo $alpha99_featured_image?>) center center; background-size: cover;">
	<div class="container text-white">
		<div class="row">
			<div class="col-md-12">
				<h3 class="tagline text-white">
					<?php bloginfo( 'description' ); ?>
				</h3>
				<h1 class="align-self-center display-3 text-center heading"><a class="text-white" href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="col-md-12">
				<div class="navigation h3 mb-3 pb-1">
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