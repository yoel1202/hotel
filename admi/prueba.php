 <script src="js/jquery-2.0.3.js"></script>
 <link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
<link href="css/home.css" rel="stylesheet">
<link href="css/paciente.css" rel="stylesheet">

<script src="js/paciente.js"></script>
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
                        <li ><a href="home.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Citas</span></a></li>
                        <li class="active" ><a href="#"><i class="fa fa-users" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Pacientes</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Administrador</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Reportes</span></a></li>
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
                                   <!--  <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li> -->
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
                	
   
    <hr>
   
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Pacientes</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtros</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Cedula" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nombre" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Apellido" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Telefono" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Expediente" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                      require_once("conexion.php"); 
  $conexion = new Conexion();
 
    $consulta =$conexion->consulta("SELECT cedula,nombre,apellido,telefono,correo FROM tbl_paciente ");
                     
                     if (isset($consulta)) {
        
        while ($row = $conexion->extraer_registro()) {
             echo '<tr>
                        <td>'.$row[0].'</td>
                        <td>'.$row[1].'</td>
                        <td>'.$row[2].'</td>
                        <td>'.$row[3].'</td>
                        <td><a href="expediente.php?cedula='.$row[0].'">Ver</a> </td>
                    </tr>';
         } 
     }
                     ?>
                    <tr>
                        <td>604140385</td>
                        <td>Juan</td>
                        <td>Rodriguez hurtado</td>
                        <td>87271312</td>
                        <td><a href="#">Ver</a> </td>
                    </tr>
                    <tr>
                        <td>608900640</td>
                        <td>Miguel</td>
                        <td>Morales Angulo</td>
                        <td>89872354</td>
                        <td><a href="#">Ver</a> </td>
                    </tr>
                    <tr>
                        <td>602340876</td>
                        <td>Jeison</td>
                        <td>Torres Solano</td>
                        <td>62998765</td>
                        <td><a href="#">Ver</a> </td>
                    </tr>
                </tbody>
            </table>
        </div>
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






</body>
</html>
