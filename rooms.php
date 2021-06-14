<?php 
require_once("admi/conexion.php");
 $conexion = new Conexion(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hospedaje la Galerie</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  
  </head>
  <body>
     <div class="loader"></div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
     <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a href="index.php" class="nav-link">Inicio</a></li>
          <li class="nav-item active"><a href="rooms.php" class="nav-link">Habitaciones</a></li>
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


  
      <?php global $conexion;
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='slider1habitaciones' ");
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
          <span class="subheading-sm">Habitaciones</span>
          <h2 class="heading">Petite &amp; Osa Natura</h2>
        </div>
      </div>
    </div>
  </div>



   

    
    <div class="site-section bg-light">
      <div class="container">
        <div  class="row mb-5 ">
          <div class="col-md-12 mb-5">
            
            <div class="block-3 d-md-flex">
                              <?php global $conexion;
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='habitacionesfoto1' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
  
     
       echo '   <div class="image" onclick="window.location='."'habitacionslider.php?tipo=osa natura'".';" style="background-image: url('."images/".$row[0].');" ></div>';
 }else {
    
     echo '   <div class="image" onclick="window.location='."'habitacionslider.php?tipo=osa natura'".';" style="background-image: url('."images/img_1.jpg".');"></div>';
 }

?>  
              <div class="text">

                <h2 class="heading">Osa Natura</h2>
                
                <ul class="specs mb-5">
               <li><strong>Adultos:</strong> 2</li>
                          <li><strong>Categoria:</strong> Parejas</li>
                          <li><strong>Facilidades:</strong> Tv con cable, Picsina, Wifi gratis, Parqueo Gratuito</li>
                          <li><strong>Tamaño:</strong> 20m<sup>2</sup></li>
                          <li><strong>Tipo de cama:</strong> Matrimonial</li>
                </ul>

                <p><a href="#" class="btn btn-primary py-3 px-5">Reservar Ahora</a></p>

              </div>
            </div>


          </div>  


          <div class="col-md-12 mb-5">
            
            <div class="block-3 d-md-flex">
              <?php global $conexion;
 $conexion = new Conexion();

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='habitacionesfoto2' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
  
     
       echo '   <div class="image order-2" onclick="window.location='."'habitacionslider.php?tipo=petite'".';" style="background-image: url('."images/".$row[0].');" ></div>';
 }else {
    
     echo '  <div class="image order-2" onclick="window.location='."'habitacionslider.php?tipo=petite'".';" style="background-image: url('."images/img_2.jpg".');"></div>';
 }

?>  
              <div class="text order-1">
                
                <h2 class="heading">Petite</h2>
               
                <ul class="specs mb-5">
                  <li><strong>Adultos:</strong> 4</li>
                          <li><strong>Categoria:</strong> Familiar</li>
                          <li><strong>Facilidades:</strong> Closet, Tv con cable, Picsina, Wifi gratis, Parqueo Gratuito</li>
                          <li><strong>Tamaño:</strong> 20m<sup>2</sup></li>
                          <li><strong>Tipo de cama:</strong> Matrimonial</li>
                </ul>
                      
                <p><a href="#" class="btn btn-primary py-3 px-5">Reservar Ahora</a></p>
                
              </div>
            </div>


          </div>  


       

        </div>

        




        <div class="row mb-5 pt-5 justify-content-center">
            <div class="col-md-7 text-center section-heading">
              <h2 class="heading">Reservaciones</h2>
              <p>Las habitaciones cuentan con ungran es!</p>
            </div>
          </div>

        <div class="row">
        
      <div class="row mb-5">
        <div class="col-md-12">

          <div class="block-32">
            <form action="#">
              <div class="row">
             
     
                    
   
                                     
 <?php if (isset($_REQUEST['entrada'])) {
  
  echo '   <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Fecha de entrada</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" value="'.$_REQUEST['entrada'].'" class="form-control">
                  </div>
                </div>';
   # code...
 }else{

  echo '   <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Fecha de entrada</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div>';

  } ?>

                 <?php if (isset($_REQUEST['salida'])) {
  
  echo '      <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Fecha de salida</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" value="'.$_REQUEST['salida'].'" class="form-control">
                  </div>
                </div>';
   # code...
 }else{

  echo '      <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Fecha de salida</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control">
                  </div>
                </div>';

  } ?>
             
            
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="checkin">Adultos</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="adultos" class="form-control">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                            <option value="">5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="checkin">Niños 0-5</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control">
                        <option value="">0</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4+</option>
                        </select>
                      </div>
                    </div>

                  </div>

                </div>
  <div class="col-md-3 mb-3 mb-md-0">
                      <label for="checkin">Niños 6-12</label>
                      <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="ninos" class="form-control">
                        <option value="">0</option>
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                           <option value="">4</option>
                             <option value="">5</option>
                        </select>
                      </div>
                    </div>
 <div class="row">
 
                 <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Cedula</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-user"></span></div>
                    <input type="text" id="cedula" onchange="buscarcedula()"  class="form-control">
                  </div>
                </div>
                <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Nombre</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-user"></span></div>
                    <input type="text" id="nombredevolver" class="form-control">
                  </div>
                </div> 
                <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Apellidos</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-envelope"></span></div>
                    <input type="text" id="apellidodevolver" class="form-control">
                  </div>
                </div> 
                <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Telefono</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-phone"></span></div>
                    <input type="text" id="telefonobuscar" class="form-control">
                  </div>
                </div>
                    <div class="col-md-3 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Correo</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-envelope"></span></div>
                    <input type="text" id="correobuscar" class="form-control">
                  </div>
                </div>
                 
                 </div>
                   
                     

              
                 </div> 

              </div>
