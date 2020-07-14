<?php get_header(); ?>


<div class="container pt-5">
    <h1>
        <?php the_title(); ?>
    </h1>

    <button class="btn btn-primary">Test</button>

    <?php get_template_part('includes/section', 'content'); ?>
</div>



<?php get_footer(); ?>