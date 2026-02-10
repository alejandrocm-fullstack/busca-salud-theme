<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<div class="single-post-container">

    <?php while (have_posts()):
        the_post(); ?>

        <!-- Hero Section -->
        <header class="single-hero">
            <div class="container">
                <div class="single-header-content">

                    <!-- Categoría -->
                    <div class="single-category">
                        <?php
                        $category = get_the_category();
                        if ($category) {
                            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name . '</a>';
                        }
                        ?>
                    </div>

                    <!-- Título -->
                    <h1 class="single-title">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Meta Data (Autor & Fecha) -->
                    <div class="single-meta">
                        <div class="author-meta">
                            <?php echo get_avatar(get_the_author_meta('ID'), 60); ?>
                            <div class="meta-info">
                                <span class="by">Por</span>
                                <span class="author-name">
                                    <?php the_author_posts_link(); ?>
                                </span>
                            </div>
                        </div>
                        <div class="date-meta">
                            <?php echo get_the_date('j F, Y'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Imagen Destacada (Full Width limited by container or wider) -->
            <?php if (has_post_thumbnail()): ?>
                <div class="single-featured-image container">
                    <?php the_post_thumbnail('full'); // Full quality as requested ?>
                </div>
            <?php endif; ?>
        </header>

        <!-- Contenido del Artículo -->
        <article class="single-content container">
            <div class="content-body">
                <?php the_content(); ?>
            </div>

            <!-- Tags -->
            <?php
            $tags = get_the_tags();
            if ($tags): ?>
                <div class="single-tags">
                    <?php foreach ($tags as $tag) {
                        echo '<a href="' . get_tag_link($tag->term_id) . '">#' . $tag->name . '</a>';
                    } ?>
                </div>
            <?php endif; ?>
        </article>

        <!-- Caja de Autor -->
        <div class="container">
            <div class="single-author-box">
                <div class="author-box-avatar">
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                        <?php echo get_avatar(get_the_author_meta('ID'), 100); ?>
                    </a>
                </div>
                <div class="author-box-content">
                    <h3>Sobre
                        <?php the_author(); ?>
                    </h3>
                    <p class="author-bio">
                        <?php echo get_the_author_meta('description'); ?>
                    </p>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-link">Ver más
                        artículos &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Navegación -->
        <div class="container">
            <div class="single-navigation">
                <div class="nav-previous">
                    <?php previous_post_link('&larr; %link', '%title'); ?>
                </div>
                <div class="nav-next">
                    <?php next_post_link('%link &rarr;', '%title'); ?>
                </div>
            </div>
        </div>

        <!-- Artículos Relacionados -->
        <div class="related-posts-section container">
            <h3 class="section-title">También te puede interesar</h3>
            <div class="related-posts-grid">
                <?php
                $orig_post = $post;
                global $post;
                $categories = get_the_category($post->ID);
                if ($categories) {
                    $category_ids = array();
                    foreach ($categories as $individual_category)
                        $category_ids[] = $individual_category->term_id;
                    $args = array(
                        'category__in' => $category_ids,
                        'post__not_in' => array($post->ID),
                        'posts_per_page' => 3, // 3 posts relacionados
                        'caller_get_posts' => 1
                    );
                    $my_query = new wp_query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
                            <div class="related-card">
                                <a href="<?php the_permalink() ?>" class="related-thumb">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('medium');
                                    } else { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default-post.png"
                                            alt="<?php the_title(); ?>" />
                                    <?php } ?>
                                </a>
                                <div class="related-content">
                                    <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                                    <span class="related-date"><?php echo get_the_date('j F, Y'); ?></span>
                                </div>
                            </div>
                            <?php
                        }
                    }
                }
                $post = $orig_post;
                wp_reset_query();
                ?>
            </div>
        </div>

        <!-- Comentarios -->
        <?php
        if (comments_open() || get_comments_number()):
            comments_template();
        endif;
        ?>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>