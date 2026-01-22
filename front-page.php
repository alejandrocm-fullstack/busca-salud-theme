<?php get_header(); ?>

<!-- Hero Section -->
<section id="inicio" class="hero">
    <div class="container hero-content">
        <h1>La salud empieza con la información correcta y el profesional adecuado</h1>
        <p>Antes de elegir un profesional de la salud, conócelo a través de sus artículos especializados, su actividad
            en el foro, sus eventos y sus formaciones, y localízalo en el buscador de profesionales.</p>

        <!-- Botones Registro Separados -->
        <div class="hero-buttons">
            <a href="#registro-profesional" class="btn btn-primary">Regístrate como Profesional</a>
            <a href="#registro-usuario" class="btn btn-outline">Regístrate como Usuario</a>
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
                        <input type="text" class="form-input" placeholder="ejemplo@dominio.com">
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
            <h2>Revista</h2>
            <p>Artículos especializados de salud escritos por profesionales. Información precisa y fundamentada para
                comprender mejor tu situación de salud, conocer a los especialistas y su enfoque profesional.</p>
            <a href="#" class="btn btn-outline">Leer Artículos</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/revista.png" alt="Revista"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Foro -->
<section id="foro" class="section">
    <div class="container section-content reverse">
        <div class="section-text-block">
            <h2>Foro</h2>
            <p>Espacio de diálogo donde los profesionales amplían sus artículos, responden dudas y profundizan en los
                temas tratados, permitiendo a los usuarios valorar una consulta o visita con mayor criterio.</p>
            <a href="#" class="btn btn-outline">Ver Conversaciones</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foro.png" alt="Foro"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Buscador -->
<section id="buscador" class="section">
    <div class="container section-content">
        <div class="section-text-block">
            <h2>Buscador</h2>
            <p>Localiza profesionales de la salud en cualquier parte del mundo.
                Tras informarte y resolver tus dudas, utiliza el buscador para encontrar al profesional adecuado y
                valorar una consulta, contacto o contratación según tus necesidades.</p>
            <a href="#" class="btn btn-outline">Buscar Profesionales</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buscador.png" alt="Buscador"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Agenda -->
<section id="agenda" class="section">
    <div class="container section-content reverse">
        <div class="section-text-block">
            <h2>Agenda</h2>
            <p>Consulta conferencias, congresos, ferias, encuentros profesionales y fechas de inicio de cursos y
                talleres, tanto online como presenciales, organizados o impartidos por profesionales de la salud a nivel
                internacional.</p>
            <a href="#" class="btn btn-outline">Ver Agenda</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/agenda.png" alt="Agenda"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Academia -->
<section id="academia" class="section">
    <div class="container section-content">
        <div class="section-text-block">
            <h2>Academia</h2>
            <p>Formación en salud impartida por profesionales. Cursos estructurados en modalidad online, presencial o
                combinada, con una plataforma de apoyo para el seguimiento, los contenidos y el aprendizaje continuo.
            </p>
            <a href="#" class="btn btn-outline">Ver Cursos</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/academia.png" alt="Academia"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Tienda -->
<section id="tienda" class="section">
    <div class="container section-content reverse">
        <div class="section-text-block">
            <h2>Tienda</h2>
            <p>Compra cursos y productos de salud y bienestar. Accede desde la plataforma a formación impartida por
                profesionales y, para profesionales, a espacios de investigación y colaboración.</p>
            <a href="#" class="btn btn-outline">Explorar Tienda</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tienda.png" alt="Tienda"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Investigación -->
<section id="investigacion" class="section">
    <div class="container section-content">
        <div class="section-text-block">
            <h2>Investigación</h2>
            <p>Espacio profesional y seguro, exclusivo para especialistas, donde crear grupos de trabajo de alcance
                internacional, gestionar documentación clínica de casos no resueltos y colaborar en la investigación
                aplicada y la mejora continua de tratamientos en enfermedades específicas.</p>
            <a href="#" class="btn btn-outline">Área Científica</a>
        </div>
        <div class="section-image-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/investigacion.svg" alt="Investigación"
                style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>
</section>

<!-- Nosotros -->
<section id="nosotros" class="section" style="background-color: var(--color-bg-light);">
    <div class="container section-text-block" style="text-align: center; max-width: 800px;">
        <h2>Quiénes Somos</h2>
        <p>Una plataforma de salud basada en la transparencia, el conocimiento y la autonomía profesional. Un espacio
            donde los profesionales ejercen con libertad y las personas pueden informarse, comprender y decidir con
            criterio.</p>
        <a href="#" class="btn btn-outline">Más sobre nosotros</a>
    </div>
</section>

<?php get_footer(); ?>