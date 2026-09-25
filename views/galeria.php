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
    <title>Galería | Juanma DJ</title>
    <meta name="description" content="Galería de imágenes de eventos y celebraciones de Juanma DJ">
    <!--<link rel="canonical" href="https://TU-DOMINIO.com/views/galeria.php">-->

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
                    alt="Logo de Juanma DJ">
                <img
                    class="cabecera_foto"
                    src="../assets/images/cabecera/cabecera_foto.png"
                    alt="Foto de Juanma DJ">
            </div>

            <nav class="navigationBar">
                <ul class="navigationBarList">
                    <li><a class="enlace" href="../index.php">Inicio</a></li>
                    <li><a class="enlace active" href="#">Galería</a></li>
                    <li><a class="enlace" href="./preguntas_frecuentes.php">Preguntas</a></li>
                    <li><a class="enlace" href="./contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </header>
        <!-- CUERPO PRINCIPAL-->
        <main class="mi_principal_fondo fondo_contacto">
            <h2 class="efecto_inicial_titulos">Galería</h2>

            <section class="galeria-container">
                <div class="galeria">
                    <img src="../assets/images/1.jpg" alt="Evento de Juanma DJ">
                    <img src="../assets/images/2.jpeg" alt="Evento de Juanma DJ">
                    <img src="../assets/images/3.jpeg" alt="Evento de Juanma DJ">
                    <img src="../assets/images/4.jpeg" alt="Evento de Juanma DJ">
                    <img src="../assets/images/5.jpeg" alt="Evento de Juanma DJ">
                    <img src="../assets/images/6.jpg" alt="Evento de Juanma DJ">
                    <img src="../assets/images/7.jpg" alt="Evento de Juanma DJ">
                    <img src="../assets/images/8.jpeg" alt="Evento de Juanma DJ">
                    <img src="../assets/images/9.jpg" alt="Evento de Juanma DJ">
                    <img src="../assets/images/10.jpg" alt="Evento de Juanma DJ">
                    <img src="../assets/images/11.jpeg" alt="Evento de Juanma DJ">
                    <img src="../assets/images/12.jpg" alt="Evento de Juanma DJ">
                    <img src="../assets/images/13.jpg" alt="Evento de Juanma DJ">
                </div>
            </section>
        </main>

        <!-- PIE DE PÁGINA-->
        <footer class="mi_pie">

            <div class="contenedor_footer">

                <!-- TELEFONO, IG y CORREO -->
                <div class="contacto_pie">
                    <ul>
                        <li>
                            <a href="https://wa.me/+34662650963" target="_blank">
                                <img class="iconos" src="../assets/iconos/whatsapp-green.svg" alt="Teléfono Juanma Dj" width="94" height="32">
                                <span>(+34) 662650963</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/juanma.dj" target="_blank">
                                <img class="iconos" src="../assets/iconos/instagram.svg" alt="Instagram Juanma Dj" width="94" height="32">
                                <span>juanma.dj</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:juanmmprieto@gmail.com" target="_blank">
                                <img class="iconos" src="../assets/iconos/email.svg" alt="Email Juanma Dj" width="94" height="32">
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

    </div>

</body>

</html>