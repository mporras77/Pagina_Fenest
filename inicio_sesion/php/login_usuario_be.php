<?php
    session_start();
    include 'conexion_be.php';

    $correo = $_GET['correo'];
    $contrasena = $_GET['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    and contrasena='$contrasena'"); 

    if(mysqli_num_rows($validar_login)> 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../../index.php");
        exit;
    }else{
        echo'
        <script>
            alert("usuario no existente por favor crear una cuenta");
            window.location = "../login.php"; 
        </script>
        ';
        exit;
    }



?>