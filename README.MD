|- README.md: La web se trata sobre un DJ argentino viviendo en España donde realiza su actividad en eventos diversos tanto para fiestas locales como extranjeras.


|- index.php: Es la página principal donde se encuentra una breve presentación del DJ, junto con un carousel de imágenes, una lista con logos de algunos de sus clientes importantes y colaboradores, un video de presentación y finalmente flyers con promociones y publicidad. 

|-VIEWS: Carpeta donde contendrán las vistas de las páginas que accede cualquier visitante.
|--galeria.php: Contiene diversas imágenes sobre algunos de los eventos realizados.
|--contacto.php: Vista que contiene el formulario de solicitud de contacto con la persona y una tabla con los datos de contacto directo.
|--preguntas_frecuentes.php: Vista en la cual se describen preguntas habituales que suelen consultar los clientes a la firma.

|-VIEWS/ERRORS/error500.html: Carpeta y archivo único que se utilizará para redirigir hacia ahí a un usuario ante cualquier error grave de la página.


|-CONTROLLERS: Carpeta que contendrá los controladores de la página web (comunicación con formulario de contacto, funciones, validaciones, PHPMailer, etc)
|--c_contacto.php: Controla lo enviado por la vista contacto.php donde el usuario visitante puede enviar sus datos solicitando el contacto del DJ, enviandosé mediante un formulario.
|--flash.php: Controlador que contiene las funciones para crear el mensaje de SESSION 'flash" en cada formulario de registro nuevo, donde almacenará los datos ingresados por el usuario o visitante, ante el caso que ese intento de envío sea incorrecto, volverá a cargar la info guardada para que la persona corrija sólo los erróneos. Luego, si se va de la página o cambia a otra web, esa variable se destruye.

|-CONTROLLERS/VALIDATIONS/v_inputData.php: Carpeta que contiene (en este caso uno solo -> v_inputData.php) los archivos con las validaciones de los datos ingresados a los formularios en cada formulario de ingreso de datos, devolviendo a los controladores los resultados de las comprobaciones necesarias (regex, por ejemplo).

|-CONFIG: Carpeta contenedora de los archivos principales referidos a la configuración y protección de cierta información.
|--config.php: Archivo donde se asegura que las páginas (que lo llamen previamente) obtengan los errores de manera más segura si los hubiesen.
|--.htaccess: Archivo que protege a config.php.

|-ASSETS: Carpeta que contendrá distintas carpetas y archivos como imágenes, hojas de estilos, scripts, etc.
|--CSS/estilos.css: Carpeta y archivo que contiene todos los estilos de la web.
|--FAVICON: Carpeta que contiene todos los archivos favicon de la web.
|--iconos: Carpeta que contiene todos los archivos de iconos de la web (email, whatsapp, etc).
|--IMAGES: Carpeta que contiene los archivos de imágnes de la web como los del encabezado, las imagenes de la presentación, archivos de logos de los clientes habituales.
|--SCRIPTS: Carpeta que contiene los archivos scripts de las distintas vistas.
|--VIDEOS: Carpeta que contiene los videos de la web.
|-SCRIPTS:
|---carousel.js: Controla el carousel de imágenes de index.php.
|---efectos.js: Controla los efectos de las imágenes y logos de index.php.
|---resenas.js: Controla los la interacción con las reseñas de Google (suspendido por el momento).
|---v_contacto.js: Script que controla los datos ingresados en el formulario de contacto en contacto.php.
|---v_preguntas.js: Configura el "scrollspy" de la vista preguntas_frecuentes.php.
|---videos.js: Configura la activación del sonido en los videos del index (donde están las marcas colaboradoras).
