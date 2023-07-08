<?php
include("Mailer/src/PHPMailer.php");
include("Mailer/src/Exception.php");
include("Mailer/src/SMTP.php");

try {
    $fromname = $_POST['nombre'];
    $fromemail = $_POST['email'];
    $subject = "Correro dede pagina web WONDERER";
    $mensa = $_POST['mensaje'];
    $host = "smtp.gmail.com";
    $port = "587";
    $SMTPAuth = "login";
    $SMTPSecure = "tls";
    $usernamedestinatario = "de.cora.son63@gmail.com";
    $username = "pmr.pruebas.programacion@gmail.com";
    $password = "vcvhoyxcjpdxfpyy";

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = $host;
    $mail->Port = $port;
    $mail->SMTPAuth = $SMTPAuth;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Username = $username;
    $mail->Password = $password;
    $mail->setFrom($fromemail,$fromname);
    //DESTINATARIO
    $mail->addAddress($usernamedestinatario);
    //ASUSNTO
    $mail->isHTML(true);
    $mail->Subject = $subject;
    //CUERPO DEL EMAIL
    $mensaje = nl2br("Este mensaje fue enviado por " . $fromname . " \n");
    $mensaje .= nl2br("Su e-mail es: " . $fromemail . " \n");
    $mensaje .= nl2br("Mensaje: " . $mensa . " \n");
    $mensaje .= "Enviado el " . date('d/m/Y', time());
    $mail->Body = $mensaje;

    if (!$mail->send()) {
        error_log("MAILER: no se pudo enviar el correo!");
        echo("MAILER: no se pudo enviar el correo!");
    }
    header('Location: contacto_2.html');
} catch (Exception $e) {
    echo("Alguna instrucción de PHPMailer no se pudo llevar a cabo " + $e);
}
?>
