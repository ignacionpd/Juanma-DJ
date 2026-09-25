<?php
require_once __DIR__ . '/../config/config.php';

# Comprobar si existe una sesión activa y en caso de que no así la crearemos
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas frecuentes | Juanma DJ</title>
    <meta name="description" content="Preguntas frecuentes sobre los servicios de Juanma DJ.">
    <!--<link rel="canonical" href="https://TU-DOMINIO.com/views/preguntas_frecuentes.php">-->
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/favicon/site.webmanifest">
</head>

<body>
    <div class="mi_contenedor">
        <!-- HEADER -->
        <header class="mi_encabezado">

            <!-- CABECERA -->
            <div class="cabecera">
                
                <h1 class="efecto_inicial_titulos">JUANMA DJ</h1>

                <img
                    class="cabecera_logo"
                    src="../assets/images/cabecera/cabecera_logo.png"
                    alt="Logo Juanma DJ">
                <img
                    class="cabecera_foto"
                    src="../assets/images/cabecera/cabecera_foto.png"
                    alt="Foto de Juanma DJ">
            </div>

            <nav class="navigationBar">
                <ul class="navigationBarList">
                    <li><a class="enlace" href="../index.php">Inicio</a></li>
                    <li><a class="enlace" href="./galeria.php">Galería</a></li>
                    <li><a class="enlace active" href="#">Preguntas</a></li>
                    <li><a class="enlace" href="./contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </header>
        <!-- CUERPO PRINCIPAL-->
        <main class="mi_principal_fondo fondo_faq">
            
                <!-- CABECERA FAQ (STICKY) -->
                <div class="faq-header">
                    <h2 class="efecto_inicial_titulos">Preguntas frecuentes</h2>
                    <details class="faq-dropdown">
                        <summary>Ver todas las preguntas</summary>
                        <nav class="faq-nav">
                            <a href="#s1" class="faq-link">¿Tienes precios fijos?</a>
                            <a href="#s2" class="faq-link">¿Trabajas sólo en Alicante?</a>
                            <a href="#s3" class="faq-link">¿Sólo tienes el servicio de sonido?</a>
                        </nav>
                    </details>
                </div>

                <!-- CONTENIDO -->
            <div class="contenido_interno">
                <section class="faq-container">

                    <article id="s1" class="faq-section">
                        <h4>¿Tienes precios fijos?</h4>
                        <p><strong>►</strong> No. Cada solicitud es un presupuesto personalizado que se realiza dependiendo de varios factores como: distancia de desplazamiento, duración del evento, tipo de celebración, cantidad de invitados, entre otros.</p>
                        <button class="btn_contactar"><a href="./contacto.php">Quiero contactarme</a></button>
                    </article>

                    <article id="s2" class="faq-section">
                        <h4>¿Trabajas sólo en Alicante?</h4>
                        <p><strong>►</strong> ¡No, trabajo fuera de la provincia también!</p>
                        <button class="btn_contactar"><a href="./contacto.php">Quiero contactarme</a></button>
                    </article>

                    <article id="s3" class="faq-section">
                        <h4>¿Sólo tienes el servicio de sonido?</h4>
                        <p><strong>►</strong> No. También realizo trabajos en conjunto con <a class="enlace_presentacion" href="https://ignacionpd.github.io/solcitoseventos/" target="_blank">Solcitos Eventos</a> en animaciones infantiles para distintas edades. ¡También realizamos promociones al contratar ambos servicios!</p>
                        <button class="btn_contactar"><a href="./contacto.php">Quiero contactarme</a></button>
                    </article>

                </section>
            </div>

        </main>
        <!-- PIE DE PÁGINA-->
        <footer class="mi_pie">

            <div class="contenedor_footer">

                <!-- TELEFONO, IG y CORREO -->
                <div class="contacto_pie">
                    <ul>
                        <li>
                            <a href="https://wa.me/+34662650963" target="_blank">
                                <img class="iconos" src="../assets/iconos/whatsapp-green.svg" alt="Teléfono de Juanma Dj" width="94" height="32">
                                <span>(+34) 662650963</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/juanma.dj" target="_blank">
                                <img class="iconos" src="../assets/iconos/instagram.svg" alt="Instagram de Juanma Dj" width="94" height="32">
                                <span>juanma.dj</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:juanmmprieto@gmail.com" target="_blank">
                                <img class="iconos" src="../assets/iconos/email.svg" alt="Email de Juanma Dj" width="94" height="32">
                                <span>juanmmprieto@gmail.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.ru/maps/@38.3433424,-0.4892534,15z?entry=ttu&g_ep=EgoyMDI2MDMxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                                <img class="iconos" src="../assets/iconos/location.svg" alt="Ubicación Juanma Dj" width="94" height="32">
                                <span>Alicante</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- LOGO Juanma DJ -->
                <div class="logo_pie">
                    <img src="../assets/images/cabecera/cabecera_logo.png" alt="Logo de Juanma DJ">
                </div>

                <!-- AVISO LEGAL COPYRIGHT -->
                <div class="contacto_pie_nav">
                    <div class="contacto_flex_row">
                        <ul>
                            <li><a href="../index.php">Inicio</a></li>
                            <li><a href="./galeria.php">Galería</a></li>
                            <li><a href="./contacto.php">Contacto</a></li>
                            <li><a href="./preguntas.php">Preguntas</a></li>
                        </ul>
                    </div>
                    <small class="aviso_legal">&copy; Todos los derechos reservados</small>
                </div>
            </div>

        </footer>
        <script src="../assets/scripts/v_preguntas.js"></script>
    </div>
</body>

</html>