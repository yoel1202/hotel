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
   <div class="loader"></div>
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
            
                           <li  class="dropdown active"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-business-time"></i><span>Reservaciones</span> <b class="caret"></b></a>
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
                <li  class="dropdown "><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-utensils"></i><span>Restaurante</span> <b class="caret"></b></a>
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
               <h4>LISTA DE RESERVACIONES</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   <th>Nombre</th>
                   <th>Cedula</th>
                   <th>Habitacion</th>
                   <th>Numero de habitacion</th>
                   <th>Tipo</th>
                    <th>Desayuno</th>
                    <th>Fecha de reserva</th>
                     <th>Fecha de entrada</th>
                     <th>Fecha Salida</th> 
                     <th>Cantidad</th>
                      <th>Total</th>
                     <th>Descripcion</th>
                      <th>Estado</th>
                     <th>Editar</th>
                      <th>Borrar</th>
                      
                     
                   </thead>
    <tbody>
    

    <?php 

        require_once("conexion.php"); 
                    
  $conexion = new Conexion();
 $tamano=10;

    $consulta =$conexion->consulta("SELECT id_reservacion,tc.nombre,tc.cedula ,th.nombre,th.numero_habitacion,tipo,desayuno,fecha,fecha_desde,fecha_hasta,cantidad_personas,total,tr.descripcion FROM tbl_reservaciones tr INNER JOIN tbl_clientes as tc on tbl_clientes_idl_cliente = idl_cliente inner join tbl_habitaciones th on th.id_habitacion =tbl_habitaciones_id_habitacion ");
