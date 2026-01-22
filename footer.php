<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col" style="text-align: center;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo"
                    class="footer-logo">
                <h4>Busca Salud Profesional</h4>
                <p style="font-size: 0.9rem; color: #666;">Conectando conocimiento, profesionales y decisiones en salud
                </p>
            </div>
            <!-- Enlaces footer simplificados -->
            <div class="footer-col" style="grid-column: span 2;">
                <h4>Plataforma</h4>
                <div style="display: flex; justify-content: space-between; gap: 20px;">
                    <ul class="footer-links">
                        <li><a href="#revista">Revista</a></li>
                        <li><a href="#foro">Foro</a></li>
                        <li><a href="#buscador">Buscador</a></li>
                        <li><a href="#agenda">Agenda</a></li>
                    </ul>
                    <ul class="footer-links" style="margin-top: 0;">
                        <li><a href="#academia">Academia</a></li>
                        <li><a href="#tienda">Tienda</a></li>
                        <li><a href="#investigacion">Investigación</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-col">
                <h4>Contacto</h4>
                <p style="font-size: 0.9rem; color: #666;">buscasalud.pro@gmail.com</p>
                <div class="social-icons footer-social">
                    <a href="https://www.facebook.com/buscasalud.pro/" target="_blank" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/buscasalud.pro/" target="_blank" aria-label="Instagram"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank" aria-label="Threads"><i class="fab fa-threads"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy;
                <?php echo date('Y'); ?> Busca Salud Profesional
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>