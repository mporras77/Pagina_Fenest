<?php

   session_start();
   $ISSessionActual = isset($_SESSION['usuario']);
   if($ISSessionActual){


      // echo'
      // <script>
      //       alert("sesion serrada")      
      //       window.locate = "index.php";
      // </script>
      // ';
      // session_destroy();
      // die();
   }

   

?>