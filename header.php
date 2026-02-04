<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Header -->
    <header class="header">
        <div class="container header-inner">
            <div class="logo-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
                <span class="logo-text">Busca Salud Profesional</span>
            </div>

            <nav class="nav-menu">
                <ul>
                    <!-- Note: In a full WordPress theme, this would often be wp_nav_menu() -->
                    <li><a href="<?php echo home_url('/'); ?>" class="nav-link">Inicio</a></li>
                    <li><a href="<?php echo home_url('/revista'); ?>" class="nav-link">Revista</a></li>
                    <li><a href="<?php echo home_url('/foro'); ?>" class="nav-link">Foro</a></li>
                    <li><a href="<?php echo home_url('/buscador'); ?>" class="nav-link">Buscador</a></li>
                    <li><a href="<?php echo home_url('/agenda'); ?>" class="nav-link">Agenda</a></li>
                    <li><a href="<?php echo home_url('/academia'); ?>" class="nav-link">Academia</a></li>
                    <li><a href="<?php echo home_url('/tienda'); ?>" class="nav-link">Tienda</a></li>
                    <li><a href="<?php echo home_url('/investigacion'); ?>" class="nav-link">Investigación</a></li>
                    <li><a href="<?php echo home_url('/nosotros'); ?>" class="nav-link">Nosotros</a></li>
                    <?php if (is_user_logged_in()): ?>
                        <li><a href="<?php echo home_url('/usuario'); ?>" class="nav-link" style="color: var(--primary);">Mi
                                Perfil</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo home_url('/acceder'); ?>" class="nav-link"
                                style="color: var(--primary);">Acceder</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
            <!-- Hamburger Button -->
            <button class="mobile-menu-toggle" aria-label="Abrir menú">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay">
        <button class="mobile-menu-close" aria-label="Cerrar menú">&times;</button>
        <nav class="mobile-nav">
            <ul>
                <li><a href="<?php echo home_url('/'); ?>" class="mobile-nav-link">Inicio</a></li>
                <li><a href="<?php echo home_url('/revista'); ?>" class="mobile-nav-link">Revista</a></li>
                <li><a href="<?php echo home_url('/foro'); ?>" class="mobile-nav-link">Foro</a></li>
                <li><a href="<?php echo home_url('/buscador'); ?>" class="mobile-nav-link">Buscador</a></li>
                <li><a href="<?php echo home_url('/agenda'); ?>" class="mobile-nav-link">Agenda</a></li>
                <li><a href="<?php echo home_url('/academia'); ?>" class="mobile-nav-link">Academia</a></li>
                <li><a href="<?php echo home_url('/tienda'); ?>" class="mobile-nav-link">Tienda</a></li>
                <li><a href="<?php echo home_url('/investigacion'); ?>" class="mobile-nav-link">Investigación</a></li>
                <li><a href="<?php echo home_url('/nosotros'); ?>" class="mobile-nav-link">Nosotros</a></li>
                <?php if (is_user_logged_in()): ?>
                    <li><a href="<?php echo home_url('/usuario'); ?>" class="mobile-nav-link highlight">Mi Perfil</a></li>
                <?php else: ?>
                    <li><a href="<?php echo home_url('/acceder'); ?>" class="mobile-nav-link highlight">Acceder</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggle = document.querySelector('.mobile-menu-toggle');
            const close = document.querySelector('.mobile-menu-close');
            const overlay = document.querySelector('.mobile-menu-overlay');

            function toggleMenu() {
                overlay.classList.toggle('active');
                document.body.style.overflow = overlay.classList.contains('active') ? 'hidden' : '';
            }

            if (toggle) toggle.addEventListener('click', toggleMenu);
            if (close) close.addEventListener('click', toggleMenu);

            // Close when clicking a link
            const links = document.querySelectorAll('.mobile-nav-link');
            links.forEach(link => {
                link.addEventListener('click', toggleMenu);
            });
        });
    </script>