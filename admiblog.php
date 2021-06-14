<?php
session_start();
if (isset($_SESSION['username'] ) && $_SESSION['tipo'] =="ADMINISTRADOR"){
 require_once("admi/conexion.php");
 $conexion = new Conexion();
}else{
  header('Location: admi/login.php');
}?>
<!DOCTYPE html>
<html>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
  
<script src="admi/js/funciones.js"></script>
  <script src="admi/js/jquery-2.0.3.js"></script>
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

<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img height="100" width="100" src="admi/img/profile.png"> </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a  role="button" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i> Administrador <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="index.php"><i class="fa fa-user-secret"></i>SITIO WEB</a></li>
                        <li><a href="admi/catalogo.php"><i class="fa fa-user-secret"></i>PANEL NAVEGACION</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>

<!-- /Header -->

<!-- Main -->

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

    <ul class="nav nav-pills nav-stacked" style="border-right:1px solid black">
        <!--<li class="nav-header"></li>-->
        <li><a href="admi.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="admiroom.php"><i class="fa fa-bed"></i> Room & reservaciones</a></li>
        <li><a href="admirestaurante.php"><i class="fa fa-cutlery"></i> Restaurante</a></li>
        <li><a href="admitour.php"><i class="fa fa-plane"></i>Reservaciones de Tour</a></li>  
         <li><a href="admiacerca.php"><i class="fa fa-lock"></i> Acerca de</a></li>
        <li class="active"><a href="admiblog.php"><i class="fa fa-newspaper-o"></i>Blog de noticias</a></li>
             <li><a href="admicontactenos.php"><i class="fa fa-phone"></i>Contactenos</a></li>

    </ul>
</div><!-- /span-3 -->
<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
    <!-- Right -->

    <a href="#"><strong><span class="fa fa-dashboard"></span>Pagina de Inicio</strong></a>
    <hr>

   
  <!-- END nav -->
  
  
      
    
    <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='sliderblog' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
  
     
       echo ' <div class="block-30 block-30-sm item" style="background-image: url('."images/".$row[0].');" data-stellar-background-ratio="0.5">';
 }else {
    
     echo ' <div class="block-30 block-30-sm item" style="background-image: url('."images/bg_2.jpg".');" data-stellar-background-ratio="0.5">';
 }

?> 



    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-10">
          <span class="subheading-sm">Blog</span>
              <h2 class="heading">Noticias &amp; Eventos</h2>
                <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="sliderblog">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form>
        </div>
      </div>
    </div>
  </div>


  <div class=" site-section bg-light" id="blog">
    
    <div class="container">
      <div class="row">

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
                <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='evento1' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
  
     
       echo ' <a class="image" style="background-image: url('."images/".$row[0].');" >  <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="evento1">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form></a>';
 }else {
    
     echo ' <a class="image" style="background-image: url('."images/evento1.jpg".');" >  <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="evento1">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form></a>';
 }

?>  

          
            <div class="text">
                <textarea  onchange="cambiartexto('evento1titulo')" class="form-control rounded-0" id="evento1titulo" rows="2"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento1titulo' ");
  $row = $conexion->extraer_registro();  if( isset($row[0])) {
   echo $row[0];
  }?></textarea>
            <textarea  onchange="cambiartexto('evento1texto')" class="form-control rounded-0" id="evento1texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento1texto' ");
  $row = $conexion->extraer_registro(); if( isset($row[0])) {
   echo $row[0];
  }?></textarea>
              
            </div>
          </div>  
        </div>

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
                           <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='evento2' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
  
     
       echo ' <a class="image" style="background-image: url('."images/".$row[0].');" >  <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="evento2">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form></a>';
 }else {
    
     echo ' <a class="image" style="background-image: url('."images/evento2.jpg".');" >  <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="evento2">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form></a>';
 }

