<?php get_header(); ?>
<?php get_template_part( 'template-parts/hero' ); ?>

    <div class="container post-pagination my-4 py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">
                    <?php _e( "404 - Page Not Found<br>\nSorry! We couldn't find what you were looking for", "alpha" ); ?>
                </h2>
            </div>
        </div>
    </div>

</div>
<?php get_footer(); ?>