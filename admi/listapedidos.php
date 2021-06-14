<?php
session_start();
if (isset($_SESSION['username'])){
}else{
  header('Location: login.php');
}?>
<!DOCTYPE html>
<html>
  <head>
    <title><?=$title?></title>
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
               <h4>PEDIDOS DE COMIDA</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   
                   <th>Comida</th>
                    <th>Cantidad</th>
                    <th>Hora de entrega</th>
                     <th>Observacion</th>
                     <th>Fecha</th> 
                     <th>Numero de Habitacion</th>
                      <th>Estado</th>
                    
                     
                      <th>Editar</th>
                      <th>Imprimir</th>
                     
                   </thead>
    <tbody>
    

    <?php 

        require_once("conexion.php"); 
                    
  $conexion = new Conexion();
 $tamano=10;

    $consulta =$conexion->consulta("SELECT id_pedido FROM  tbl_producir TC INNER JOIN tbl_pedidos TP ON TP.fk_producir=TC.id_producir  INNER JOIN tbl_productos tps on fk_producto= id_producto  INNER JOIN tbl_clientes TH ON TH.idl_cliente = TP.fk_cliente where  TP.estado='PROCESANDO'");
$numero_filas = $consulta->num_rows;
             $total_paginas =ceil( $numero_filas / $tamano);
             if (isset($_GET['pagina'])) {
              $pagina=$_GET['pagina'];
              $pagina_inicio=($pagina-1)*$tamano;
                  $consulta =$conexion->consulta("SELECT id_pedido,tps.nombre,TP.cantidad,TP.hora,TP.observacion,TP.fecha,CONCAT(TH.nombre,' ',TH.cedula),TP.estado FROM  tbl_producir TC  INNER JOIN tbl_productos tps on fk_producto= id_producto  INNER JOIN tbl_pedidos TP ON TP.fk_producir=TC.id_producir INNER JOIN tbl_clientes TH ON TH.idl_cliente = TP.fk_cliente where  TP.estado='PROCESANDO' LIMIT $pagina_inicio,$tamano ");
               }else{
      $consulta =$conexion->consulta("SELECT id_pedido,tps.nombre,TP.cantidad,TP.hora,TP.observacion,TP.fecha,CONCAT(TH.nombre,' ',TH.cedula),TP.estado FROM  tbl_producir  TC  INNER JOIN tbl_productos tps on fk_producto= id_producto  INNER JOIN tbl_pedidos TP ON TP.fk_producir=TC.id_producir INNER JOIN tbl_clientes TH ON TH.idl_cliente = TP.fk_cliente where  TP.estado='PROCESANDO' LIMIT 0,$tamano ");
                   }  
                     if (isset($consulta)) {
        
        while ($row = $conexion->extraer_registro()) {
          echo '  <tr id="comidas">
   
    <td data-id="'.$row[0].'">'.$row[1].'</td>
    <td>'.$row[2].'</td>
    <td >'.$row[3].'</td>
     <td >'.$row[4].'</td>
     <td >'.$row[5].'</td>
      <td >'.$row[6].'</td>
      <td >'.$row[7].'</td>
    
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a  href="pedidos.php?pedido='.$row[0].'"  class="btn btn-primary btn-xs" ><span  class="glyphicon glyphicon-pencil"></span>Cambiar estado</a></p></td>
     <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a  href="pdf/desayunos.php?pedido='.$row[0].'"  class="btn btn-primary btn-xs" ><span  class="glyphicon glyphicon-pencil"></span>Imprimir</a></p></td>
   ';
            
         } 
     }





echo ' </tbody>
        
</table>

<div class="clearfix"></div>';
echo '<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>';
  echo '<li class=""><a href="listapedidos.php">1</a></li>';
for ($i=2; $i <=$total_paginas ; $i++) { 
 echo '<li class=""><a href="listapedidos.php?pagina='.$i.'">'.$i.'</a></li>';
}


echo ' <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul> ';

  ?>
                
            </div>
            
        </div>
         </div>
    </div>
   
  </div>




<script type="text/javascript">
  
</script>

</body>