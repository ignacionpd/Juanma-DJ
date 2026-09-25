<?php
require_once __DIR__ . '/config/config.php';

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
    <title>Inicio | Juanma DJ</title>
    <meta
        name="description"
        content="Presentación de Juanma DJ, DJ argentino afincado en Alicante, con experiencia musicalizando eventos tanto en Argentina como en España. Acompaño celebraciones como casamientos, bautizos, cumpleaños, fiestas privadas y todo tipo de eventos sociales, adaptando siempre la música al estilo y a la energía de cada celebración.">
    <!--<link rel="canonical" href="https://TU-DOMINIO.com/index.php">-->

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">
</head>

<body>
    <div class="mi_contenedor">
        <!-- HEADER -->
        <header class="mi_encabezado">

            <div class="cabecera">

                <h1 class="efecto_inicial_titulos">JUANMA DJ</h1>

                <img
                    class="cabecera_logo"
                    src="./assets/images/cabecera/cabecera_logo.png"
                    alt="Juanma DJ">

                <img
                    class="cabecera_foto"
                    src="./assets/images/cabecera/cabecera_foto.png"
                    alt="Juanma DJ">

            </div>

            <!-- NAVBAR -->
            <nav class="navigationBar">
                <ul class="navigationBarList">
                    <li><a class="enlace active" href="#">Inicio</a></li>
                    <li><a class="enlace" href="./views/galeria.php">Galería</a></li>
                    <li><a class="enlace" href="./views/preguntas_frecuentes.php">Preguntas</a></li>
                    <li><a class="enlace" href="./views/contacto.php">Contacto</a></li>
            </nav>
        </header>

        <!-- CUERPO PRINCIPAL-->
        <main class="mi_principal">

            <section class="hero">

                <div class="video-wrap">
                    <video autoplay loop muted playsinline class="bg-video">
                        <source src="./assets/videos/playa.webm" type="video/webm">
                        <source src="./assets/videos/playa-optimizado.mp4" type="video/mp4">
                    </video>
                    <div class="overlay"></div>
                </div>

                <div class="hero-content">
                    <h2 class="efecto_inicial_titulos">Presentación</h2>
                    <div class="contenedor_presentacion">
                        <div>
                            <img src="./assets/images/presentación.jpeg" alt="Juanma DJ">
                        </div>
                        <div>
                            <p>Soy DJ argentino afincado en <b>Alicante</b>, con experiencia musicalizando eventos tanto en <b>Argentina</b> como en <b>España</b>. Acompaño celebraciones como casamientos, bautizos, cumpleaños, fiestas privadas y todo tipo de eventos sociales, adaptando siempre la música al estilo y a la energía de cada celebración.</p>

                            <p>A lo largo de los años he tenido el placer de poner música para invitados de <b>distintas nacionalidades</b> — españoles, polacos, italianos, franceses, latinoamericanos, entre otras — creando ambientes donde todos se sientan parte de la fiesta.</p>

                            <p>Actualmente participo en eventos en distintos espacios de Alicante, principalmente en celebraciones en el <b>Hotel Meliá</b>, además de trabajar junto a equipos de organización como <b><a class="enlace_presentacion" href="https://sonidoalicante.com/" target="_blank">Sunloud Events</a></b>, <b><a class="enlace_presentacion" href="https://sileproducciones.com/" target="_blank">Sile Producciones</a></b> y <b><a class="enlace_presentacion" href="https://ignacionpd.github.io/solcitoseventos/" target="_blank">Solcitos Eventos</a></b>, ofreciendo propuestas completas de música y animación para celebraciones inolvidables.</p>

                            <p>Mi objetivo es simple: que cada evento tenga su propia identidad y que la música haga que todos quieran salir a la pista.</p>

                        </div>
                    </div>
            </section>

            <!-- CAROUSEL -->
            <section class="efecto_horizontal">
                <div class="carousel-container">

                    <div class="carousel-fade">
                        <div class="carousel-slide">
                            <img src="./assets/images/2.jpeg" alt="imagen Juanma DJ">
                        </div>

                        <div class="carousel-slide">
                            <img src="./assets/images/3.jpeg" alt="imagen Juanma DJ">
                        </div>

                        <div class="carousel-slide">
                            <img src="./assets/images/4.jpeg" alt="imagen Juanma DJ">
                        </div>

                        <div class="carousel-slide">
                            <img src="./assets/images/5.jpeg" alt="imagen Juanma DJ">
                        </div>

                        <div class="carousel-slide">
                            <img src="./assets/images/8.jpeg" alt="imagen Juanma DJ">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/9.jpg" alt="imagen Juanma DJ">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/10.jpg" alt="imagen Juanma DJ">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/11.jpeg" alt="imagen Juanma DJ">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/12.jpg" alt="imagen Juanma DJ">
                        </div>
                        <div class="carousel-slide">
                            <img src="./assets/images/13.jpg" alt="imagen Juanma DJ">
                        </div>
                        <!-- Flechas -->
                        <button class="carousel-btn prev">&#10094;</button>
                        <button class="carousel-btn next">&#10095;</button>

                    </div>

                </div>

            </section>

            <section class="container-video-enlaces">
                <h2 class="efecto_horizontal">Empresas y marcas colaboradoras</h2>
                <div>
                    <div class="enlaces efecto_vertical">
                        <img src="./assets/images/logos_clientes/melia_alicante.png" alt="Hotel Meliá Alicante con Juanma DJ">
                        <img src="./assets/images/logos_clientes/sunloud.png" alt="Sunloud Eventos con Juanma DJ">
                        <img src="./assets/images/logos_clientes/sile.png" alt="Sile Producciones con Juanma DJ">
                        <img src="./assets/images/logos_clientes/solcitos.png" alt="Solcitos Eventos con Juanma DJ">
                        <img src="./assets/images/logos_clientes/78_sabores.png" alt="78 Sabores y Copas Calpe con Juanma DJ">
                        <img src="./assets/images/logos_clientes/abrazo_beach.jpg" alt="Abrazo Beach Urbanova con Juanma DJ">
                    </div>
                    <div class="videos">

                        <div class="video-wrapper videos-efectos">

                            <video id="videoCalpe" autoplay muted loop playsinline>
                                <source src="./assets/videos/calpe.webm" type="video/webm">
                                <source src="./assets/videos/calpe-optimizado.mp4" type="video/mp4">
                            </video>

                            <button class="btn-sonido" type="button">
                                🔇 Activar sonido
                            </button>

                        </div>

                        <div class="video-wrapper videos-efectos">

                            <video id="videoAbrazo" autoplay muted loop playsinline>
                                <source src="./assets/videos/video2.mp4" type="video/mp4">
                            </video>

                            <button class="btn-sonido" type="button">
                                🔇 Activar sonido
                            </button>

                        </div>

                        <div class="video-wrapper videos-efectos">

                            <video id="videoCasamiento" autoplay muted loop playsinline>
                                <source src="./assets/videos/video5.mp4" type="video/mp4">
                            </video>

                            <button class="btn-sonido" type="button">
                                🔇 Activar sonido
                            </button>

                        </div>

                    </div>

                </div>
            </section>

            <!-- FLYERS -->
            <section class="section_border_top">
                <h2 class="efecto_horizontal">Promociones y flyers</h2>
                <div class="contenedor_flyers efecto_vertical">
                    <a href="./views/contacto.php"><img src="./assets/images/flyer.jpeg" alt="flyer Juanma DJ"></a>
                    <a href="./views/contacto.php"><img src="./assets/images/flyer2.jpeg" alt="flyer Juanma DJ"></a>
                </div>
            </section>


            <!-- RESEÑAS -->
            <!--             <section class="reviews-section">
                <h2 class="reviews-title">Reseñas en Google</h2>

                <div class="reviews-container">

                    <div class="review-card">
                        <p class="review-text">“Animó toda la boda, increíble ambiente 🔥”</p>
                        <div class="review-footer">
                            <span class="review-name">María G.</span>
                            <span class="review-stars">★★★★★</span>
                        </div>
                    </div>

                    <div class="review-card">
                        <p class="review-text">“El mejor DJ que hemos contratado, repetiríamos sin duda”</p>
                        <div class="review-footer">
                            <span class="review-name">Carlos R.</span>
                            <span class="review-stars">★★★★★</span>
                        </div>
                    </div>

                    <div class="review-card">
                        <p class="review-text">“Se adaptó a todo tipo de música, fiesta increíble 🎉”</p>
                        <div class="review-footer">
                            <span class="review-name">Laura M.</span>
                            <span class="review-stars">★★★★★</span>
                        </div>
                    </div>
                    <div class="review-card">
                        <p class="review-text">“Animó toda la boda, increíble ambiente 🔥”</p>
                        <div class="review-footer">
                            <span class="review-name">María G.</span>
                            <span class="review-stars">★★★★★</span>
                        </div>
                    </div>

                    <div class="review-card">
                        <p class="review-text">“El mejor DJ que hemos contratado, repetiríamos sin duda”</p>
                        <div class="review-footer">
                            <span class="review-name">Carlos R.</span>
                            <span class="review-stars">★★★★★</span>
                        </div>
                    </div>

                    <div class="review-card">
                        <p class="review-text">“Se adaptó a todo tipo de música, fiesta increíble 🎉”</p>
                        <div class="review-footer">
                            <span class="review-name">Laura M.</span>
                            <span class="review-stars">★★★★★</span>
                        </div>
                    </div>

                <div class="review-create">
                    <span class="review-inline">Si has disfrutado de mi música y servicios, ¡me encantaría que dejaras una reseña en <img src="./assets/iconos/google.png" alt="Google" width="150" height="90"></span>

                    <img  src="./assets/iconos/flecha_derecha.svg" alt="flecha">

                    <a href="https://g.page/r/TU-ENLACE/review" target="_blank">
                        Dejar una reseña ⭐
                    </a>
                </div>
            </section> -->
        </main>
        <!-- PIE DE PÁGINA-->
        <footer class="mi_pie">

            <div class="contenedor_footer">

                <!-- TELEFONOS Y CORREO -->
                <div class="contacto_pie">
                    <ul>
                        <li>
                            <a href="https://wa.me/+34662650963" target="_blank">
                                <img class="iconos" src="./assets/iconos/whatsapp-green.svg" alt="Teléfono Juanma Dj" width="94" height="32">
                                <span>(+34) 662650963</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/juanma.dj" target="_blank">
                                <img class="iconos" src="./assets/iconos/instagram.svg" alt="Instagram Juanma Dj" width="94" height="32">
                                <span>juanma.dj</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:juanmmprieto@gmail.com" target="_blank">
                                <img class="iconos" src="./assets/iconos/email.svg" alt="Email Juanma Dj" width="94" height="32">
                                <span>juanmmprieto@gmail.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.ru/maps/@38.3433424,-0.4892534,15z?entry=ttu&g_ep=EgoyMDI2MDMxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                                <img class="iconos" src="./assets/iconos/location.svg" alt="Ubicación Juanma Dj" width="94" height="32">
                                <span>Alicante</span>
                            </a>
                        </li>
                    </ul>

                </div>

                <!-- LOGO Juanma DJ -->
                <div class="logo_pie">
                    <img src="./assets/images/cabecera/cabecera_logo.png" alt="Logo de Juanma DJ">
                </div>

                <!-- AVISO LEGAL COPYRIGHT -->
                <div class="contacto_pie_nav">
                    <ul>
                        <li><a href="./index.php">Inicio</a></li>
                        <li><a href="./views/galeria.php">Galería</a></li>
                        <li><a href="./views/contacto.php">Contacto</a></li>
                        <li><a href="./views/preguntas.php">Preguntas</a></li>
                    </ul>
                    <small class="aviso_legal">&copy; Todos los derechos reservados</small>
                </div>
            </div>
        </footer>
    </div>

    <script src="./assets/scripts/carousel.js"></script>
    <script src="./assets/scripts/efectos.js"></script>
    <script src="./assets/scripts/videos.js"></script>
    <script src="./assets/scripts/resenas.js"></script>
</body>

</html>