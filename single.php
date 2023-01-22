<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<?php wp_head(); ?>
	<style>
		h1.heading {
			font-family: "Arial Black";
			width: 700px;
			margin: auto;
			margin-bottom: 70px;
			padding-bottom: 50px;
			border-bottom: 1px solid #ccc;
		}

		h3.tagline {
			font-family: Arial;
			margin: auto;
			font-size: 18px;
			margin-top: 50px;
			margin-bottom: 15px;
			width: 700px;
			text-align: center;
		}

		h2.post-title {
			margin-bottom: 30px;
		}

		.post {
			margin-bottom: 50px;
		}

		.post p {
			font-family: "Helvetica Neue";
			line-height: 1.7em;
			font-size: 18px;
		}

		.post .row:nth-child(2) {
			padding-bottom: 50px;
			border-bottom: 1px solid #ccc;

		}

		.post:last-child .row:nth-child(2) {
			border-bottom: none;
		}

		.footer {
			padding-bottom: 10px;
			padding-top: 10px;
			background-color: #222;
			color: #ccc;
		}

		.tags li,
		.tags li a {
			color: #3D9970;
		}
	</style>
</head>

<body <?php body_class() ?>>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="tagline">
						<?php bloginfo( 'description' ); ?>
					</h3>
					<h1 class="align-self-center display-1 text-center heading"><?php bloginfo( 'name' ); ?></h1>
				</div>
			</div>
		</div>
	</div>

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

		<div class="container post-pagination my-4 py-5">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-8">
					<?php the_posts_pagination( array(
						'prev_text' => '<< New Posts',
						'next_text' => 'Old Posts >>',
					) ); ?>
				</div>
			</div>
		</div>

	</div>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					&copy; LWHH - All Rights Reserved
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>

</html>