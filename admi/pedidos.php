<?php
session_start();
if (isset($_SESSION['username'])){
}else{
  header('Location: login.php');
}?>
<!DOCTYPE html>
<html>
  <head>
     <title>hospedaje la galerie</title>
    <meta charset="utf8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
   <script src="js/jquery-2.0.3.js"></script>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="js/funciones.js"></script>
  
 <link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Optional theme -->
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/pages/dashboard.css" rel="stylesheet">
  <link href="css/pages/signin.css" rel="stylesheet" type="text/css">
  <link href="js/guidely/guidely.css" rel="stylesheet"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
  </head>
  <div class="loader"></div>
  <body style="margin-bottom: 50px;">
  <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container" style="height: 80px"><img height="100" width="100" src="img/profile.png"> 
 
         
          <!--/.nav-collapse --> 
     
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->

      <div class="subnavbar">
        <div class="subnavbar-inner">
          <div class="container">
            <ul class="mainnav">
               <li ><a href="../admi.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span> </a> </li>
              <li ><a href=""><i class="fas fa-users"></i><span>Empleados</span> </a> </li>
              <li ><a href="clientes.php"><i class="fas fa-user"></i><span>Clientes</span> </a> </li>
            
                           <li  class="dropdown "><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-business-time"></i><span>Reservaciones</span> <b class="caret"></b></a>
                 <ul class="dropdown-menu">
    <li><a href="reservaciones.php">Reservar</a></li>
    <li><a href="lista_reservas.php">Lista de Reservas</a></li>
   
     </ul>
    </li>
                   <li  class="dropdown "><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-bed"></i><span>Habitaciones</span> <b class="caret"></b></a>
                 <ul class="dropdown-menu">
    <li><a href="precio_habitaciones.php">Precios</a></li>
    <li><a href="habitaciones.php">Habitaciones</a></li>
  
     </ul>
    </li>
       
               <li ><a ><i class="fas fa-credit-card"></i><span>Pagos</span> </a> 

               </li>
              <li ><a href=""><i class="fas fa-building"></i><span>Depatments</span> </a> </li>
                <li  class="dropdown active"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-utensils"></i><span>Restaurante</span> <b class="caret"></b></a>
                 <ul class="dropdown-menu">
              
    <li><a href="listapedidos.php">Pedidos</a></li>
    <li><a href="comidas.php">Comidas</a></li>
    <li><a href="produccion.php">Produccion</a></li>
    <li><a href="pedir.php">Hacer pedidos</a></li>
  </ul>
              </li>
             <li  class="dropdown "><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-truck"></i><span>Inventario</span> <b class="caret"></b></a>
                 <ul class="dropdown-menu">
    <li><a href="catalogo.php">Catalogo</a></li>
    <li><a href="entradas.php">Entradas</a></li>
    <li><a href="salidas.php">Deduciones</a></li>
       <li><a href="provedores.php">Provedores</a></li>
     <li><a href="ordencompra.php">Orden de Compra</a></li>
  </ul>
              </li>
               <li ><a href=""><i class="fas fa-chart-bar"></i><span>Reportes</span> </a> </li>
             
             
            </ul>
          </div>
          <!-- /container --> 
        </div>
        <!-- /subnavbar-inner --> 
      </div>
           <div class="container">
    <div class="row">
       

         <div class="col-md-12">
               <h4>Lista de Contenidos</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   
                   <th>Producto</th>
                    <th>Comida</th>
                    <th>Cantidad</th>
                     <th>Precio</th>
                      <th>Fecha</th>
                     <th>Editar</th>
                      
                      
                       <th>Borrar</th>
                   </thead>
    <tbody>
    

    <?php 

        require_once("conexion.php"); 
                    
  $conexion = new Conexion();
 if (isset($_GET['pedido'])) {
   # code...

    $consulta =$conexion->consulta("SELECT tp.id_producto,tp.nombre,tps.nombre,tpr.cantidad,tpr.precio,tpr.fecha FROM   tbl_produccion tpr INNER JOIN tbl_productos tp on tp.id_producto=tpr.fk_producto   INNER join tbl_producir tc on tc.id_producir=tpr.fk_producir INNER JOIN tbl_productos tps on tc.fk_producto= tps.id_producto  INNER join tbl_pedidos tpd on tc.id_producir=tpd.fk_producir  where tpd.id_pedido='".$_GET['pedido']."' and  tp.id_producto NOT IN (select fk_producto FROM tbl_pedido_aprovados  where fk_pedido='".$_GET['pedido']."')");
                     
                     if ($consulta) {
        
        while ($row = $conexion->extraer_registro()) {
          echo '  <tr id="pedido">
   
    <td data-id="'.$row[0].'">'.$row[1].'</td>
    <td data-id="'.$_GET['pedido'].'">'.$row[2].'</td>
    <td >'.$row[3].'</td>
     <td >'.$row[4].'</td>
     <td >'.date('Y-m-d').'</td>
      <td class="category_enabled"">
      <input type="checkbox" checked />
    </td>
    
    
 
    </tr>';
            
         } 
     }


 }



     ?>
  
    
 
    
    
    

    
   
    
   
    
    </tbody>
        
</table>

<div class="clearfix"></div>
         <div class="col-sm-12 borde" style="border-top:0px;">
               
                             <div class="row">
                                    <br>
                                    <div class="col-sm-8">
                                        
                                        <div class="col-sm-12">
                                          
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-8 p-b-1">
                                        
                                         <input type="submit" id="botonpedido" name="guardarpedido" onclick="guardarpedido();" value="Guardar Pedido" class="btn  btn-primary " role="button">
                                          
                                        </div>
                                       
                                     
                                </div>
                            </div>
                             <div class="alert alert-success" id="alert" role="alert"></div>
                             </div>

                
            </div>
            
        </div>
         </div>
    </div>
   
  </div>



    <style type="text/css">
  .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('img/20170127020138_cargando.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
      
</style>

<script type="text/javascript">

  $(document).ready(function(){
  $(".loader").hide();
   
});
</script>

</body>