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
      <title>FENEST ADIESTRAMIENTOS</title>
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
      <!-- end header -->
      <div id="infotmacion"  class="infotmacion">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Sinodales</h2>
                     <span></span>
                     <p>Los Sinodales son personas que voluntariamente ofrecen su tiempo para contribuir de forma positiva al progreso de los niños, niñas y jóvenes; son ayudantes de los Scouters y se encargan de acompañar el seguimiento de especialidades, programas o diferentes actividades.</p>
                     <a></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="infotmacion_img">
                     <figure><a href="https://es.wikipedia.org/wiki/Robert_Baden-Powell"><img src="images/BP.png" alt="#"/></a>
                     <p>
                        B-P with the Koodoo Horn
                        This photograph was taken at Gilwell Park in 1919 
                     </p>
                  </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <!--Scouters-->
         <div id="infotmacion"  class="infotmacion">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Scouters</h2>
                     <span></span>
                     <p>
                     Al igual que los Sinodales los Scouters se integran a una unidad o sección Scout de manera permanente, y son los encargados de crear el ciclo de programa por medio de actividades. Se encuentran en un ciclo de formación unitario donde desarrollan las habilidades y competencias necesarias para infundir el programa Scout.
                     </p>
                     <a></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="infotmacion_img">
                     <figure><a href="https://es.wikipedia.org/wiki/Robert_Baden-Powell"><img src="images/scouter.png" alt="#"/></a>
                     <p>
                      Sc.Lius Fdo.Zapata C. DJC
                      Director Ejecutivo Nacional Scout
                     </p>
                  </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
                <!--Insignia de Madera-->
                <div id="infotmacion"  class="infotmacion">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Insignia de Madera</h2>
                     <span></span>
                     <p>
                        Es un programa de formación para el liderazgo en el escultismo y un reconocimiento para scouts adultos en los diferentes programas. El objetivo de los cursos para conseguir la insignia de madera es formar dirigentes (llamados <b> "jefes" o "responsables"</b>, según el país y la variación del método aplicado) en el escultismo mediante la enseñanza de habilidades de liderazgo y a través de la creación de un compromiso personal con el movimiento scout. Los cursos, por lo general, combinan actividades de aula y prácticas al aire libre, seguidas por un proyecto en el que los participantes ponen en práctica los conocimientos recién adquiridos.

                     Fuente: Wikipedia.com 

                     </p>
                     <a></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="infotmacion_img">
                     <figure><a href="https://es.wikipedia.org/wiki/Robert_Baden-Powell"><img src="images/Insignia_de_Madera.png" alt="#"/></a>
                     <p>
                     La insignia de madera (en inglés Wood Badge) es un programa de formación para el liderazgo en el escultismo y un reconocimiento para scouts adultos en los programas de las asociaciones scouts de todo el mundo. El objetivo de los cursos para conseguir la insignia de madera es formar dirigentes (llamados "jefes" o "responsables", según el país y la variación del método aplicado) en el escultismo mediante la enseñanza de habilidades de liderazgo y a través de la creación de un compromiso personal con el movimiento scout. Los cursos, por lo general, combinan actividades de aula y prácticas al aire libre, seguidas por un proyecto en el que los participantes ponen en práctica los conocimientos recién adquiridos.
                     </p>
                  </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
         
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

