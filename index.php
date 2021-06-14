<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hotel la Galerie</title>
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
          <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="rooms.php" class="nav-link">Habitaciones</a></li>
          <li class="nav-item"><a href="services.php" class="nav-link">Restaurante</a></li>
          <li class="nav-item"><a href="rooms.php" class="nav-link">Tour</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">Acerca de </a></li>
           <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contactenos</a></li>
           <li class="nav-item"><a href="admi/login.php" class="nav-link">Iniciar sesion</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">

 <?php require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slider1' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
  
     
       echo '<div class="block-30 item" style="background-image: url('."images/".$row[0].');" data-stellar-background-ratio="0.5">';
 }else {
    
     echo '<div class="block-30 item" style="background-image: url('."images/slider-bg.jpg".');" data-stellar-background-ratio="0.5">';
 }

?>   
      
        <div class="container">

          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Bienvenidos</span>
              <h2 class="heading">Hospedaje la Galerie</h2>
              <p><a href="about.php" class="btn py-4 px-5 btn-primary">Leer mas</a></p>
         
            </div>
          </div>
        </div>
      </div>


     
 <?php require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slider2' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
    
     
       echo '<div class="block-30 item" style="background-image: url('."images/".$row[0].');" data-stellar-background-ratio="0.5">';
 }else {
    
     echo ' <div class="block-30 item" style="background-image: url('."images/bg_1.jpg".');" data-stellar-background-ratio="0.5">';
 }

?> 
      
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Bienvenido</span>
              <h2 class="heading">Simple &amp; elegante</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Leer mas</a></p>
             
            </div>
          </div>
        </div>
      </div>
      <?php require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slider3' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
   
     
       echo '<div class="block-30 item" style="background-image: url('."images/".$row[0].');" data-stellar-background-ratio="0.5">';
 }else {
    
     echo ' <div class="block-30 item" style="background-image: url('."images/bg_2.jpg".');" data-stellar-background-ratio="0.5">';
 }

?> 
      
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Bienvenidos</span>
              <h2 class="heading">Comidas &amp; y bebidas</h2>
              <p><a href="#" class="btn py-4 px-5 btn-primary">Learn More</a></p>
        
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">

          <div class="block-32">
            <form action="rooms.php" method="post">
              <div class="row">
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Fecha de entrada</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" name="entrada" id="checkin_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Fecha de salida</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" name="salida" id="checkout_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="checkin">Adultos</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="adultos" id="" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="checkin">Niños 6-12</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="ninos" id="" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button class="btn btn-primary btn-block">Reservar Ahora</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      <div class="row site-section">
        <div class="col-md-12">
          <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Servicios</span>
              <h2 class="heading">Facilidades &amp; Servicios</h2>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-double-bed"></span></div>
            <div class="media-body">
              <h3 class="heading">Cama Matrimonial</h3>
              <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='cama' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
            </div>
          </div>      
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-wifi"></span></div>
            <div class="media-body">
              <h3 class="heading">Rapido &amp; Gratis Wifi</h3>
              <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='wifi' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-customer-service"></span></div>
            <div class="media-body">
              <h3 class="heading">Llamanos</h3>
              <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='llamar' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-taxi"></span></div>
            <div class="media-body">
              <h3 class="heading">Transporte y parqueo</h3>
              <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='transporte' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
            </div>
          </div>      
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-credit-card"></span></div>
            <div class="media-body">
              <h3 class="heading">Aceptamos Tarjetas</h3>
              <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='tarjeta' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="media block-6">
            <div class="icon"><span class="flaticon-dinner"></span></div>
            <div class="media-body">
              <h3 class="heading">Restaurante</h3>
              <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='restaurante' ");
  $row = $conexion->extraer_registro(); echo $row[0];?></p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section block-13 bg-light">
      <div class="container">
         <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Caracteristicas de habitaciones</span>
              <h2 class="heading">Habitaciones</h2>
              <p><?php  require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='habitacionescarac' ");
  $row = $conexion->extraer_registro(); if (isset( $row[0])) {
 echo $row[0];
  } ?></p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="nonloop-block-13 owl-carousel">
                  <div class="item">
                    <div class="block-34">
                      <div class="image">
                        <a href="habitacionslider.php?tipo=petite"><?php  
require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='iniciohabitaciones1' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
    
      echo '<img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<img width="90" height="200" src="images/pic1.jpg" alt="Image placeholder"></a>';
 }

?>
                      </div>
                      <div class="text">
                        <h2 class="heading">La Petite</h2>
                        
                        <ul class="specs">
                          <li><strong>Adults:</strong> 4</li>
                          <li><strong>Categoria:</strong> Familiar</li>
                          <li><strong>Facilidades:</strong> Closet, Tv con cable, Picsina, Wifi gratis, Parqueo Gratuito</li>
                          <li><strong>Tamaño:</strong> 20m<sup>2</sup></li>
                          <li><strong>Tipo de cama:</strong> Matrimonial</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="block-34">
                      <div class="image">
                        <a href="habitacionslider.php?tipo=petite"><?php  
require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='iniciohabitaciones2' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
    
      echo '<img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<img width="90" height="200" src="images/pic1.jpg" alt="Image placeholder"></a>';
 }

?>
                      </div>
                      <div class="text">
                        <h2 class="heading">La Petite</h2>
                       
                        <ul class="specs">
                          <li><strong>Adultos:</strong> 2</li>
                          <li><strong>Categoria:</strong> Parejas</li>
                          <li><strong>Facilidades:</strong> Tv con cable, Picsina, Wifi gratis, Parqueo Gratuito</li>
                          <li><strong>Tamaño:</strong> 20m<sup>2</sup></li>
                          <li><strong>Tipo de cama:</strong> Matrimonial</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="block-34">
                      <div class="image">
                        <a href="habitacionslider.php?tipo=osa natura"><?php  
require_once("admi/conexion.php");
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='iniciohabitaciones3' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
    
      echo '<img width="90" height="200" src="images/'.$row[0].'" alt="Image placeholder"></a>';
 }else {
     echo '<img width="90" height="200" src="images/pic1.jpg" alt="Image placeholder"></a>';
 }

?>
                      </div>
                      <div class="text">
                        <h2 class="heading">OSA NATURA</h2>
                      
                        <ul class="specs">
                          <li><strong>Adultos:</strong> 5</li>
                          <li><strong>Categoria:</strong> Familiar</li>
                          <li><strong>Facilidades:</strong>Tv con cable, Picsina, Wifi gratis, Parqueo Gratuito</li>
                          <li><strong>Tamaño:</strong> 20m<sup>2</sup></li>
                          <li><strong>Tipo de cama:</strong> Matrimonial</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                
                  

                  
              </div>
    
            </div> <!-- .col-md-12 -->
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
          
      
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="row">
                <div class="col-md-12 block-13">
                  <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/menu_1.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Pescado &amp; Patacones</h2>
                          <p>Disfruta de un excelente plato de pescado con patacones !</p>
                      
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/menu_2.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">Camarones</h2>
                          <p>Disfruta de un excelente plato de camarones con ensalada!</p>
                       
                        </div>
                      </div>
                    </div>

                    <div class="item">
                      <div class="block-34">
                        <div class="image">
                          <a href="#"><img src="images/menu_3.jpg" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                          <h2 class="heading">pechuga de pollo</h2>
                          <p>Disfruta de un excelente plato de pechuga de pollo con ensalada!</p>
                    
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