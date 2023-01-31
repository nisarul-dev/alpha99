<?php get_header(); ?>
<?php get_template_part( 'hero' ); ?>
	<!-- Post Loop -->
	<div class="posts">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="post" <?php post_class(); ?>>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<h2 class="post-title text-center"><?php the_title(); ?></h2>
							<p class="text-center">
								<strong>
									<?php the_author(); ?>
								</strong><br />
								<?php echo get_the_date( 'jS F, Y' ); ?>
							</p>
							<p>
								<?php
								the_post_thumbnail( 'large', array(
									'class' => 'img-fluid',
								) );
								?>
							</p>
							<?php the_content(); ?>
						</div>

						<div class="col-md-10 offset-md-1 my-5 d-flex justify-content-between">
							<p><?php echo previous_post_link(); ?></p>
							<p class="text-right"><?php echo next_post_link(); ?></p>
						</div>

						<?php if ( comments_open() ) : ?>
						<div class="col-md-10 offset-md-1 my-5">
							<?php comments_template(); ?>
						</div>
						<?php endif; ?>
					</div>

				</div>
			</div>
		<?php
		endwhile;
		?>

	</div>
<?php get_footer(); ?>