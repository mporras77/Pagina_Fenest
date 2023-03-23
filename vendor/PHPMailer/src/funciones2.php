<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
 
function phpcontact($email, $msg){
    $mail = new PHPMailer(true);                              
try {

  $mensaje = '
    <html>
    <head>
    
    </head>
    <body>
      <h2>GRACIAS POR FORMAR PARTE DE ESTA <b>HERMANDAD SCOUT</b></h2>
      <p>
      Hola, la administración de la <b> Federación Nacional de Escultismo Tradicional de Colombia</b>
      está atanto de su mensaje. En los proximos dias obtendra una respuesta por medio del correo brindado  
      </p>
      <br>
      <h3>Este es tu mensaje:</h3>
      <br>
      </body>
    </html>
    ';


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
    $mail->addCC('comunicaciones@fenest.org');     //Direccion de correo para una respuesta al mensaje
 
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Bienvenido al sistema FENEST!';
    $mail->Body    = $mensaje.$msg;
    ;

    $mail->AltBody = 'Gracias pot Registrarte  a esta Hermandad';
     
    $mail->send();
 
} catch (Exception $e) {
    echo 'El mensaje no pudo ser enviado. Mailer Error: ', $mail->ErrorInfo;
}
}
?>
