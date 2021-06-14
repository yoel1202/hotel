 <?php
// session_start();
// if (isset($_SESSION['username'])){
	
	
// }else{
// 	header('Location: login.php');
// }

   ?>
 <script src="js/jquery-2.0.3.js"></script>
 <link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
<link href="css/home.css" rel="stylesheet">

<script src="js/home.js"></script>
<script src="js/citas.js"></script>
<script src="js/calender.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>

<script type="text/javascript">
	$(document).ready(function(){
	var paso=true;
   $('#menu').click(function(){
 
 if (paso) {
       $("#navigation").removeClass("hidden-xs");
       paso=false;
   }else{
   	$("#navigation").addClass("hidden-xs");
   	paso=true;
   }
   });
});
</script>



</head>
<body>
	 <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="img/profile.jpg" class="hidden-xs hidden-sm img-circle">
                        <img src="img/profile.jpg" alt="merkery_logo" class="visible-xs visible-sm img-circle"
                        ">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                            <li  class="active"><a href="home.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Reservas</span></a></li>
                        <li><a href="prueba.php"><i class="fa fa-users" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Clientes</span></a></li>
                        <li><a href="#"><i class="fa fa-credit-card-alt" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Pagos</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Reportes</span></a></li>
                         <li ><a href="inventario.php"><i class="fa fa-truck" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Inventario</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Configuracion</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" id="menu" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Buscar" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>
                                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                    <li>
                                        <a href="#" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary">3</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>JS Krishna</span>
                                                    <p class="text-muted small">
                                                        me@jskrishna.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
                                                    <a href="cerrarsesion.php" class="view btn-sm active">Cerrar sesion</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                	<div id='wrap'>

<div id='calendar'></div>

<div style='clear:both'></div>
</div>
           
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>


<!------ Include the above in your HEAD tag ---------->





<!-- line modal -->
<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			<h3 class="modal-title" id="lineModalLabel">DATOS</h3>
		</div>
		<div class="modal-body">
			
            <!-- content goes here -->
			<form>
        <?php  
                      require_once("conexion.php"); 
  $conexion = new Conexion();
 
    $consulta =$conexion->consulta("SELECT id_habitacion,nombre,cantidad FROM tbl_habitaciones ");
                     
                     if (isset($consulta)) {
        echo '
              <select class="form-control col-sm-2" name="expiry-month" id="hora">
                <option>Numero de habitacion</option>';
        while ($row = $conexion->extraer_registro()) {
             echo ' 
                <option value="'.$row[0].'">'.$row[0].' '.$row[1].'('.$row[2].')'.'</option>
               
              
              
            ';
         } 
         echo '  </select>
             
        ';
     }
                     ?>
       
				 
         <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Fecha Entrada</label>
                <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            <input type="date" class="form-control fecha" id="fecha" placeholder="Date of Birth" />
                        </div>
                        </div>
                    </div>
                     <div class="form-group">
        <label class="col-sm-3 control-label" for="cvv">Fecha Salida</label>
                <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            <input type="date" class="form-control fecha" id="fecha" placeholder="Date of Birth" />
                        </div>
                        </div>
                    </div>
                      <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Check IN</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-5">
              <select class="form-control col-sm-2" name="expiry-month" id="hora">
                <option>Hora</option>
               <option value="01">01:00</option>
                <option value="02">02:00</option>
                <option value="03">03:00</option>
                <option value="04">04:00</option>
                <option value="05">05:00</option>
                <option value="06">06:00</option>
                <option value="07">07:00</option>
                <option value="08">08:00</option>
                <option value="09">09:00</option>
                <option value="10">10:00</option>
                <option value="11">11:00</option>
                 <option value="12">12:00</option>
                <option value="13">13:00</option>
                <option value="14">14:00</option>
                <option value="15">15:00</option>
                <option value="16">16:00</option>
                <option value="17">17:00</option>
                <option value="18">18:00</option>
                <option value="19">19:00</option>
                <option value="20">20:00</option>
                <option value="21">21:00</option>
                <option value="22">22:00</option>
                <option value="23">23:00</option>
                <option value="24">24:00</option>
              
              </select>
            </div>

     
          </div>
        </div>
      </div>
        <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Check OUT</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-5">
              <select class="form-control col-sm-2" name="expiry-month" id="hora">
                <option>Hora</option>
                <option value="01">01:00</option>
                <option value="02">02:00</option>
                <option value="03">03:00</option>
                <option value="04">04:00</option>
                <option value="05">05:00</option>
                <option value="06">06:00</option>
                <option value="07">07:00</option>
                <option value="08">08:00</option>
                <option value="09">09:00</option>
                <option value="10">10:00</option>
                <option value="11">11:00</option>
                 <option value="12">12:00</option>
                <option value="13">13:00</option>
                <option value="14">14:00</option>
                <option value="15">15:00</option>
                <option value="16">16:00</option>
                <option value="17">17:00</option>
                <option value="18">18:00</option>
                <option value="19">19:00</option>
                <option value="20">20:00</option>
                <option value="21">21:00</option>
                <option value="22">22:00</option>
                <option value="23">23:00</option>
                <option value="24">24:00</option>
              
              </select>
            </div>

     
          </div>
        </div>
      </div>


             <div class="form-group " >

        <label class="col-sm-3 control-label" for="card-holder-name">Nombre</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-holder-name" id="nombre" placeholder="Juan garcia ">
        </div>
         
      </div>
            <div class="form-group " >

        <label class="col-sm-3 control-label" for="card-holder-name">Cantidad </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="card-holder-name" id="apellidos" placeholder="3">
        </div>
         
      </div>
          
        <div class="form-group">
        <label class="col-sm-3 control-label" for="expiry-month">Reservacion</label>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-xs-5">
              <select class="form-control col-sm-2" name="expiry-month" id="hora">
                <option value="01">Booking</option>
                <option value="02">Expedia</option>
                <option value="03">Llamada local</option>
                <option value="04">Arbnb</option>
                <option value="05">Otro</option>
                
              
              </select>
            </div>

     
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-sm-3 control-label" for="motivo">Precio Total </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="motivo" id="motivo" placeholder="18.000.00">
        </div>
      </div>
      

                    
              <hr>
              <div  class="form-group">
              	
              </div>
            </form>

		</div>
		<div class="modal-footer">
			<div class="btn-group btn-group-justified" role="group" aria-label="group button">
				<div class="btn-group" role="group">
					<button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
				</div>
				<div class="btn-group btn-delete hidden" role="group">
					<button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
				</div>
				<div class="btn-group" role="group">
					<button type="button" id="guardarcita" class="btn btn-default btn-hover-green" data-action="save" role="button">Guardar</button>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>
</body>
</html>
