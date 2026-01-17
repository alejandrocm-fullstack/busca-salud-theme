Instrucciones de Instalación
============================

1. Este directorio `busca-salud-theme` es tu tema completo.
2. Comprime esta carpeta en un archivo .zip (asegúrate de que dentro del zip esté la carpeta `busca-salud-theme`).
3. Ve a tu panel de WordPress -> Apariencia -> Temas -> Añadir nuevo -> Subir tema.
4. Sube el .zip y actívalo.
5. Ve a Ajustes -> Lectura.
6. En "Tu portada muestra", selecciona "Una página estática".
7. Selecciona "Inicio" (o crea una página llamada Inicio vacía) como Portada.
   Nota: Al ser `front-page.php`, WordPress debería usarla automáticamente para la portada, pero es bueno configurarlo explícitamente.

Cómo hacer cambios
------------------
- El contenido principal está en `front-page.php`.
- La cabecera (logo, menú) está en `header.php`.
- El pie de página está en `footer.php`.
- Los estilos están en `assets/css/style.css` (editables desde `css/style.css` en la raíz del proyecto local, luego copiar).

Flujo de trabajo
----------------
1. Hacemos cambios aquí en los archivos.
2. Copias los archivos modificados a tu servidor (puedes usar FTP/SFTP para subir solo el archivo cambiado a `wp-content/themes/busca-salud-theme/`).
