<?php
    
    session_start();
    session_destroy();
    header("location: ../index.php");
    die();
    echo'
    <script>
        alert("sesion off")
    </script>
    ';
    


?>