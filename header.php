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
                    <li><a href="#inicio" class="nav-link">Inicio</a></li>
                    <li><a href="#buscador" class="nav-link">Buscador</a></li>
                    <li><a href="#revista" class="nav-link">Revista</a></li>
                    <li><a href="#agenda" class="nav-link">Agenda</a></li>
                    <li><a href="#foro" class="nav-link">Foro</a></li>
                    <li><a href="#tienda" class="nav-link">Tienda</a></li>
                    <li><a href="#academia" class="nav-link">Academia</a></li>
                    <li><a href="#investigacion" class="nav-link">Investigación</a></li>
                    <li><a href="#nosotros" class="nav-link">Nosotros</a></li>
                </ul>
            </nav>
        </div>
    </header>