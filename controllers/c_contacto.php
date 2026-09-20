<?php
# Incluir/vincular los parámetros de conexión a Gmail y la librería PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

# Vinculamos los archivos necesarios para las validaciones de los datos ingresados por el usuario
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/validations/v_inputData.php';
require_once __DIR__ . '/flash.php';


# Comprobamos si existe una sesión activa y en caso de que no sea así la creamos.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

# Comprobamos si la información llega a través del método POST y del formulario con submit "contactarse"
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contactarse'])) {
    # En primer lugar obtenemos los datos del formulario saneados
    $nombre = htmlspecialchars($_POST['input_name']);
    $apellido = htmlspecialchars($_POST['input_lastname']);
    $telefono = filter_input(INPUT_POST, 'input_tel', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'input_email', FILTER_SANITIZE_EMAIL);
    $direccion = htmlspecialchars($_POST['input_adress']);
    $texto = htmlspecialchars($_POST['input_text']);

    # Validar el formulario a través de la función validar_registro() del controlador "v_inputData"
    $errores_validacion = validar_contacto($nombre, $apellido, $telefono, $email,  $texto);

    # Comprobar si se han generado errores de validacion o no
    if (!empty($errores_validacion)) {
        # Si hay errores de validación vamos a guardarlos en una cadena para mostrarselos al usuario
        $mensaje_error = "";

        # Recorremos el array de errores_validación para concatenar los mensajes en la variable $mensaje_error
        foreach ($errores_validacion as $clave => $mensaje) {
            $mensaje_error .= $mensaje . "<br>";
        }

        # Asignamos la cadena de errores a $_SESSION['mensaje_error']
        $_SESSION['mensaje_error'] = $mensaje_error;
        setFlash('old', $_POST); // guardamos todos los inputs

        header("Location: ../views/contacto.php");
        exit();
    }

    # Intentamos realizar un registro sencillo en "users_data" con los campos a registrar sólo en ella
    $mail = new PHPMailer(true);

    try {

        // Utilizar SMTP
        $mail->isSMTP();

        // Servidor SMTP de Gmail
        $mail->Host = 'smtp.gmail.com';

        // Activar autenticación SMTP
        $mail->SMTPAuth = true;

        // Tu cuenta de Gmail
        $mail->Username = 'juanmprieto@gmail.com';

        // Contraseña de aplicación
        $mail->Password = 'eyjjuwfvxovcfppl';

        // Seguridad TLS
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        // Puerto SMTP
        $mail->Port = 587;

        // =====================================
        // REMITENTE Y DESTINATARIO
        // =====================================

        $mail->setFrom(
            $email,
            'Formulario de contacto'
        );

        $mail->addAddress(
            'juanmprieto@gmail.com'
        );

        // =====================================
        // RESPONDER AL USUARIO
        // =====================================

        $mail->addReplyTo(
            $email,
            $nombre
        );

        // =====================================
        // CONTENIDO DEL CORREO
        // =====================================

        $mail->isHTML(true);

        $mail->Subject = "Formulario de contacto - $nombre $apellido";

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

            <p>
                <strong>Asunto:</strong> 'Formulario de contacto - $nombre $apellido'
            </p>

            <hr>

            <p>
                <strong>Mensaje:</strong>
            </p>

            <p>
                $texto
            </p>
        ";


        // =====================================
        // ENVIAR
        // =====================================

        $mail->send();

        # Configuramos un mensaje de éxito para el usuario y le redirigimos a la página de registro.
        $_SESSION['mensaje_exito'] = "EXITO: La solcitud de contacto se ha enviado correctamente";
        header("Location: ../views/contacto.php?mensaje=ok");
        exit();

    } catch (Exception $e) {
        # Registramos la excepción en el error_log
        error_log("Error en c_contacto.php" . $e->getMessage());
        # Redirigimos al usuario a la página de error 500
        header('Location: ../views/errors/error500.html');


        # Independientemente de si se genera una excepción o no al final siempre se realizará el siguiente código
    } finally {
        # Cerramos la consulta si aún sigue abierta
        if (isset($insert_stmt_solicitud_contacto) && ($insert_stmt_solicitud_contacto)) {
            $insert_stmt_solicitud_contacto->close();
        }
    }
}
