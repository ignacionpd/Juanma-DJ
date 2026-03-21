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
    <title>Juanma DJ</title>
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
                <img class="cabecera_titulo" src="../assets/images/cabecera/cabecera_completaa.png" alt="imagen Juanma DJ">
            </div>

            <nav class="navigationBar">

                <?php if (isset($_SESSION["user_data"])): ?>
                    <input type="checkbox" id="check_menu" class="check_menu">
                <?php endif; ?>

                <ul class="navigationBarList">
                    <li><a class="enlace" href="../index.php">Inicio</a></li>
                    <li><a class="enlace active" href="#">Galería</a></li>
                    <li><a class="enlace" href="./preguntas_frecuentes.php">Preguntas</a></li>
                    <li><a class="enlace" href="./contacto.php">Contacto</a></li>

                    <?php if (isset($_SESSION["user_data"])): ?>
                        <li>
                            <label for="check_menu" class="label_check">
                                <img src="../assets/iconos/menu.svg" alt="Menú">
                            </label>
                        </li>
                    <?php endif; ?>
                </ul>

                <?php if (isset($_SESSION["user_data"])): ?>

                    <ul class="navigationBarListUser">
                        <li><a class="enlace" href="./user/solicitudes.php">Solicitudes</a></li>
                        <li><a class="enlace" href="./user/perfil.php">Perfil</a></li>
                        <li><a class="enlace" href="../controllers/logout.php">Cerrar sesión</a></li>
                    </ul>
                <?php endif; ?>
            </nav>
        </header>
        <!-- CUERPO PRINCIPAL-->
        <main class="mi_principal_fondo fondo_contacto">
            <h2>Galería</h2>

            <section class="galeria-container">
                <div class="galeria">
                    <img src="../assets/images/1.jpeg" alt="Juanma DJ">
                    <img src="../assets/images/2.jpeg" alt="Juanma DJ">
                    <img src="../assets/images/3.jpeg" alt="Juanma DJ">
                    <img src="../assets/images/4.jpeg" alt="Juanma DJ">
                    <img src="../assets/images/5.jpeg" alt="Juanma DJ">
                    <img src="../assets/images/6.jpeg" alt="Juanma DJ">
                    <img src="../assets/images/7.jpeg" alt="Juanma DJ">
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
                            <a href="https://wa.me/662650963" target="_blank">
                                <img class="iconos" src="../assets/iconos/whatsapp-green.svg" alt="correo Juanma Dj" width="94" height="32">
                                <span>662650963</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/juanma.dj" target="_blank">
                                <img class="iconos" src="../assets/iconos/instagram.svg" alt="correo Juanma Dj" width="94" height="32">
                                <span>juanma.dj</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:juanmadj@gmail.com" target="_blank">
                                <img class="iconos" src="../assets/iconos/email.svg" alt="correo Juanma Dj" width="94" height="32">
                                <span>juanmadj@gmail.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.ru/maps/@38.3433424,-0.4892534,15z?entry=ttu&g_ep=EgoyMDI2MDMxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                                <img class="iconos" src="../assets/iconos/location.svg" alt="ubicación Juanma Dj" width="94" height="32">
                                <span>Alicante</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- LOGO Juanma DJ -->
                <div class="logo_pie">
                    <img src="../assets/images/cabecera/cabecera_logo.png" alt="logo Juanma DJ">
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