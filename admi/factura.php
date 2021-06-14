<?php
session_start();
if (isset($_SESSION['username'])){
  
  
}else{
  header('Location: index.php');
}

   ?>

<!DOCTYPE html>
<html lang="es">

  <head>
    <title></title>
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
  <link href="css/buscador.css" rel="stylesheet">
  
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
                   <li  class="dropdown "><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-bed"></i><span>Habitaciones & Tours</span> <b class="caret"></b></a>
                 <ul class="dropdown-menu">
    <li><a href="precio_habitaciones.php">Precios habitaciones</a></li>
      <li><a href="precio_tours.php">Precios Tours</a></li>
    <li><a href="habitaciones.php">Habitaciones</a></li>
  <li><a href="tour.php">Tours</a></li>
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
             <li  class="dropdown active"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-truck"></i><span>Inventario</span> <b class="caret"></b></a>
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
        <div class="panel panel-default">
            <div class="panel-heading librePanelHeading">
                <div class="panel-title">
                    
                   

                    <a data-toggle="collapse" href="#menuPanelListGroup">
                        <span>Información Básica</span>
                    </a>
                    
                </div>
            </div>

            <div class="list-group collapse in col-md-12"  id="menuPanelListGroup">
       <div class="list-group-item librePanelListGroupItem col-md-6">
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Tipo de documento:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-file"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                              readonly="" value="Factura Electrónica" ="" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Sucursal:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-building"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="01" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
 <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Fecha de emisión::</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-calendar"></i></div>
                        <input type="date" name="email" class="form-control" id="email"
                               value="01" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Condición de venta:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-credit-card"></i></div>
                        <select class="form-control input-sm" id="Header_SaleCondition" name="Header.SaleCondition" onchange="return creditTermVisible();"><option value="01">Contado</option>
<option value="02">Crédito</option>
<option value="03">Consignación</option>
<option value="04">Apartado</option>
<option value="05">Arrendamiento con opción de compra</option>
<option value="06">Arrendamiento en función financiera</option>
<option value="07">Cobro a favor de un tercero</option>
<option value="08">Servicios prestados al estado a crédito</option>
<option value="09">Pago del servicio prestado al estado</option>
</select>
                    </div>
                </div>
            </div>
       
        </div>

        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Medio de pago:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-key"></i>
                        </div>
                        <select  class="form-control input-sm" id="MedioPagoCodes"  name="MedioPagoCodes">
                        <option value="01">Efectivo</option>
<option value="02">Tarjeta</option>
<option value="03">Cheque</option>
<option value="04">Transferencia</option>
<option value="05">Recaudado por Terceros</option>
<option value="99">Otros</option>
</select>
                    </div>
                </div>
            </div>
        </div>
    
   </div>



   <div class="list-group-item librePanelListGroupItem col-md-6">
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Moneda:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-3 mr-sm-3 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-money"></i></div>
                        <select class="form-control input-sm valid" data-val="true" data-val-number="The field Moneda: must be a number." data-val-required="The Moneda: field is required." id="Header_CurrencyId" name="Header.CurrencyId" onchange="return convertFactor();" aria-required="true" aria-invalid="false" aria-describedby="Header_CurrencyId-error"><option value="1">CRC</option>
<option value="2">EUR</option>
<option value="3">GBP</option>
<option value="4">JPY</option>
<option value="5">MXN</option>
<option value="6">USD</option>
</select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Terminal:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-institution"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="00001" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>
 <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Tipo de cambio:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" ><strong style="color: #000000">¢</strong></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="1.00" readonly="">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Código de Actividad:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-credit-card"></i></div>
                        <select class="form-control input-sm" id="Header_SaleCondition" name="Header.SaleCondition" onchange="return creditTermVisible();"><option value="01">Contado</option>
<option value="02">Crédito</option>
<option value="03">Consignación</option>
<option value="04">Apartado</option>
<option value="05">Arrendamiento con opción de compra</option>
<option value="06">Arrendamiento en función financiera</option>
<option value="07">Cobro a favor de un tercero</option>
<option value="08">Servicios prestados al estado a crédito</option>
<option value="09">Pago del servicio prestado al estado</option>
</select>
                    </div>
                </div>
            </div>
       
        </div>

    
   </div>
