<?php get_header(); ?>
<?php get_template_part( 'template-parts/hero' ); ?>

<!-- Post Loop -->
<div class="page mt-4">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <div class="post" <?php post_class(); ?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h2 class="post-title text-center"><?php the_title(); ?></h2>
                        <p class="text-center">
                            <strong>
                                <?php the_author(); ?>
                            </strong><br />
                            <?php echo get_the_date( 'jS F, Y' ); ?>
                        </p>
                        <p>
                            <?php
                            if ( has_post_thumbnail() ) {
                                $thumbnail_url = get_the_post_thumbnail_url( null, 'large' );
                                echo '<a href="#" data-featherlight="image">';
                                the_post_thumbnail( 'large', array(
                                    'class' => 'img-fluid',
                                ) );
                                echo '</a>';
                            }
                            ?>
                        </p>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endwhile;
    ?>
</div>

<?php get_footer(); ?>