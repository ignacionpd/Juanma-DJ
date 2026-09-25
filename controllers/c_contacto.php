<?php
ini_set('display_errors', '0');
ini_set('log_errors', '1');
ini_set('error_log', __DIR__ . '/contacto-errors.log');
error_reporting(E_ALL & ~E_NOTICE);
// Incluir/vincular los parámetros de conexión a Gmail y la librería PHPMailer
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

// Vinculamos los archivos necesarios para las validaciones de los datos ingresados por el usuario
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/validations/v_inputData.php';
require_once __DIR__ . '/flash.php';


// Comprobamos si existe una sesión activa y en caso de que no sea así la creamos.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Comprobamos si la información llega a través del método POST y del formulario con submit "contactarse"
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contactarse'])) {
    // En primer lugar obtenemos los datos del formulario saneados
    $nombre = htmlspecialchars($_POST['input_name']);
    $apellido = htmlspecialchars($_POST['input_lastname']);
    $telefono = filter_input(INPUT_POST, 'input_tel', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'input_email', FILTER_SANITIZE_EMAIL);
    $direccion = htmlspecialchars($_POST['input_adress']);
    $texto = htmlspecialchars($_POST['input_text']);

    // Validar el formulario a través de la función validar_registro() del controlador "v_inputData"
    $errores_validacion = validar_contacto($nombre, $apellido, $telefono, $email,  $texto);

    // Validar las políticas de privacidad
    if (($_POST['privacidad'] ?? '') !== '1') {
        $errores_validacion['politicas'] =
            'Debe aceptar las políticas de privacidad.';
    }

    // Comprobar si se han generado errores de validacion o no
    if (!empty($errores_validacion)) {
        // Si hay errores de validación vamos a guardarlos en una cadena para mostrarselos al usuario
        $mensaje_error = "";

        // Recorremos el array de errores_validación para concatenar los mensajes en la variable $mensaje_error
        foreach ($errores_validacion as $clave => $mensaje) {
            $mensaje_error .= $mensaje . "<br>";
        }

        // Asignamos la cadena de errores a $_SESSION['mensaje_error']
        $_SESSION['mensaje_error'] = $mensaje_error;
        setFlash('old', $_POST); // guardamos todos los inputs

        header("Location: ../views/contacto.php");
        exit();
    }

    $mail = new PHPMailer(true);

    try {

        // Utilizar SMTP
        $mail->isSMTP();

        // Servidor SMTP de Gmail
        $mail->Host = 'smtp.gmail.com';

        // Activar autenticación SMTP
        $mail->SMTPAuth = true;

        // Cuenta de Gmail autenticada
        $mail->Username = 'juanmmprieto@gmail.com';

        // Nueva contraseña de aplicación
        $mail->Password = 'qmztthgqisymujon';

        // Seguridad TLS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        // Puerto SMTP
        $mail->Port = 587;

        $mail->CharSet = 'UTF-8';

        // El remitente debe coincidir con la cuenta autenticada
        $mail->setFrom(
            $mail->Username,
            'Formulario de contacto'
        );

        // Destinatario
        $mail->addAddress('juanmmprieto@gmail.com');

        // Permite responder directamente al usuario
        $mail->addReplyTo(
            $email,
            $nombre . ' ' . $apellido
        );

        // Contenido del correo
        $mail->isHTML(true);

        $mail->Subject =
            'Formulario de contacto - ' . $nombre . ' ' . $apellido;

        $mail->Body = "
        <h2>Nueva solicitud de contacto</h2>

        <p>
            <strong>Nombre:</strong> $nombre
        </p>

        <p>
            <strong>Apellido:</strong> $apellido
        </p>

        <p>
            <strong>Teléfono:</strong> $telefono
        </p>

        <p>
            <strong>Dirección:</strong> $direccion
        </p>

        <p>
            <strong>Email:</strong> $email
        </p>

        <hr>

        <p>
            <strong>Mensaje:</strong>
        </p>

        <p>
            " . nl2br($texto) . "
        </p>
    ";

        $mail->send();

        header('Location: ../views/contacto.php?mensaje=ok');

        $_SESSION['mensaje_exito'] = 'ÉXITO: La solicitud de contacto se ha enviado correctamente.';

        exit();
    } catch (Exception $e) {

        error_log(
            'Error en contacto.php: ' .
                $e->getMessage() .
                ' | ErrorInfo: ' .
                $mail->ErrorInfo
        );

        $_SESSION['mensaje_error'] =
            'No se pudo enviar el mensaje. Inténtalo de nuevo más tarde.';

        header('Location: ../views/errors/error500.html');
        exit();
    }
}