$numero_filas = $consulta->num_rows;
             $total_paginas =ceil( $numero_filas / $tamano);
             if (isset($_GET['pagina'])) {
              $pagina=$_GET['pagina'];
              $pagina_inicio=($pagina-1)*$tamano;
                  $consulta =$conexion->consulta("SELECT id_reservacion, tc.nombre,tc.cedula, th.nombre,th.numero_habitacion,tipo,desayuno,fecha,fecha_desde,fecha_hasta,cantidad_personas,total,tr.descripcion,idl_cliente,id_habitacion FROM tbl_reservaciones as tr INNER JOIN tbl_clientes as tc on tbl_clientes_idl_cliente = idl_cliente inner join tbl_habitaciones th on th.id_habitacion =tbl_habitaciones_id_habitacion ORDER BY fecha_desde ASC  LIMIT $pagina_inicio,$tamano ");
               }else{
      $consulta =$conexion->consulta("SELECT id_reservacion,tc.nombre,tc.cedula,th.nombre,th.numero_habitacion, tipo,desayuno,fecha,fecha_desde,fecha_hasta,cantidad_personas,total,tr.descripcion,idl_cliente,id_habitacion FROM tbl_reservaciones as tr INNER JOIN tbl_clientes as tc on tbl_clientes_idl_cliente = idl_cliente inner join tbl_habitaciones th on th.id_habitacion =tbl_habitaciones_id_habitacion ORDER BY fecha_desde ASC LIMIT 0,$tamano ");
                   }  
                     if (isset($consulta)) {
        
        while ($row = $conexion->extraer_registro()) {
          echo '  <tr id="reservacion">
   
    <td data-id="'.$row[13].'">'.$row[1].'</td>
    <td>'.$row[2].'</td>
    <td data-id="'.$row[14].'">'.$row[3].'</td>
     <td >'.$row[4].'</td>
     <td data-id="'.$row[0].'">'.$row[5].'</td>
      <td >'.$row[6].'</td>
      <td >'.$row[7].'</td>
     <td >'.$row[8].'</td>
      <td >'.$row[9].'</td>
         <td >'.$row[10].'</td>
              <td >'.$row[11].'</td>
                   <td >'.$row[12].'</td>';
                   date_default_timezone_set('America/Costa_Rica');
                   $fecharesta=date("Y-m-d",strtotime($row[8]."- 5 days"));

                   if ($row[8]==date('Y-m-d')) {
                    echo ' <td id="color" bgcolor="#ff0000">HOY</td>';
                   }elseif ($fecharesta <$row[8] && $fecharesta>=date('Y-m-d')) {
                     echo ' <td id="color" bgcolor="#00FF00">ESPERA</td>';
                   }elseif ($fecharesta < date('Y-m-d') && date('Y-m-d') < $row[8]) {
                     echo ' <td id="color" bgcolor="#FF9900">PROXIMAMENTE</td>';

                   }else{

                    echo ' <td id="color" bgcolor="#1E2EC0">FINALIZADO</td>';

                  }
                   echo '<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button    class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
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

  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Editar reserva</h4>
      </div>
          <div class="modal-body">
            <form class="form form-signup" role="form" action="basedatos.php" method="post">
              <div class="form-group" hidden="true" >
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-folder-close"></span>
                            </span>
                            <input type="Text" class="form-control" name="id" id="id" placeholder="id" />
                                   </div>
                    </div>
                       <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span>
                            </span>
                            <input type="Text" class="form-control" id="cedula" onchange="buscarcedula()" name="cedula" placeholder="Cedula" />
                                   </div>
                    </div>
 
           <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span>
                            </span>
                            <input type="Text" class="form-control" id="nombredevolver" name="nombre" placeholder="Nombre" />
                                   </div>
                    </div>
    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span>
                            </span>
                            <input type="Text" class="form-control" id="apellidodevolver" name="apellido" placeholder="Apellido" />
                                   </div>
                    </div>
                    
                        <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span>
                            </span>
                            <input type="Text" class="form-control" name="correo" id="correobuscar" placeholder="Correo" />
                                   </div>
                    </div>
                        <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span>
                            </span>
                            <input type="Text" class="form-control" name="telefono" id="telefonobuscar" placeholder="Telefono" />
                                   </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-wrench"></span></span>
                           <select class="form-control col-sm-2" name="tipo" id="tipo">
  <option value="Llamada Local">Llamada Local</option>
  <option value="Booking">Booking</option>
  <option value="Expedia">Expedia</option>
  <option value="ARBNB">ARBNB</option>

</select>
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input type="date" id="fechainicio" onchange="consultardisponibilidad()"  class="form-control" name="fechadesde" />
                                   </div>
                    </div>
                       <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            <input type="date"  id="fechafinal" onchange="consultardisponibilidad()" class="form-control" name="fechahasta" />
                                   </div>
                    </div>
                               <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-wrench"></span></span>
                           <select class="form-control col-sm-2" name="estado" id="estados">
  <option value="SIN DESAYUNO">SIN DESAYUNO</option>
  <option value="CON DESAYUNO">CON DESAYUNO</option>
 

</select>
                        </div>
                    </div>
                      <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="Text" class="form-control" id="cantidad" onchange="consultardisponibilidad()"  name="precio" placeholder="cantidad de personas"   />
                                   </div>
                    </div>

                     
           <div class="form-group">
       <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></span>
        <select id="habitacion" onchange="precioreservacion();" name="habitacion" class="form-control product-type">';
      
  
  </select>
      </div>
    </div>

 
      
     
   
                     
                        <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span>
                            </span>
                            <input type="Text" class="form-control" id="precio" name="precio" placeholder="precio" />
                                   </div>
                    </div>
                          
             
                    <?php 
echo '     <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
        <input readonly type="date" id="fecha" name="fecha" placeholder="30g" class="form-control color-option-prompt" value="'.date('Y-m-d').'">
      </div>
    </div>';
     ?>
                    
                     <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-folder-close"></span>
                            </span>
                            <textarea rows="4" cols="40" id="descripciones" name="descripcion" placeholder="Descripcion" ></textarea> 
                                                               </div>
                    </div>
                    
              
                       <div class="modal-footer ">
        <button type="submit"  name="editarcliente" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Actualizar</button>
      </div>
    </form>
      </div>
       
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
       <form class="form form-signup" role="form" action="basedatos.php" method="post">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Eliminar este item</h4>
      </div>
        <div class="form-group" hidden="true" >
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-folder-close"></span>
                            </span>
                            <input type="Text" class="form-control" name="id2" id="id2" placeholder="id" />
                                   </div>
                    </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Esta seguro que quiere eliminar este registro?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="submit"  name="eliminarreservacion" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>Si</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
    </form>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script>

</body>