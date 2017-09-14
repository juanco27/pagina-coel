<?php

 require 'PHPMailer/PHPMailerAutoload.php';

  $mail = new PHPMailer;
  $to = "juanncorrea@gmail.com"; //correo de contacto

  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $asunto = $_POST['asunto'];
  $mensaje =nl2br( $_POST['mensaje']);

 if($nombre == "" || $email == "" || $asunto == "" || $mensaje == ""):
    echo '<div class="alert alert-danger"> Todos los campos son requeridos para el envio</div>';
 else:

    $mail->From = $email;
    $mail->addAddress($to);
    $mail->Subject = $asunto;
    $mail->isHtml(true);
    $mail->Body = $nombre. 'le ha contactado desde su web y le a enviado el siguiente mensaje: <br> <p>' .$mensaje.'</p>';

    $mail->CharSet = 'UTF-8';
    $mail->send();
     echo '<div class="alert alert-danger"> Se envio </div>';
 endif;




 ?>
