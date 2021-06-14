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
      <a class="navbar-brand" href="index.html"><img src="images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="rooms.php" class="nav-link">Habitaciones</a></li>
          <li class="nav-item"><a href="services.php" class="nav-link">Restaurante</a></li>
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


  
  <div class="block-30 block-30-sm item"  style=" background-image: url('images/img_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
          <span class="subheading-sm">Habitaciones</span>
          <h2 class="heading">Del Hotel</h2>
        </div>
      </div>
    </div>
  </div>

    
  


<div class="pt-5"></div>
<div class="container">
  <div class="row">
    <div class="col-md-8">
       <div class="individual-car-title">
        <?php if (isset($_GET['tipo'])) {
 require_once("admi/conexion.php");
 $conexion = new Conexion();


   $consulta =$conexion->consulta("SELECT nombre from tbl_imagenes_habitaciones INNER JOIN tbl_habitaciones on id_habitacion=fk_habitacion where nombre='".$_GET['tipo']."' ");

  $row = $conexion->extraer_registro();
  echo ' <h3>'.$row[0].'</h3>';
           
             
 
   # code...
 } ?>
            <ul class="list-unstyled list-inline">
               
                <li class="list-inline-item"> | </li>
                <li class="list-inline-item">  36 Visitas  </li>
                <li class="list-inline-item"> | </li>
                <li class="list-inline-item"> <!-- AddToAny BEGIN -->
    <a class="a2a_dd" href="https://www.addtoany.com/share"><i class="fa fa-share-alt"></i> Compartir </a>
 
    <!-- AddToAny END --> </li>
                
            </ul>
        </div>
        <div class="cars-gallery">
           <div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
    <?php if (isset($_GET['tipo'])) {
 require_once("admi/conexion.php");
 $conexion = new Conexion();


   $consulta =$conexion->consulta("SELECT ruta,nombre from tbl_imagenes_habitaciones INNER JOIN tbl_habitaciones on id_habitacion=fk_habitacion where nombre='".$_GET['tipo']."' ");

  while($row = $conexion->extraer_registro()){

echo '
    <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img width="720" height="405" src="'.$row[0].'">
        </div>
      </div>
   
   ';


  }
 
   # code...
 } ?>
       </div>
        
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
 <div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">

    <?php if (isset($_GET['tipo'])) {
 require_once("admi/conexion.php");
 $conexion = new Conexion();


   $consulta =$conexion->consulta("SELECT ruta from tbl_imagenes_habitaciones INNER JOIN tbl_habitaciones on id_habitacion=fk_habitacion where nombre='".$_GET['tipo']."' ");

  while($row = $conexion->extraer_registro()){
    echo '<div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img width="100" height="100" src="'.$row[0].'">
        </div>
      </div>';
   
  }
 
   # code...
 } ?>
   
     
    </div>
</div>
       </div>

      
   


        <div class="cars-tabs">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                          <h4>Visión general</h4>
                      </div>  
                      <div class="col-md-6">
                         <ul>
                             <li><strong>Wifi  :</strong>  gratis</li>
                             <li><strong>Picsina :</strong> 2.5 mts </li>
                             <li><strong>Parqueo  :</strong> Gratuito </li>
                             <li><strong>Tv   :</strong> con cable </li>
                             <li><strong>Cama :</strong> Matrimonial </li>
                             <li><strong>Ducha :</strong> Con agua caliente </li>
                         </ul>
                      </div>
                       <div class="col-md-6">
                         <ul>
                            
                             <li><strong>Pagos :</strong> Tarjeta </li>
                             <li><strong>Regrigerador :</strong>  </li>
                             <li><strong>Aire acondicionado :</strong>  </li>
                         </ul>
                      </div>
                       <div class="col-md-12">
                           <footer class="blockquote-footer">Por favor si deseas mas información puedes contactarnos para encontrar mas detalles.</footer>
                          <!--  <footer class="blockquote-footer">Always arrange a meeting in a safe place.</footer>
                           <footer class="blockquote-footer">This site helps you in searching for a vehicle. We do not verify the authenticity of the product.</footer> -->
                       </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="menu sticky-top ">
            <div class="card bg-light ">
                <div class="card-body">
                <form action="contactar.php" method="post"  id="form">
                    <small> </small>

                    <h3><i class="fa fa-inr"></i>Mas información</h3>
                    <div class="form-group">
                       <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                       
                   </div>
                    <div class="form-group">
                       <input type="text" class="form-control" name="telefono" placeholder="Telefono">
                   </div>
                      <div class="form-group">
                       <input type="text" class="form-control" name="correo" placeholder="Correo">
                   </div>
                
                
                        <div class="pb-3">
                            
                        </div>
                   <button type="submit" class="btn btn-warning">Contactanos</button>
                   </form>
                    <?php if (isset($_GET['mensaje'])) {
  if ($_GET['mensaje']=="OK") {
   echo ' <div class="alert alert-success" role="alert">Se ha enviado tu mensaje correctamente</div>';
  }
   # code...
 } ?>
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

  <style type="text/css">  img {width:100%;}
  /*******************
  SWIPPER 
  ********************/
  .swiper-container {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    }
    .swiper-slide {
      background-size: cover;
      background-position: center;
    }
    .gallery-top {
      height: 80%;
      width: 100%;
    }
    .gallery-thumbs {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }
    .gallery-thumbs .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }
    .gallery-thumbs .swiper-slide-active {
      opacity: 1;
    }


</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
<script type="text/javascript"> var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 'auto',
      touchRatio: 0.2,
      slideToClickedSlide: true,
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;
    

</script>
   <script async src="https://static.addtoany.com/menu/page.js"></script>
</html>