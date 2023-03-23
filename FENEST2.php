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
      <title>FENEST INFORMACION</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
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
                                 <li><a href="adistramientos.php">adistramiento scout</a>
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
      <!-- end header -->
    
      <!-- infotmacion -->
      <div id="infotmacion"  class="infotmacion">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>¿QUÉ ES LA FENEST?</h2>
                     <span></span>
                     <p><b>"FEDERACIÓN NACIONAL DE ESCULTISMO TRADICIONAL DE COLOMBIA</b>"- FENEST, se define como una organización sin ánimo de lucro al servicio del movimiento Scout, educativo no formal, no político, de carácter voluntario, abierto a todos sin distinción
                     de clase, raza o credo, de acuerdo con el propósito, los principios y el método scout
                      </p>
                     <a></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="infotmacion_img">
                     <figure><img src="images/fenest.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
        <!--MISIÓN-->
      <div id="infotmacion"  class="infotmacion">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>MISIÓN</h2>
                     <span></span>
                     <p>

                     Creamos condiciones para transformar grupos Scouts en cooperación en la educación y formación de niños, niñas y jóvenes mediante un ecosistema de valores basados en la Promesa y Ley Scout. Para transformar el mundo sostenible que queremos. 

                     </p>
                     <a></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="infotmacion_img">
                     <figure><img src="images/about_img.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
       <!--VISIÓN-->
      <div id="infotmacion"  class="infotmacion">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>VISIÓN</h2>
                     <span></span>
                     <p>En el 2025, seremos organización Escultista, única en latinoamérica, conformada por niños, niñas, jóvenes y adultos en transformación e innovación en liderazgo que retoman los valores y filosofía del fundador para llevar a los grupos Scouts, bienestar, abundancia siendo reconocida por la integración y hermandad del movimiento Scout.
                      </p>
                     <a></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="infotmacion_img">
                     <figure><img src="images/about_img.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end infotmacion -->
     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row border-top">
                  <section class="buttons">
                     <a href="https://www.facebook.com/Colombiascoutfenest" target="_blank" class="fa fa-facebook"></a>
                     <a href="#" class="fa fa-instagram"></a>
                   </section>
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-5 offset-md-1 padding_bottom1">
                           <h3>Links</h3>
                           <ul class="cont">
                           <li> Una forma para q estes en contacto. con nosotros es en nuestra redes sociales  </li>
                           </ul>
                        </div>
                        <div class="col-md-5 offset-md-1">
                           <h3>CONTACTO FENES</h3>
                           <ul class="cont">
                           <li>contactanos si tienes dudas para atenderle con animo scout </li>
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
                        <p>© 2019 Por una colombia mejor. <a target="_blank" href="https://es.wikipedia.org/wiki/M%C3%A9todo_Scout"> Aprende a nacer nuevamente en el escultismo.</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
    
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

