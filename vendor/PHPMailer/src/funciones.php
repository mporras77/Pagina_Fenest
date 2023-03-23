<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
 
function phpmailer($email){
    $mail = new PHPMailer(true);                              
try {
    //$mail->SMTPDebug = 4;                               // Habilitar el debug
 
    $mail->isSMTP();                                      // Usar SMTP
    $mail->Host = 'mail.fenest.org';  // Especificar el servidor SMTP reemplazando por el nombre del servidor donde esta alojada su cuenta
    $mail->SMTPAuth = true;                               // Habilitar autenticacion SMTP
    $mail->Username = 'no-reply@fenest.org';                 // Nombre de usuario SMTP donde debe ir la cuenta de correo a utilizar para el envio
    $mail->Password = 'bookofmurder';                           // Clave SMTP donde debe ir la clave de la cuenta de correo a utilizar para el envio
    $mail->SMTPSecure = 'ssl';                            // Habilitar encriptacion
    $mail->Port = 465;                                    // Puerto SMTP                     
    $mail->Timeout       =   30;
    $mail->AuthType = 'LOGIN';
 
    //Recipients   
 
    $mail->setFrom('no-reply@fenest.org');     //Direccion de correo remitente (DEBE SER EL MISMO "Username")
    $mail->addAddress($email);     // Agregar el destinatario
    $mail->addReplyTo('no-reply@fenest.org');     //Direccion de correo para respuestas     
 
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Bienvenido al sistema FENEST!';
    $mail->Body    = $mensaje = '
    <html>
    <head>
      <title>GRACIAS POR FORMAR PARTE DE ESTA <b>HERMANDAD SCOUT</b></title>
    </head>
    <body>
      <p>
      Hola de la administración, de la Federación tedamos la Bienvenida. a este sistema para q estes al tanto de nuestras aventuras.
      si quier masn información te puedes comunicar en este apartado <a href="http://localhost/Pagina_Fenest/Pagina_Fenest/contact.php">ENTRA AQUI.</a>
      Si tienes dudas att administración de la <b>Federación Nacional de Escultismo Tradicional de Colombia</b>
      <img src="file:///C:/xampp/htdocs/Pagina_Fenest/Pagina_Fenest/images/logote.png" alt="#" />
      </p>
    </body>
    </html>
    ';

    $mail->AltBody = 'Gracias pot Registrarte  a esta Hermandad';
     
    $mail->send();
 
} catch (Exception $e) {
    echo 'El mensaje no pudo ser enviado. Mailer Error: ', $mail->ErrorInfo;
}
}
?>