</div>




            <div class="panel-heading librePanelHeading">
                <div class="panel-title">
                   

                    <a data-toggle="collapse" href="#menu2PanelListGroup">
                        <span>Datos del Emisor</span>
                    </a>
                </div>



            </div>
           
                 <div class="list-group collapse in  col-md-12"  id="menu2PanelListGroup">
       <div class="list-group-item librePanelListGroupItem col-md-6">
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Razón social:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="glyphicon glyphicon-user"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                              readonly="" value="PROFESOR POR CUENTA PROPIA" ="" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>

      




         <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Provincia:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-3 mr-sm-3 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-map-marker"></i></div>
     <select class="form-control input-sm" id="Emitter_Provincia" name="Emitter.Provincia" onchange="return LoadCantones('Emitter', null, null, false);"><option value="1">San José</option>
<option value="2">Alajuela</option>
<option value="3">Cartago</option>
<option value="4">Heredia</option>
<option value="5">Guanacaste</option>
<option selected="selected" value="6">Puntarenas</option>
<option value="7">Limón</option>
</select>
                    </div>
                </div>
            </div>
         
        </div>

        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Cantón:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-map-marker"></i>
                        </div>
                       <select class="form-control input-sm" id="Emitter_Canton" name="Emitter.Canton" onchange="return LoadDistritos('Emitter', null, null, false);"><option value="601">Puntarenas</option>
<option value="602">Esparza</option>
<option value="603">Buenos Aires</option>
<option value="604">Montes de Oro</option>
<option selected="selected" value="605">Osa</option>
<option value="606">Aguirre</option>
<option value="607">Golfito</option>
<option value="608">Coto Brus</option>
<option value="609">Parrita</option>
<option value="610">Corredores</option>
<option value="611">Garabito</option>
</select>
                    </div>
                </div>
            </div>
        </div>

               <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Distrito:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-3 mr-sm-3 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-map-marker"></i></div>
                     <select class="form-control input-sm" id="Emitter_Distrito" name="Emitter.Distrito" onchange="return LoadBarrios('Emitter', null, null, false);"><option selected="selected" value="60501">PUERTO CORTÉS</option>
<option value="60502">PALMAR</option>
<option value="60503">SIERPE</option>
<option value="60504">BAHÍA BALLENA</option>
<option value="60505">PIEDRAS BLANCAS</option>
<option value="60506">BAHÍA DRAKE</option>
</select>
                    </div>
                </div>
            </div>
         
        </div>


          <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Barrio:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-3 mr-sm-3 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-map-marker"></i></div>
                       <select class="form-control input-sm valid" id="Emitter_Barrio" name="Emitter.Barrio" aria-invalid="false"><option value="6050101"> Canadá</option>
<option value="6050102"> Cementerio</option>
<option value="6050103"> Cinco Esquinas</option>
<option value="6050104"> Precario</option>
<option value="6050105"> Pueblo Nuevo</option>
<option value="6050106"> Renacimiento</option>
<option selected="selected" value="6050107"> Yuca.</option>
<option value="6050108"> Balsar</option>
<option value="6050109"> Bocabrava</option>
<option value="6050110"> Bocachica</option>
<option value="6050111"> Cerrón</option>
<option value="6050112"> Coronado</option>
<option value="6050113"> Chontales</option>
<option value="6050114"> Delicias</option>
<option value="6050115"> Embarcadero</option>
<option value="6050116"> Fuente</option>
<option value="6050117"> Isla Sorpresa</option>
<option value="6050118"> Lindavista</option>
<option value="6050119"> Lourdes</option>
<option value="6050120"> Ojochal</option>
<option value="6050121"> Ojo de Agua</option>
<option value="6050122"> Parcelas</option>
<option value="6050123"> Pozo</option>
<option value="6050124"> Punta Mala</option>
<option value="6050125"> Punta Mala Arriba</option>
<option value="6050126"> San Buenaventura</option>
<option value="6050127"> San Juan</option>
<option value="6050128"> San Marcos</option>
<option value="6050129"> Tagual</option>
<option value="6050130"> Tortuga Abajo</option>
<option value="6050131"> Tres Ríos</option>
<option value="6050132"> Vista de Térraba.</option>
</select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>


             <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Dirección:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-tag"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="200 metros norte de los testigos de Jehova en Ciudad Cortes" required autofocus>
                    </div>
                </div>
            </div>
           
        </div>




    
   </div>






   <div class="list-group-item librePanelListGroupItem col-md-6">
      

        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Nombre comercial:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-tag"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="Studyacademic" required autofocus>
                    </div>
                </div>
            </div>
           
        </div>

          <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Tipo Identificación:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-credit-card"></i></div>
                        <select class="form-control input-sm valid" id="Emitter_EmitterType" name="Emitter.EmitterType" aria-invalid="false"><option selected="selected" value="01">Cédula Física</option>
