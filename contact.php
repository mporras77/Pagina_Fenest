<?php

   
   include 'sesionActual.php';

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>FENEST CONTACTO</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/formulario.css">
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="shortcut icon" href="images/logo.png" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="header_information">
                        <nav class="navegacion">
                           <b>
                              <ul class="menu">
                                 <li><a href="FENEST.php">¿QUÉ ES FENEST?</a>
                                 <ul class="submenu">
                                       <li><a href="FENEST2.php">¿Que es la FENEST?</a></li>
                                       <li><a href="#">Direccion Nacional</a></li>
                                       <li><a href="info.php">PLAN 2020-2025</a></li>
                                       <li><a href="#">Comite Ejecutivo Nacional Scout</a></li>
                                       <li><a href="ucus.php">UCUS</a></li>
                                       <li><a href="noticias/?view=blog">NOTICIAS</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="programas.php">PROGRAMA JUVENIL SCOUT</a></li>
                                 <li><a href="adistramientos.php">Adiestramiento Scout</a>
                                    <li><a href="contact.php">Contacto FENEST</a></li>
                              </li>
                              <?php
                              if(!$ISSessionActual){
                                 echo'
                                 <li><a class="sings" href="inicio_sesion/login.php">Inicio sesion</a></li>
                                 ';
                                 // echo'
                                 // <script>
                                 //       alert("sesion serrada")      
                                 //       window.locate = "index.php";
                                 // </script>
                                 // ';
                                 // session_destroy();
                                 // die();
                              }else{
                                 echo'
                                 <li><a class="sings" href="inicio_sesion/logout.php">Cerrar sesión</a></li>
                                 ';
                              }
                           
                              ?>
                           </ul>
                           </b>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <div class="ramas">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>DIRECCION NACIONAL SCOUT</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="our_box">
                     <figure><img src="images/our4.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="our_box">
                     <figure><img src="images/our5.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="our_box">
                     <figure><img src="images/our6.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end header -->
            <!--  contact -->
            <div id="contact" class="contact">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="titlepage">
                           <h2>SI QUIERES SER PARTE INSCRÍBETE</h2>
                        </div>
                     </div>
                     <div class="form">
                        <form action="inicio_sesion/php/guardar.php" method="GET">

                  <label for="nombre"><center>Su nombre</center></label>
                  <br>
                  <input type="text" name="nombre" placeholder="Nombre" required="">
                  <br>
                  <label for="correo"><center>Direccion de correo</center></label>
                  <br>
                  <input type="text" name="correo" placeholder="Mail@mail.com" required="">
                  <br>
                  <label for="mensaje"><center>Mensaje</center></label>
                  <br>
                  <textarea name="mensaje" placeholder="Mensaje" required=""></textarea>
                  <br>
                  <br>
                  <br>
                  <input type="submit" value="Enviar">
                  <input type="reset" value="Limpiar">

                        </form>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row border-top">
                  <section class="buttons">
                     <a href="https://www.facebook.com/Colombiascoutfenest" target="_blank" class="fa fa-facebook"></a>
                     <a href="#" class="fa fa-youtube"></a>
                   </section>
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-5 offset-md-1 padding_bottom1">
                           <h3>LINKS</h3>
                           <ul class="cont">
                           <li> Una forma para que estés en contacto con nosotros es en nuestra redes sociales  </li>
                           </ul>
                        </div>
                        <div class="col-md-5 offset-md-1">
                           <h3>CONTACTO FENEST</h3>
                           <ul class="cont">
                           <li>Contáctanos si tienes dudas para atenderle con ánimo scout </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <!-- © pagian creada por Mauricio Porras Mosquera -->
                        <p>© 2023 Por una Colombia mejor. <a target="_blank" href="https://es.wikipedia.org/wiki/M%C3%A9todo_Scout"> Aprende a nacer nuevamente en el escultismo.</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/formulario.js"></script>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
    
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/main2.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>