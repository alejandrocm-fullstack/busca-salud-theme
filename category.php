<?php
/**
 * Template Name: Category Archive
 * 
 * Plantilla para mostrar los archivos de categoría.
 */

get_header();

// Obtener el objeto de la categoría actual
$category = get_queried_object();
?>

<div class="revista-container">

    <!-- Cabecera de la Categoría -->
    <div class="revista-main-header container">
        <h1>
            <?php echo single_cat_title('', false); ?>
        </h1>
        <p>Todos los artículos publicados en la categoría de
            <?php echo single_cat_title('', false); ?>.
        </p>
        <?php if (category_description()): ?>
            <div class="category-description">
                <?php echo category_description(); ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Grid de Artículos -->
    <section class="revista-section container">

        <?php if (have_posts()): ?>

            <div class="category-grid-2col">
                <?php while (have_posts()):
                    the_post(); ?>

                    <?php
                    // Obtener datos del autor
                    $author_id = get_the_author_meta('ID');
                    $author_name = get_the_author();
                    ?>

                    <article class="revista-card-big archive-card">
                        <div class="card-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default-post.png"
                                        alt="<?php the_title(); ?>">
                                <?php endif; ?>
                            </a>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title"><a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a></h3>
                            <div class="card-excerpt">
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </div>
                            <div class="card-author">
                                <div class="author-avatar">
                                    <a href="<?php echo get_author_posts_url($author_id); ?>">
                                        <?php echo get_avatar($author_id, 60); ?>
                                    </a>
                                </div>
                                <div class="author-info">
                                    <span class="by">Por</span>
                                    <span class="name">
                                        <a href="<?php echo get_author_posts_url($author_id); ?>">
                                            <?php echo $author_name; ?>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </article>

                <?php endwhile; ?>
            </div>

            <!-- Paginación -->
            <div class="pagination-wrapper">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => '&larr; Anterior',
                    'next_text' => 'Siguiente &rarr;',
                ));
                ?>
            </div>

        <?php else: ?>
            <p>No hay artículos en esta categoría.</p>
        <?php endif; ?>

    </section>

</div>


<?php get_footer(); ?>