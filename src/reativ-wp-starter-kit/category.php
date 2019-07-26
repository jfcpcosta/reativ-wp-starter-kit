<?php get_header(); ?>
    <div class="container">
        <h1><?php single_cat_title() ?></h1>
        <?= category_description() ?>
        
        <div class="row">
            <div class="col-sm-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, this page does not exist.'); ?></p>
                <?php endif; ?>
            </div>

            <div class="col-sm-3 col-sm-offset-1">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>