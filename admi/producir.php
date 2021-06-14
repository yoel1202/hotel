<?php
session_start();
if (isset($_SESSION['username'])){
   require_once("conexion.php");
 $conexion = new Conexion();
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
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center">
                        PRODUCCIÓN</h3>
                    <form class="form form-signup" role="form" action="basedatos.php" method="post">

                       <?php  
                  require_once("encriptado.php");
                    global $conexion;
                    
  $conexion = new Conexion();
 
    $consulta =$conexion->consulta("SELECT id_producto,nombre FROM tbl_productos  INNER JOIN  tbl_producir ON fk_producto != id_producto order by nombre asc ");
                     
                     if (isset($consulta)) {
         echo '  <div class="form-group">
       <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></span>
        <select id="productos" name="producto" class="form-control product-type">';
        while ($row = $conexion->extraer_registro()) {
           echo ' 
          <option value="'.$row[0].'">'.$row[1].'</option>
          ';
          
        
          


  }
  echo '</select>
      </div>
    </div>';
  }
  if (isset($_GET['comida'])) {
    # code...
  

$consulta =$conexion->consulta("SELECT id_producir,nombre FROM tbl_producir INNER JOIN tbl_productos on fk_producto= id_producto where id_producir='".$cod=decrypt($_GET['comida'])."' ");
                     
                     if (isset($consulta)) {
         echo '  <div class="form-group">
       <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-cutlery"></span></span>
        <select id="" name="comida" class="form-control product-type">';
        while ($row = $conexion->extraer_registro()) {
           echo ' 
          <option value="'.$row[0].'">'.$row[1].'</option>
          ';
          
        
          


  }

  echo '</select>
      </div>
    </div>';
  }
 
         } 
     
   
                     ?>

              
                
                        <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-sort-by-order"></span>
                            </span>
                            <input type="Text" id="cantidadconversion"  class="form-control" onchange="costo();" name="cantidad" placeholder="Cantidad" />
                                   </div>
                    </div>
                          
                          <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span>
                            </span>
                            <input type="Text" id="totalconversion" readonly="" class="form-control" name="precio" placeholder="Precio" />
                                   </div>
                    </div>
             
                    <?php 
echo '     <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
        <input readonly type="date"  name="fecha" placeholder="30g" class="form-control color-option-prompt" value="'.date('Y-m-d').'">
      </div>
    </div>';
     ?>
                    
                   
                    
                    
                    
                    
                    
               
                   
 <?php if (isset($_GET['mensaje'])) {
  if ($_GET['mensaje']=="OK") {
   echo '<div class="alert alert-success" role="alert"> Se ha insertado correctamente</div>';
  }
   # code...
 } ?>

                    <input type="submit" name="guardarproduccion" value="Guardar" class="btn btn-sm btn-primary btn-block" role="button">
                     </a> </form>
                </div>
                
            </div>
        </div>

         <div class="col-md-8">
               <h4>LISTA DE PRODUCCIÓN</h4>
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
 require_once("encriptado.php");
       global $conexion;
                    
  $conexion = new Conexion();
 if (isset($_GET['comida'])) {
   # code...

    $consulta =$conexion->consulta("SELECT id_produccion,tp.nombre,tps.nombre,tpr.cantidad,tpr.precio,tpr.fecha,tp.unidad FROM  tbl_produccion tpr INNER JOIN tbl_productos tp on tp.id_producto=tpr.fk_producto INNER join tbl_producir tc on tc.id_producir=tpr.fk_producir INNER JOIN tbl_productos tps on tc.fk_producto= tps.id_producto where id_producir='".$cod=decrypt($_GET['comida'])."'");
                     
                     if ($consulta) {
        
        while ($row = $conexion->extraer_registro()) {
          echo '  <tr class="producir" id="producir">
   
    <td data-id="'.$row[0].'">'.$row[1].'</td>
    <td>'.$row[2].'</td>';

    if ($row[6]=="GRAMOS") {
      echo '
    <td>'.$row[3].' G</td>';
    }
       if ($row[6]=="UNIDAD") {
      echo '
    <td>'.$row[3].' UD</td>';
    }
    
       if ($row[6]=="LITROS") {
      echo '
    <td>'.$row[3].' ML</td>';
    }
    echo '
     <td >'.$row[4].'</td>
     <td >'.$row[5].'</td>
    
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button    class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
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
                                        <div class="col-sm-4">Total</div>
                                        <div class="col-sm-8 p-b-1">
                                        <?php  global $conexion;
                    
  $conexion = new Conexion();
 
   
  
  if (isset($_GET['comida'])) {
    # code...
  

$consulta =$conexion->consulta("SELECT total FROM tbl_producir where id_producir='".decrypt($_GET['comida'])."' ");
$row = $conexion->extraer_registro();

echo ' <input type="text"  readonly id="txtSUB_TOTAL" name="txtSUB_TOTAL" class="form-control" value="'.$row[0].'" />';
}

?>
                                           
                                        </div>
                                       
                                     
                                </div>
                            </div>
                             </div>

                
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
        <h4 class="modal-title custom_align" id="Heading">Editar producto</h4>
      </div>
          <div class="modal-body">
            <form class="form form-signup" role="form" action="basedatos.php" method="post">
              <div class="form-group" hidden=""  >
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-folder-close"></span>
                            </span>
                            <input type="Text" class="form-control" name="id" id="id" placeholder="id" />
                                   </div>
                    </div>
   <?php  global $conexion;
                    
  $conexion = new Conexion();
 
    $consulta =$conexion->consulta("SELECT id_producto,nombre FROM tbl_productos  ");
                     
                     if (isset($consulta)) {
         echo '  <div class="form-group">
       <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></span>
        <select id="nombre" name="producto" class="form-control product-type">';
        while ($row = $conexion->extraer_registro()) {
           echo ' 
          <option value="'.$row[0].'">'.$row[1].'</option>
          ';
          
        
          


  }
  echo '</select>
      </div>
    </div>';



  }


    if (isset($_GET['comida'])) {
    # code...
  

$consulta =$conexion->consulta("SELECT id_producir,nombre FROM tbl_producir INNER JOIN tbl_productos on fk_producto= id_producto where id_producir='".$_GET['comida']."' ");
                     
                     if (isset($consulta)) {
         echo '  <div class="form-group">
       <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-cutlery"></span></span>
        <select id="comida" name="comida" class="form-control product-type">';
        while ($row = $conexion->extraer_registro()) {
           echo ' 
          <option value="'.$row[0].'">'.$row[1].'</option>
          ';
          
        
          


  }

  echo '</select>
      </div>
    </div>';
  }
 
         } 
     ?>

                       <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-sort-by-order"></span>
                            </span>
                            <input type="Text" id="cantidadconversion2"  class="form-control cantidadconversion" onchange="costoeditar();" name="cantidad" placeholder="Cantidad" />
                                   </div>
                    </div>
                          
                          <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span>
                            </span>
                            <input type="Text" id="totalconversion" readonly="" class="form-control totalconversion" name="precio" placeholder="Precio" />
                                   </div>
                    </div>
             
                    <?php 
echo '     <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
        <input readonly type="date"  id="fecha" name="fecha" placeholder="30g" class="form-control color-option-prompt" value="'.date('Y-m-d').'">
      </div>
    </div>';
    ?>
                    
                    
                    
                       <div class="modal-footer ">
        <button type="submit"  name="editarproduccion" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Actualizar</button>
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
        <div class="form-group" hidden="" >
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
        <button type="submit"  name="eliminarproduccion" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>Si</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
    </form>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>

<script type="text/javascript">
  
</script>

</body>