<option value="02">Cédula Jurídica</option>
<option value="03">DIMEX</option>
<option value="04">NITE</option>
<option value="06">Cédula Extranjero</option>
</select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>

 <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Identificación:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" ><i class="fa fa-credit-card"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="604140385" readonly="">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Teléfono:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-credit-card"></i></div>
                       <input type="text" name="email" class="form-control" id="email"
                               value="+(506) 8710 96 82" >
                    </div>
                </div>
            </div>
       
        </div>

         <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">E-mail:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="glyphicon glyphicon-send"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="yoel1202@hotmail.com" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>

      <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Fax:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-credit-card"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="" placeholder="FAX" required autofocus>
                    </div>
                </div>
            </div>
       
        </div>
        
             
       

    
   </div>

 </div>
            <div class="panel-heading librePanelHeading">
                <div class="panel-title">
                    <b class="pull-right libreMenuIcon"></b>

                    <a data-toggle="collapse" href="#menu3PanelListGroup">
                        <span>Receptor</span>
                    </a>
                </div>
            </div>
           
                 <div class="list-group collapse in  col-md-12"  id="menu3PanelListGroup">
       <div class="list-group-item librePanelListGroupItem col-md-6">
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Razón social:</label>
            </div>
           
               <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon bt"><i class="fa fa-credit-card-alt"></i></span>
<input class="form-control input-sm" id="Receiver_ReceiverCode" name="Receiver.ReceiverCode" onblur="ActualizarReceptor();" placeholder="Identificación" type="text" value="">
                                        <input data-val="true" data-val-required="The ClientId field is required." id="Receiver_ClientId" name="Receiver.ClientId" type="hidden" value="00000000-0000-0000-0000-000000000000">
                                            <span class="input-group-btn">
                                                <a class="btn btn-sm btn-bac-o" data-ajax="true" data-ajax-begin="showProgress()" data-ajax-complete="hideProgress()" data-ajax-method="GET" data-ajax-mode="replace" data-ajax-success="showClients()" data-ajax-update="#ReceiverListContent" href="/Emission/FindClients?senderId=e02214e4-66aa-414a-a1b6-790d92067de7&amp;docType=01" title="Buscar Cliente"><i class="glyphicon glyphicon-search glyphicon glyphicon-white"></i></a>
                                            </span>
                                    </div>
                                    <span class="field-validation-valid" data-valmsg-for="Receiver.ReceiverCode" data-valmsg-replace="true" style="color:red;!important"></span>
                              
            </div>
        
        </div>

      




         <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Provincia:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-3 mr-sm-3 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-map-marker"></i></div>
     <select class="form-control input-sm" id="Emitter_Provincia" name="Emitter.Provincia" onchange="return LoadCantones('Emitter', null, null, false);"><option value="1">San José</option>
<option value="2">Alajuela</option>
<option value="3">Cartago</option>
<option value="4">Heredia</option>
<option value="5">Guanacaste</option>
<option selected="selected" value="6">Puntarenas</option>
<option value="7">Limón</option>
</select>
                    </div>
                </div>
            </div>
         
        </div>

        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Cantón:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-map-marker"></i>
                        </div>
                       <select class="form-control input-sm" id="Emitter_Canton" name="Emitter.Canton" onchange="return LoadDistritos('Emitter', null, null, false);"><option value="601">Puntarenas</option>
