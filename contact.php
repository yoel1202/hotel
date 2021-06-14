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
          <li class="nav-item"><a href="services.php" class="nav-link">Restaurante</a></li>
          <li class="nav-item"><a href="tour.php" class="nav-link">Tour</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">Acerca de </a></li>
           <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
          <li class="nav-item active"><a href="contact.php" class="nav-link">Contactenos</a></li>
           <li class="nav-item"><a href="admi/login.php" class="nav-link">Iniciar sesion</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->


  
      <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slidercontactenos' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
  
     
       echo ' <div class="block-30 block-30-sm item" style="background-image: url('."images/".$row[0].');" data-stellar-background-ratio="0.5">';
 }else {
    
     echo ' <div class="block-30 block-30-sm item" style="background-image: url('."images/pic3.jpg".');" data-stellar-background-ratio="0.5">';
 }

?> 
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
          <span class="subheading-sm">Contactanos</span>
          <h2 class="heading"></h2>
        </div>
      </div>
    </div>
  </div>

    
  

  <div class="site-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
         <form action="email.php" method="post"  id="form">
            <div class="form-group">
              <input type="text" name="nombre" class="form-control px-3 py-3" placeholder="Nombre ">
            </div>
            <div class="form-group">
              <input type="text" name="telefono" class="form-control px-3 py-3" placeholder="Telefono ">
            </div>
            <div class="form-group">
              <input type="text" name="correo" class="form-control px-3 py-3" placeholder="Correo">
            </div>
            <div class="form-group">
              <input type="text" name="asunto" class="form-control px-3 py-3" placeholder="Asunto">
            </div>
            <div class="form-group">
              <textarea name="mensaje"  cols="30" rows="7" class="form-control px-3 py-3" placeholder="Mensaje"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Enviar mensaje" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        <?php if (isset($_GET['mensaje'])) {
  if ($_GET['mensaje']=="OK") {
   echo ' <div class="alert alert-success" role="alert">Se ha enviado tu mensaje correctamente</div>';
  }
   # code...
 } ?>
        </div>

        <div class="col-md-6" id="
      "><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4686.747285877063!2d-83.52188224193883!3d8.965790415980035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa406174ddd54c3%3A0x56c60611e3ca59ed!2sHospedaje+la+Galerie!5e0!3m2!1ses!2scr!4v1554870401426!5m2!1ses!2scr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
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