<?php get_header(); ?>

<!-- Hero Section -->
<section id="inicio" class="hero">
    <div class="container hero-content">
        <h1>Donde la necesidad encuentra a la excelencia</h1>
        <p>El punto de encuentro global entre personas que buscan salud y profesionales que ofrecen soluciones,
            conocimiento e innovación.</p>

        <!-- Botones Registro Separados -->
        <div class="hero-buttons">
            <a href="#registro-profesional" class="btn btn-primary">Registrarme como Profesional</a>
            <a href="#registro-usuario" class="btn btn-outline">Registrarme como Usuario</a>
        </div>

        <!-- Caja de Login Superior -->
        <div class="login-box-container">
            <div class="login-card">
                <div class="login-header">
                    <h3>Acceso Seguro</h3>
                    <p>Entra a tu espacio personal</p>
                </div>
                <form>
                    <div class="form-group">
                        <label class="form-label">Email / Usuario</label>
                        <input type="text" class="form-input" placeholder="ejemplo@correo.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-input" placeholder="••••••••">
                    </div>
                    <button type="button" class="btn btn-primary btn-login">Entrar</button>
                </form>
                <div class="login-footer">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Revista -->
<section id="revista" class="section">
    <div class="container section-content">
        <div class="section-text-block">
            <h2>Revista de Especialidades</h2>
            <p>Descubre quién está detrás del servicio. Nuestros profesionales comparten su conocimiento a través de
                artículos especializados, permitiéndote conocer su experiencia y enfoque antes de contratar.</p>
            <a href="#" class="btn btn-outline">Leer Artículos</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/revista.png" alt="Revista Salud"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Foro -->
<section id="foro" class="section">
    <div class="container section-content reverse">
        <div class="section-text-block">
            <h2>Foro de Diálogo</h2>
            <p>Un espacio de conversación abierto. Profesionales creando hilos de debate científico y pacientes
                resolviendo dudas o compartiendo experiencias en una comunidad viva.</p>
            <a href="#" class="btn btn-outline">Ir a los Debates</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foro.png" alt="Foro Comunidad"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Buscador -->
<section id="buscador" class="section">
    <div class="container section-content">
        <div class="section-text-block">
            <h2>Buscador Global de Salud</h2>
            <p>Encuentra al profesional ideal en cualquier parte del mundo. Filtra por especialidad, ubicación y
                necesidades específicas. Ya seas paciente, empresa o institución, aquí está el experto cualificado
                que buscas.</p>
            <a href="#" class="btn btn-outline">Empezar Búsqueda</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buscador.png" alt="Buscador Global"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Agenda -->
<section id="agenda" class="section">
    <div class="container section-content reverse">
        <div class="section-text-block">
            <h2>Agenda Mundial de Eventos</h2>
            <p>El calendario definitivo de cursos, convenciones, congresos y talleres de salud. Mantente al día de
                todas las actividades formativas y presenciales a nivel global.</p>
            <a href="#" class="btn btn-outline">Ver Próximos Eventos</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/agenda.png" alt="Agenda Eventos"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Academia -->
<section id="academia" class="section">
    <div class="container section-content">
        <div class="section-text-block">
            <h2>Academia Online</h2>
            <p>Formación creada por profesionales, para todos. Desde cursos para pacientes que buscan autocuidado
                hasta formación especializada para otros expertos (Moodle).</p>
            <a href="#" class="btn btn-outline">Catálogo de Cursos</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/academia.png" alt="Academia Moodle"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Tienda -->
<section id="tienda" class="section">
    <div class="container section-content reverse">
        <div class="section-text-block">
            <h2>Tienda de Recursos</h2>
            <p>Tu acceso directo al conocimiento. Compra cursos de la academia, suscripciones a grupos de
                investigación y productos seleccionados para el sector salud y bienestar.</p>
            <a href="#" class="btn btn-outline">Visitar Tienda</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tienda.png" alt="Tienda Online"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Investigación -->
<section id="investigacion" class="section">
    <div class="container section-content">
        <div class="section-text-block">
            <h2>Investigación y Colaboración</h2>
            <p>Impulsa la ciencia. Un entorno seguro para crear grupos de trabajo (OpenKM), compartir
                descubrimientos y colaborar en investigaciones clínicas internacionales.</p>
            <a href="#" class="btn btn-outline">Área Científica</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/investigacion.svg"
                alt="Investigación Colaborativa" style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Nosotros -->
<section id="nosotros" class="section" style="background-color: var(--color-bg-light);">
    <div class="container section-text-block" style="text-align: center; max-width: 800px;">
        <h2>Quiénes Somos</h2>
        <p>Un equipo multidisciplinar comprometido con la excelencia en salud digital.</p>
        <a href="#" class="btn btn-outline">Más sobre nosotros</a>
    </div>
</section>

<?php get_footer(); ?>