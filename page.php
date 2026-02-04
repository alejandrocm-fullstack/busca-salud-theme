<?php get_header(); ?>

<div class="container section">
    <div class="page-content">
        <h1>
            <?php the_title(); ?>
        </h1>
        <?php
        while (have_posts()):
            the_post();
            the_content();
        endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>