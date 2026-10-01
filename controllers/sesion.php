<?php
// Sesión con la única cookie de la web (técnica): guarda el token anti-CSRF.
session_name('ipd_sid');
session_set_cookie_params([
    'lifetime' => 0,                          // se borra al cerrar el navegador
    'path'     => '/',
    'secure'   => !empty($_SERVER['HTTPS']),  // solo por HTTPS cuando hay HTTPS
    'httponly' => true,                       // JavaScript no puede leerla
    'samesite' => 'Lax',
]);
session_start();
if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
}