?> 
             <div class="text">
               <textarea  onchange="cambiartexto('evento2titulo')" class="form-control rounded-0" id="evento2titulo" rows="2"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento1titulo' ");
  $row = $conexion->extraer_registro(); if( isset($row[0])) {
   echo $row[0];
  }?></textarea>
            <textarea  onchange="cambiartexto('evento2texto')" class="form-control rounded-0" id="evento2texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento2texto' ");
  $row = $conexion->extraer_registro(); if( isset($row[0])) {
   echo $row[0];
  }?></textarea>
             
            </div>
          </div>  
        </div>

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
                           <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='evento3' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
  
     
       echo ' <a class="image" style="background-image: url('."images/".$row[0].');" >  <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="evento3">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form></a>';
 }else {
    
     echo ' <a class="image" style="background-image: url('."images/evento3.jpg".');" >  <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="evento3">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form></a>';
 }

?> 
            <div class="text">
                 <textarea  onchange="cambiartexto('evento3titulo')" class="form-control rounded-0" id="evento3titulo" rows="2"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento3titulo' ");
  $row = $conexion->extraer_registro(); if( isset($row[0])) {
   echo $row[0];
  }?></textarea>
            <textarea  onchange="cambiartexto('evento3texto')" class="form-control rounded-0" id="evento3texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento3texto' ");
  $row = $conexion->extraer_registro(); if( isset($row[0])) {
   echo $row[0];
  }?></textarea>
             
            </div>
          </div>  
        </div>

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
                          <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='evento4' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
  
     
       echo ' <a class="image" style="background-image: url('."images/".$row[0].');" >  <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="evento4">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form></a>';
 }else {
    
     echo ' <a class="image" style="background-image: url('."images/evento4.jpg".');" >  <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="evento4">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form></a>';
 }

?> 
            <div class="text">
              <textarea  onchange="cambiartexto('evento4titulo')" class="form-control rounded-0" id="evento4titulo" rows="2"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento4titulo' ");
  $row = $conexion->extraer_registro(); if( isset($row[0])) {
   echo $row[0];
  }?></textarea>
            <textarea  onchange="cambiartexto('evento4texto')" class="form-control rounded-0" id="evento4texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento4texto' ");
  $row = $conexion->extraer_registro(); if( isset($row[0])) {
   echo $row[0];
  }?></textarea>
             
            </div>
          </div>  
        </div>

        <div class="col-md-12 mb-4">
          <div class="block-3 d-md-flex">
                          <?php global $conexion ;

 $consulta =$conexion->consulta("SELECT ruta from tbl_pagina WHERE segmento='evento5' ");
  $row = $conexion->extraer_registro();
 if (isset($row[0])) {
  
     
       echo ' <a class="image" style="background-image: url('."images/".$row[0].');" >  <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="evento5">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form></a>';
 }else {
    
     echo ' <a class="image" style="background-image: url('."images/evento5.jpg".');" >  <form action="subir.php" method="post" enctype="multipart/form-data" id="form"><div class="box">
          <input  type="file" name="archivo" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
         <input hidden="" type="text" name="segmento" value="evento5">
         <input id="subir" name="guardar" type="submit" value="Subir foto" />
        </div></form></a>';
 }

?> 
            <div class="text">
              <textarea  onchange="cambiartexto('evento5titulo')" class="form-control rounded-0" id="evento5titulo" rows="2"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento5titulo' ");
  $row = $conexion->extraer_registro(); if( isset($row[0])) {
   echo $row[0];
  }?></textarea>
               <textarea  onchange="cambiartexto('evento5texto')" class="form-control rounded-0" id="evento5texto" rows="10"><?php  global $conexion ;

 $consulta =$conexion->consulta("SELECT texto from tbl_pagina WHERE segmento='evento5texto' ");
  $row = $conexion->extraer_registro(); if( isset($row[0])) {
   echo $row[0];
  }?></textarea>
              
            </div>
          </div>  
        </div>


      </div>

        




        

       
    


  

  
</body>
<style type="text/css">.navbar-inverse
{
    background:#00796B;
    border-bottom-color: #004D40;
}
.navbar-inverse .navbar-nav>li>a,.navbar-inverse .navbar-brand,.navbar-inverse .navbar-nav>.dropdown>a .caret
{
    color: #fff;
}
.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus,
.navbar-nav>li>.dropdown-menu
{
    background:#4DB6AC;
}
.nav-pills>li>a,
{
    color: #303F9F;
}

.nav>li>a:hover, .nav>li>a:focus
{
    background-color: #EEEEEE;
}

.navbar > .container, .navbar > .container-fluid {
        display: inline;
}
</style>

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

   
</html>