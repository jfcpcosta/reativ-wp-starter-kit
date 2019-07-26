<?php get_header(); ?>

<?php if (have_posts()) : the_post(); ?>
    <?php if (get_the_post_thumbnail_url()) : ?>
        <div class="banner" style="background: url(<?php the_post_thumbnail_url() ?>);"></div>
    <?php endif; ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <h1><?php the_title() ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>