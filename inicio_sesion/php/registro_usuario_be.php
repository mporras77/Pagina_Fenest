<?php

    require_once '../../vendor/PHPMailer/src/funciones.php';
    include 'conexion_be.php';

    $nombre_completo = $_GET['nombre_completo'];
    $correo =  $_GET['correo'];
    $usuario =  $_GET['usuario'];
    $contrasena =  $_GET['contrasena'];
    
    //encrptamiento de contraseña
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
              VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";


    //verificar que el correo no se repita en la BD 
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo)> 0) {
        echo'
            <script>
                alert("Este es correo es exitente intente con otro nueva mente");
                window.location = "../login.php"; 
            </script>
        ';
        exit();

    }

     //verificar que el NOMBRE se repita en la BD 
     $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

     if(mysqli_num_rows($verificar_usuario)> 0) {
         echo'
             <script>
                 alert("Este es nombre es exitente intente con otro nueva mente");
                 window.location = "../login.php"; 
             </script>
         ';
         exit();
 
     }
 

    $ejecutar = mysqli_query($conexion, $query);

    phpmailer($correo, $usuario);


    if($ejecutar){
        echo'
        <script>
        
            alert("Usuario registrado")
            window.location = "../../index.php";  
        </script>
        ';
    }else{
        echo '
        <script>
        
            alert("Usuario registrado")
            window.location = "../login.php";  
        </script>

        ';
    }

    mysqli_close($conexion);
?>