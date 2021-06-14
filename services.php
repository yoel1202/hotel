<?php 
require_once("admi/conexion.php");
 $conexion = new Conexion();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hotel La Galerie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="index.php" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="rooms.php" class="nav-link">Habitaciones</a></li>
          <li class="nav-item active"><a href="services.php" class="nav-link">Restaurante</a></li>
          <li class="nav-item"><a href="tour.php" class="nav-link">Tour</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">Acerca de </a></li>
           <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contactenos</a></li>
           <li class="nav-item"><a href="admi/login.php" class="nav-link">Iniciar sesion</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  
  

  <div class="block-30 block-30-sm item" style="background-image: url('images/menu_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
          <span class="subheading-sm">Restaurante</span>
              <h2 class="heading">Sazon Arte</h2>
        </div>
      </div>
    </div>
  </div>


  

   <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Menus</span>
              <h2 class="heading">Restaurant Menu</h2>
            </div>
          </div>

        <div class="block-35">
          
          <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Desayuno</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Almuerzo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Cena</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                           <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='sliderdesayuno1' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/comida_1.jpg" alt="Image placeholder"></a>';
 }

?> 
                        </div>
                        <div class="text">
                          <h2 class="heading"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='desayuno1' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></h2>
                          <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='desayuno1texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
                          
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                           <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='sliderdesayuno2' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/comida_2.jpg" alt="Image placeholder"></a>';
 }

?> 
                        </div>
                        <div class="text">
                          <h2 class="heading"><?php  global $conexion ;
 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='desayuno2' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></h2>
                          <p><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='desayuno2texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
                        
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='sliderdesayuno3' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/comida_3.jpg" alt="Image placeholder"></a>';
 }

?> 
                        </div>
                        <div class="text">
                          <h2 class="heading"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='desayuno3' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></h2>
                          <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='desayuno3texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
                         
                        </div>
                      </div>
                    </div>

                   


                  

               
                    
                  </div>
                </div>
              </div>
            </div>


            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                  
                      <div class="item">
                      <div class="block-34">
                        <div class="image">
                                            <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slideralmuerzo1' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/menu_1.jpg" alt="Image placeholder"></a>';
 }

?> 
                        </div>
                        <div class="text">
                          <h2 class="heading"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='almuerzo1' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></h2>
                          <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='almuerzo1texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
                      
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                                            <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slideralmuerzo2' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/menu_2.jpg" alt="Image placeholder"></a>';
 }

?> 
                        </div>
                        <div class="text">
                          <h2 class="heading"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='almuerzo2' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></h2>
                          <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='almuerzo2texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
                       
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                                             <?php global $conexion ;
 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slideralmuerzo3' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/menu_3.jpg" alt="Image placeholder"></a>';
 }

?> 
                        </div>
                        <div class="text">
                          <h2 class="heading"><?php global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='almuerzo3' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></h2>
                          <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='almuerzo3texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
                    
                        </div>
                      </div>
                    </div>

                    



                    
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slidercena3' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/menu_1.jpg" alt="Image placeholder"></a>';
 }

?> <a href="#"><img src="images/menu_1.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cena1' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></h2>
                          <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cena1texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
                      
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                                         <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slidercena3' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/menu_2.jpg" alt="Image placeholder"></a>';
 }

?> 
                        </div>
                        <div class="text">
                          <h2 class="heading"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cena2' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></h2>
                          <p><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cena2texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
                       
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                                        <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slidercena3' ");
  $row = $conexion->extraer_registro();
 if (count($row[0])>0) {
    
      echo '<a><img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<a><img width="90" height="200" src="images/menu_3.jpg" alt="Image placeholder"></a>';
 }

?> 
                        </div>
                        <div class="text">
                          <h2 class="heading"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cena3' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></h2>
                          <p><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cena3texto' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
                    
                        </div>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    
 <!--    <div class="site-section">
    	<div class="container">
	    	<div class="row">
	    		<div class="col-md-6 col-lg-4 mb-5">
	    			<img src="images/img_4.jpg" alt="Image placeholder" class="img-fluid img-shadow mb-4">
	    			<h4>Even the all-powerful Pointing</h4>
	    			<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
	    		</div>
	    		<div class="col-md-6 col-lg-4 mb-5">
	    			<img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid img-shadow mb-4">
	    			<h4>Blind texts it is an almost</h4>
	    			<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
	    		</div>
	    		<div class="col-md-6 col-lg-4 mb-5">
	    			<img src="images/img_7.jpg" alt="Image placeholder" class="img-fluid img-shadow mb-4">
	    			<h4>Pointing has no control about</h4>
	    			<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
	    		</div>
	    	</div>`
            <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <img src="images/img_4.jpg" alt="Image placeholder" class="img-fluid img-shadow mb-4">
            <h4>Even the all-powerful Pointing</h4>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid img-shadow mb-4">
            <h4>Blind texts it is an almost</h4>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <img src="images/img_7.jpg" alt="Image placeholder" class="img-fluid img-shadow mb-4">
            <h4>Pointing has no control about</h4>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>`
    	</div>
    </div> -->
    

  
  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Acerca de nosotros</h3>
          <p class="mb-5">Somos un hotel responsable y comprometido con nuestros cleintes para que reciban un servicio de calidad por eso cada dia mejoramos con el fin de que nuestros clientes les traiga una estadia excelente.</p>
       
        </div>
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Eventos importantes</h3>
          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_1.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Visita del presidente</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Abril 29, 2019</a></div>
                
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_2.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Visita de Orlando sotela</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Abril 29, 2019</a></div>
            
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_3.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="#">Visita de harol lopez</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Abril 29, 2019</a></div>
               
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Contacto</h3>
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">200 mts Norte del antiguo colegio de Ciudad Cortes, Osa Puntarenas</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+506 47026429</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Osaacademialasartes@gmail.com.com</span></a></li>
                <li><span class="icon icon-clock-o"></span><span class="text">Lunes &mdash; Domingo 9:00am - 10:00pm</span></li>
              </ul>
            </div>
        </div>
        
        
      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-left">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>