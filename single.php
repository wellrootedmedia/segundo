<?php get_header(); ?>

    <div class="row">
        <div class="col-md-12">
            <?php if(have_posts()) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part("content", "image"); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>