<option value="602">Esparza</option>
<option value="603">Buenos Aires</option>
<option value="604">Montes de Oro</option>
<option selected="selected" value="605">Osa</option>
<option value="606">Aguirre</option>
<option value="607">Golfito</option>
<option value="608">Coto Brus</option>
<option value="609">Parrita</option>
<option value="610">Corredores</option>
<option value="611">Garabito</option>
</select>
                    </div>
                </div>
            </div>
        </div>

               <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Distrito:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-3 mr-sm-3 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-map-marker"></i></div>
                     <select class="form-control input-sm" id="Emitter_Distrito" name="Emitter.Distrito" onchange="return LoadBarrios('Emitter', null, null, false);"><option selected="selected" value="60501">PUERTO CORTÉS</option>
<option value="60502">PALMAR</option>
<option value="60503">SIERPE</option>
<option value="60504">BAHÍA BALLENA</option>
<option value="60505">PIEDRAS BLANCAS</option>
<option value="60506">BAHÍA DRAKE</option>
</select>
                    </div>
                </div>
            </div>
         
        </div>


          <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Barrio:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-3 mr-sm-3 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-map-marker"></i></div>
                       <select class="form-control input-sm valid" id="Emitter_Barrio" name="Emitter.Barrio" aria-invalid="false"><option value="6050101"> Canadá</option>
<option value="6050102"> Cementerio</option>
<option value="6050103"> Cinco Esquinas</option>
<option value="6050104"> Precario</option>
<option value="6050105"> Pueblo Nuevo</option>
<option value="6050106"> Renacimiento</option>
<option selected="selected" value="6050107"> Yuca.</option>
<option value="6050108"> Balsar</option>
<option value="6050109"> Bocabrava</option>
<option value="6050110"> Bocachica</option>
<option value="6050111"> Cerrón</option>
<option value="6050112"> Coronado</option>
<option value="6050113"> Chontales</option>
<option value="6050114"> Delicias</option>
<option value="6050115"> Embarcadero</option>
<option value="6050116"> Fuente</option>
<option value="6050117"> Isla Sorpresa</option>
<option value="6050118"> Lindavista</option>
<option value="6050119"> Lourdes</option>
<option value="6050120"> Ojochal</option>
<option value="6050121"> Ojo de Agua</option>
<option value="6050122"> Parcelas</option>
<option value="6050123"> Pozo</option>
<option value="6050124"> Punta Mala</option>
<option value="6050125"> Punta Mala Arriba</option>
<option value="6050126"> San Buenaventura</option>
<option value="6050127"> San Juan</option>
<option value="6050128"> San Marcos</option>
<option value="6050129"> Tagual</option>
<option value="6050130"> Tortuga Abajo</option>
<option value="6050131"> Tres Ríos</option>
<option value="6050132"> Vista de Térraba.</option>
</select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                </div>
            </div>
        </div>


             <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Dirección:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-tag"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="200 metros norte de los testigos de Jehova en Ciudad Cortes" required autofocus>
                    </div>
                </div>
            </div>
           
        </div>




    
   </div>






   <div class="list-group-item librePanelListGroupItem col-md-6">
      

        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Nombre comercial:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-tag"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="Studyacademic" required autofocus>
                    </div>
                </div>
            </div>
           
        </div>

          <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Tipo Identificación:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-credit-card"></i></div>
                        <select class="form-control input-sm valid" id="Emitter_EmitterType" name="Emitter.EmitterType" aria-invalid="false"><option selected="selected" value="01">Cédula Física</option>
<option value="02">Cédula Jurídica</option>
<option value="03">DIMEX</option>
<option value="04">NITE</option>
<option value="06">Cédula Extranjero</option>
</select>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>

 <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Identificación:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" ><i class="fa fa-credit-card"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="604140385" readonly="">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Teléfono:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-credit-card"></i></div>
                       <input type="text" name="email" class="form-control" id="email"
                               value="+(506) 8710 96 82" >
                    </div>
                </div>
            </div>
       
        </div>

         <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">E-mail:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="glyphicon glyphicon-send"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="yoel1202@hotmail.com" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put e-mail validation error messages here -->
                        </span>
                </div>
            </div>
        </div>

      <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Fax:</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-credit-card"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                               value="" placeholder="FAX" required autofocus>
                    </div>
                </div>
            </div>
       
        </div>
        
             
       

    
   </div>
</div>

        </div>
    </div>


</body>
<style type="text/css">@media(min-width: 768px) {
  .field-label-responsive {
    padding-top: .5rem;
    text-align: right;
  }
}</style>
</html>