<div class="container"></div>
    <div class="card">
            <div class="card-header bg-dark text-light">
                
                
                <div class="clearfix"></div>
            </div>
            <div  id="agregar" class="card-body">

                
         
              
            </div>
           
        </div>
</div>
</form>
              <div class="col-md-6 col-lg-12 align-self-end">
                  <button onclick="consultarreserva();" class="btn btn-primary btn-block">Consultar disponibilidad</button>
                   <div class="alert alert-success" id="alert" role="alert"></div>
                </div>
            
          </div>
        </div>
      </div>
       
        </div>
      </div>
    </div>
    



<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                       <!--  <img height="250" width="300" src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive"> -->
                         <div class="col-md-2 product_img">
                        <img  id="img0" height="250" width="300" src="images/img_2.jpg" class="img-responsive">
                    </div>
                     <div  class="col-md-1 product_imgcuadro">
                        <img id="img1" height="60" width="35" src="images/img_2.jpg" class="img-responsive">
                    </div>
                     <div class="col-md-1 product_imgcuadro">
                        <img id="img2" height="60" width="35" src="images/img_2.jpg" class="img-responsive">
                    </div>
                      <div class="col-md-1 product_imgcuadro">
                        <img id="img3" height="60" width="35" src="images/img_2.jpg" class="img-responsive">
                    </div>
                      <div class="col-md-1 product_imgcuadro">
                        <img id="img4" height="60" width="35" src="images/img_2.jpg" class="img-responsive">
                    </div>
                    </div>
                    <div class="col-md-6 product_content">
                        <h4 id="producto"> <span></span></h4>
                        <div class="rating">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <!-- (10 reviews) -->
                        </div>
                        <p id="descripciones">.</p>
                        <h3 id="costo" class="cost"><span class="glyphicon glyphicon-usd"></span>  <small class="pre-cost"><span class="glyphicon glyphicon-usd"></span> </small></h3>
                  
                        <div class="space-ten"></div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
  <div id="squarespaceModal" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button"  class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel"></h3>
    </div>
    <div class="modal-body">
      
            <!-- content goes here -->
      <aside class="col-sm-12">
<p>Pagos</p>

<article class="card">
<div class="card-body p-5">
<p> <img width="30" height="30" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Former_Visa_%28company%29_logo.svg/800px-Former_Visa_%28company%29_logo.svg.png"> 
  <img width="30" height="30" src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-Blue-icon.png"> 
   <img width="30" height="30" src="https://graffica.info/wp-content/uploads/2018/04/american-express-graphic-design-3.jpg">
</p>
<p id="confirmacion" class="alert alert-success"></p>

<form role="form">
<div class="form-group">
<label for="username">Nombre completo (de la tarjeta)</label>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"><i class="icon-user"></i></span>
  </div>
  <input type="text" class="form-control" id="nombretarjeta" name="username" placeholder="" required="">
</div> <!-- input-group.// -->
</div> <!-- form-group.// -->

<div class="form-group">
<label for="cardNumber">Numero de tarjeta</label>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"><i class="icon-credit-card"></i></span>
  </div>
  <input type="text" class="form-control" id="numerotarjeta" name="cardNumber" placeholder="">
</div> <!-- input-group.// -->
</div> <!-- form-group.// -->

<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            <label><span class="hidden-xs">Expiración</span> </label>
          <div class="form-inline">
            <select class="form-control" id="expiracion" style="width:45%">
          <option>MM</option>
          <option>01 - Enero</option>
          <option>02 - Febrero</option>
          <option>03 - Marzo</option>
   <option>04 - Abril</option>
          <option>05 - Mayo</option>
          <option>06 - Junio</option>
             <option>07 - Julio</option>
          <option>08 - Agosto</option>
          <option>09 - Setiembre</option>
             <option>10 - Octubre</option>
          <option>11 - Noviembre</option>
          <option>12 - Diciembre</option>
        </select>
              <span style="width:10%; text-align: center"> / </span>
              <select class="form-control" id="expiracionfecha" style="width:45%">
          <option>YY</option>
          <option>2018</option>
          <option>2019</option>
          <option>2021</option>
          <option>2021</option>
          <option>2022</option>
          <option>2023</option>
          <option>2024</option>
          <option>2025</option>
          <option>2026</option>
          <option>2027</option>
          <option>2028</option>
          <option>2029</option>
        </select>
          </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
            <input class="form-control" id="cvv" required="" type="text">
        </div> <!-- form-group.// -->
    </div>
</div> <!-- row.// -->
<button onclick="reservar();" class="subscribe btn btn-primary btn-block" type="button"> Confirmar  </button>
</form>
</div> <!-- card-body.// -->
</article> <!-- card.// -->


  </aside> <!-- col.// -->

    </div>
    <div class="modal-footer">
      <div class="btn-group btn-group-justified" role="group" aria-label="group button">
        <div class="btn-group" role="group">
          <button type="button" id="cerrarmodal" class="btn btn-default" data-dismiss="modal"  role="button">Cerrar</button>
        </div>
        
        <div class="btn-group" role="group">
          <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Guardar</button>
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
    <script src="admi/js/jquery-2.0.3.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="admi/js/funciones.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
  .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('admi/img/20170127020138_cargando.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
        .product_view .modal-dialog{max-width: 800px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}

        .product_imgcuadro{
         display: inline-table;

  padding: 5px;
  border: 1px solid #dbdbdb; 
        }
</style>

<script type="text/javascript">

  $(document).ready(function(){
  $(".loader").hide();
   
});
</script>
  </body>
</html>