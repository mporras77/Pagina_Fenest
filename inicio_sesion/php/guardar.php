<?php

    require_once '../../vendor/PHPMailer/src/funciones2.php';

    $usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contrase単a por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="fenestor_2wp"; //nombre de la base de datos


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables
    $nombre=$_GET['nombre']; //name="nombre"
    $correo=$_GET['correo']; //name="correo"
    $mensaje=$_GET['mensaje']; //name="mensaje"

    //sentencia sql
    $sql="INSERT INTO datos VALUES ('$nombre','$correo','$mensaje')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);

    phpcontact($correo, $mensaje);
   


    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"Hubo algun error, recuerda que el texto debe ser menor a 500 caracteres; de lo contrario,"; //si algo sale mal mandanos este mensaje
    }else{
        header("location: ../../contact.php"); //si todo sale bien mandanos este mensaje
    }
     
?>