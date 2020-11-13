<?php
//Load composer's autoloader
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;

// Load Composer's autoloader
require 'vendor/autoload.php';
function enviarMail($email, $titulo, $mensaje, $newPass = '')
{
    $mail = new PHPMailer(true);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->SMTPDebug = 0;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587; // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'bibliotecatu@gmail.com'; //Email para enviar
    $mail->Password = 'TuBiblioteca123'; //Su password
    //Agregar destinatario
    $mail->setFrom('bibliotecatu@gmail.com', 'Tu Biblioteca');
    $mail->AddAddress($email);
    $mail->SMTPKeepAlive = true;
    $mail->Mailer = "smtp";
    //Content
    $mail->isHTML(true); 
    $mail->Subject = $titulo;
    if ($newPass == '') {
        $mail->Body    = $mensaje;
    } else {
        $mail->Body    = $mensaje . $newPass;
    }
    if (!$mail->send()) {
        // echo 'Error al enviar email';
        return 0;
    } else {
        // echo 'Mail enviado correctamente';
        return 1;
    }
}
