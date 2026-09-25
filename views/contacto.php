<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../controllers/flash.php';

# Comprobar si existe una sesión activa y en caso de que no así la crearemos
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$old = getFlash('old') ?? [];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Juanma DJ</title>
    <meta name="description" content="Página de contacto de Juanma DJ">
    <!--<link rel="canonical" href="https://TU-DOMINIO.com/views/contacto.php">-->
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
                    <li><a class="enlace" href="./galeria.php">Galería</a></li>
                    <li><a class="enlace" href="./preguntas_frecuentes.php">Preguntas</a></li>
                    <li><a class="enlace active" href="./contacto.php">Contacto</a></li>
            </nav>
        </header>
        
        <!-- CUERPO PRINCIPAL-->
        <main class="mi_principal_fondo fondo_contacto">

            <h2 class="efecto_inicial_titulos">Contacto</h2>
            <div class="aviso_registro">
                <?php
                # Comprobar si hay mensajes de error
                if (isset($_SESSION["mensaje_error"])) {
                    echo "<span class='error_message'>" . $_SESSION['mensaje_error'] . "</span>";

                    # Eliminar el mensaje de error
                    unset($_SESSION["mensaje_error"]);
                }


                # Comprobar si hay mensajes de exito
                if (isset($_SESSION["mensaje_exito"])) {
                    echo "<span class='success_message'>" . $_SESSION['mensaje_exito'] . "</span>";

                    # Eliminar el mensaje de error
                    unset($_SESSION["mensaje_exito"]);
                }

                ?>
            </div>
            <section>
                <div class="contenedor_presentacion_contacto">

                    <div class="container_datos_contacto">
                        <h3>Datos de contacto</h3>

                        <div class="datos_contacto">
                            <div class="flex_row">
                                <img src="../assets/iconos/whatsapp-green.svg" alt="Teléfono Juanma DJ">
                                <span>Teléfono:</span>
                                <a href="https://wa.me/+34662650963" target="_blank">(+34) 662650963</a>
                            </div>
                            <div class="flex_row">
                                <img src="../assets/iconos/email.svg" alt="Email Juanma DJ">
                                <span>Email:</span>
                                <a href="mailto:juanmmprieto@gmail.com">juanmmprieto@gmail.com</a>
                            </div>
                            <div class="flex_row">
                                <img src="../assets/iconos/location.svg" alt="Ubicaciónn Juanma DJ">
                                <span>Ubicación:</span>
                                <a href="https://www.google.ru/maps/@38.3433424,-0.4892534,15z?entry=ttu&g_ep=EgoyMDI2MDMxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">Alicante - Comunidad Valenciana</a>
                            </div>
                        </div>
                    </div>
                    <div class="container_form">
                        <form id="contacto_form" action="../controllers/c_contacto.php" method="post">
                            <h3>Formulario de contacto</h3>

                            <div class="form_options">
                                <label for="input_name">Nombre: *</label>
                                <div class="input_zone">
                                    <input type="text" id="input_name" name="input_name" value="<?= htmlspecialchars($old['input_name'] ?? '') ?>" placeholder="Escriba su nombre" title="El nombre deberá contener entre 2 y 20 letras y se podrá hacer uso de hasta 2 espacios no consecutivos" required>
                                    <small class="input_error"></small>
                                </div>
                            </div>
                            <div class="form_options">
                                <label for="input_lastname">Apellido: *</label>
                                <div class="input_zone">
                                    <input type="text" id="input_lastname" name="input_lastname" value="<?= htmlspecialchars($old['input_lastname'] ?? '') ?>" placeholder="Escriba su apellido" title="El/los apellidos deberán contener entre 2 y 20 letras y se podrá hacer uso de un único espacio" required>
                                    <small class="input_error"></small>
                                </div>
                            </div>
                            <div class="form_options">
                                <label for="input_tel">Teléfono: *</label>
                                <div class="input_zone">
                                    <input type="text" id="input_tel" name="input_tel" value="<?= htmlspecialchars($old['input_tel'] ?? '') ?>" placeholder="Escriba su número de teléfono" title="El telefono deberá contener entre 8 y 11 dígitos" required>
                                    <small class="input_error"></small>
                                </div>
                            </div>
                            <div class="form_options">
                                <label for="input_email">Email: *</label>
                                <div class="input_zone">
                                    <input type="text" id="input_email" name="input_email" value="<?= htmlspecialchars($old['input_email'] ?? '') ?>" placeholder="Escriba su correo electrónico" title="El correo electrónico similar a: xxxxx@xxx.xxx" required>
                                    <small class="input_error"></small>
                                </div>
                            </div>
                            <div class="form_options">
                                <label for="input_adress">Ubicación del evento:</label>
                                <div class="input_zone">
                                    <input type="text" id="input_adress" name="input_adress" value="<?= htmlspecialchars($old['input_adress'] ?? '') ?>" placeholder="Escriba su dirección" title="La dirección deberá contener entre 3 y 45 letras">
                                    <small class="input_error"></small>
                                </div>
                            </div>
                            <div class="form_options">
                                <label for="input_text">Mensaje: *</label>
                                <div class="input_zone">
                                    <textarea id="input_text" name="input_text" value="<?= htmlspecialchars($old['input_text'] ?? '') ?>" placeholder="Escriba un comentario" title="Puede escribir entre 10 y 250 caracteres. Sólo se aceptan los siguientes símbolos especiales: . , _ - º " required></textarea>
                                    <small class="input_error"></small>
                                </div>
                            </div>
                            <div class="politicas">
                                <input type="checkbox" id="privacidad" name="privacidad"  value="1" class="check" required>
                                <div class="input_zone">
                                    <span>Acepto las <a href="./politicas_de_privacidad.html" class="check_link" target="_blank">políticas de privacidad.</a></span>
                                    <small class="input_error"></small>
                                </div>
                            </div>
                            
                            <div class="form_buttons">
                                <input type="reset" class="btn_reset" value="Borrar">
                                <input type="submit" class="btn_enviar" name="contactarse" value="Enviar">
                            </div>

                        </form>
                    </div>
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

    <script src="../assets/scripts/v_contacto.js"></script>

</body>

</html>