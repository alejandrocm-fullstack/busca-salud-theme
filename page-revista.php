<?php
/**
 * Template Name: Revista Digital
 *
 * Plantilla para la sección de Revista Digital con diseño por categorías.
 */

get_header();

// Definir las categorías a mostrar y sus iconos asociados
$categorias_revista = array(
    'nutricion' => array('name' => 'Nutrición', 'icon' => 'icon-nutricion.png'),
    'psicologia' => array('name' => 'Psicología', 'icon' => 'icon-psicologia.png'),
    'pediatria' => array('name' => 'Pediatría', 'icon' => 'icon-pediatria.png'),
    // 'entrenamiento' => array('name' => 'Entrenamiento', 'icon' => 'icon-entrenamiento.png'), // Eliminado a petición del usuario
    'ginecologia' => array('name' => 'Ginecología', 'icon' => 'icon-ginecologia.png'),
    'dermatologia' => array('name' => 'Dermatología', 'icon' => 'icon-dermatologia.png'),
    'fisioterapia' => array('name' => 'Fisioterapia', 'icon' => 'icon-fisioterapia.png'),
);

// NUEVO: Ordenar categorías por fecha del último post
foreach ($categorias_revista as $slug => $info) {
    // Obtener el último post de esta categoría para ver su fecha
    $latest_post = get_posts(array(
        'category_name' => $slug,
        'posts_per_page' => 1,
        'post_status' => 'publish',
        'fields' => 'ids' // Solo necesitamos ID para ser más eficientes, aunque get_posts trae objetos por defecto si no
    ));

    // Si hay post, guardamos su fecha (timestamp), si no, fecha muy antigua (0)
    if (!empty($latest_post)) {
        // get_posts devuelve array de objetos WP_Post. Accedemos al primero.
        $categorias_revista[$slug]['last_post_date'] = get_the_date('U', $latest_post[0]);
    } else {
        $categorias_revista[$slug]['last_post_date'] = 0;
    }
}

// Función de comparación para ordenar de más reciente a más antiguo
uasort($categorias_revista, function ($a, $b) {
    return $b['last_post_date'] - $a['last_post_date'];
});
?>

<div class="revista-container">

    <!-- Cabecera Principal de la Revista -->
    <div class="revista-main-header container">
        <h1>Revista Digital</h1>
        <p>Artículos especializados escritos por profesionales de la salud.</p>
    </div>

    <!-- Loop por Categorías -->
    <?php
    $cat_counter = 0;
    foreach ($categorias_revista as $slug => $cat_info):
        $cat_counter++;

        // Argumentos para obtener los últimos 5 posts de la categoría actual
        $args = array(
            'category_name' => $slug,
            'posts_per_page' => 5,
            'post_status' => 'publish'
        );
        $query = new WP_Query($args);

        // Solo mostrar la sección si hay posts
        if ($query->have_posts()):
            ?>

            <section class="revista-section container" id="seccion-<?php echo $slug; ?>">

                <!-- Cabecera de Categoría (Estilo Instagram) -->
                <div class="revista-cat-header">
                    <div class="cat-icon-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $cat_info['icon']; ?>"
                            alt="<?php echo $cat_info['name']; ?>" class="cat-icon">
                    </div>
                    <h2 class="cat-title"><?php echo $cat_info['name']; ?></h2>
                </div>

                <div class="revista-grid">
                    <?php
                    $post_count = 0;
                    while ($query->have_posts()):
                        $query->the_post();
                        $post_count++;

                        // Obtener datos del autor
                        $author_id = get_the_author_meta('ID');
                        $author_name = get_the_author();
                        // Intentar obtener avatar de Ultimate Member o WP
                        $author_avatar = get_avatar($author_id, 60);

                        // Verificar si es el primer post (Destacado Grande)
                        if ($post_count === 1):
                            ?>
                            <!-- Post Destacado (Grande) -->
                            <article class="revista-card-big">
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
                                    <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="card-excerpt"><?php the_excerpt(); ?></div>

                                    <div class="card-author">
                                        <div class="author-avatar">
                                            <a href="<?php echo get_author_posts_url($author_id); ?>">
                                                <?php echo $author_avatar; ?>
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

                            <!-- Contenedor para los posts secundarios -->
                            <div class="revista-secondary-posts">

                            <?php else: // Posts 2, 3, 4 (Pequeños) ?>

                                <article class="revista-card-small">
                                    <div class="card-image-small">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('medium'); ?>
                                            <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default-post.png"
                                                    alt="<?php the_title(); ?>">
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="card-content-small">
                                        <h4 class="card-title-small"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                        <div class="card-author-small">
                                            <a href="<?php echo get_author_posts_url($author_id); ?>">
                                                <?php echo $author_name; ?>
                                            </a>
                                        </div>
                                    </div>
                                </article>

                            <?php endif; ?>

                        <?php endwhile; ?>

                        <?php if ($query->post_count > 1): ?>
                        </div> <!-- Cierre .revista-secondary-posts -->
                    <?php endif; ?>

                </div> <!-- Cierre .revista-grid -->

            </section>



            <?php
        endif; // if have_posts
        wp_reset_postdata();
    endforeach;
    ?>

</div>

<?php get_footer(); ?>