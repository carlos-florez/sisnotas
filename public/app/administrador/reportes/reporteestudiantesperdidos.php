<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ADMINISTRADOR</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../../../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../../bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../../../../bootstrap/css/estilos.css">
</head>
<body>
	<div class="container" id="fondo">
		<header>
			<div class="row">
				<div class="col-md-10">
					<center>
						<img src="../../../img/logo1.png" class="img-responsive" id="logo">
					</center>
				</div>
				<div class="col-md-2"><br>
					<a href="../../../index.html"><label  class="control-label"><b>Cerrar sesión</b></label></a>
				</div>
			</div>
	<nav class="navbar navbar-default" id="x">
				<div class="container" id="nav">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a id="nav" href="accesodocente.html" class="navbar-brand"><b>Sisnotas</b></a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-1">
						<ul class="nav navbar-nav">
							<li role="presentation"><a id="nav" href="../accesoadministrador.html"><b>Inicio</b></a></li>
							<li role="presentation"><a id="nav" href="reportesdenotas.php"><b>Reporte de notas</b></a></li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="nav" role="button">Registro actual <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="registroactualestudiante.php">Estudiante</a></li>
									<li><a href="registroactualdocente.php">Docente</a></li>
									<li><a href="registroactualgrado.php">Grado</a></li>
									<li><a href="registroactualasignatura.php">Asignatura</a></li>
								</ul>
							</li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="nav" role="button">Registro historico <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="registrohistoricoestudiante.php">Estudiante</a></li>
									<li><a href="registrohistoricodocente.php">Docente</a></li>
									<li><a href="registrohistoricogrado.php">Grado</a></li>
									<li><a href="registrohistoricoasignatura.php">Asignatura</a></li>
								</ul>
							</li>
							<li role="presentation" class="active"><a id="select" href="reporteestudiantesperdidos.php"><b>Estudiantes perdidos</b></a></li>
							<li role="presentation"><a id="nav" href="reportecargadocente.php"><b>Cargas docente</b></a></li>
						</ul>
					</div>
				</div>

			</nav>
	</header>
			<b><p id="bienvenida">Bienvenid@ administrador(a): Carlos Alberto Florez Torres</p></b>
	<div class="container" id="centro2">
		<center><form action="" class="form-inline">
					<label class="control-label col-md-1"><b>Grado: </b></label>
					<div class="col-md-2">
						<select class="form-control" name="" placeholder="Sexo:" id="option">
							<option value="sex">elija grado..</option>
							<option value="codigo">6</option>
							<option value="codigo">7</option>
							<option value="codigo">8</option>
							<option value="codigo">9</option>
							<option value="codigo">10</option>
							<option value="codigo">11</option>
						</select>
					</div>
					<label class="control-label col-md-1"><b>Grupo: </b></label>
					<div class="col-md-2">
						<select class="form-control" name="" placeholder="Sexo:" id="option">
							<option value="sex">elija grupo..</option>
							<option value="codigo">A</option>
							<option value="codigo">B</option>
							<option value="codigo">C</option>
							<option value="codigo">D</option>
							<option value="codigo">E</option>
						</select>
					</div>
					<label class="control-label col-md-1"><b>Periodo: </b></label>
					<div class="col-md-2">
						<select class="form-control" name="" placeholder="Sexo:" id="option">
							<option value="sex">elija periodo..</option>
							<option value="codigo">1er Periodo</option>
							<option value="codigo">2do Periodo</option>
							<option value="codigo">3er Periodo</option>
							<option value="codigo">4to Periodo</option>
							<option value="codigo">Definitiva</option>
						</select>
					</div>
					<div class="form-group">
						<div class="col-md-2">
							<button class="btn btn-info"><span class=" glyphicon glyphicon-search " aria-hidden="true"></span> Consultar</button>
						</div>
					</div>
					<label class="control-label col-md-1"><b></b></label>
				</form></center>
			<center><label  class="control-label"><b>Lista de estudiantes que perdieron tres o mas materias</b></label></center><br>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover ">
					
						<tr class="info">
						<th><center><b>IDENTIFICACION: </b></center></th>
						<th><center>NOMBRES: </center></th>
						<th><center><b>APELLIDOS: </b></center></th>
						<th><center>MAT</center></th>
						<th><center>NAT</center></th>
						<th><center>SOC</center></th>
						<th><center>ETI</center></th>
						<th><center>DEM</center></th>
						<th><center>ESP</center></th>
						<th><center>ING</center></th>
						<th><center>QUI</center></th>
						<th><center>GEO</center></th>
						<th><center>EST</center></th>
						<th><center>INF</center></th>
						<th><center>FIS</center></th>
						<th><center>EDU</center></th>
						
					</tr>
					<tr class="info">
						<td><center>1067936788</center></td>
						<td><center>Jhonatan Alfonso</center></td>
						<td><center>Paternina Rojas</center></td>
						<td><center>2.0</center></td>
						<td><center>4.0</center></td>
						<td><center>3.5</center></td>
						<td><center>4.0</center></td>
						<td><center>2.9</center></td>
						<td><center>3.4</center></td>
						<td><center>2.5</center></td>
						<td><center>2.7</center></td>
						<td><center>4.0</center></td>
						<td><center>3.9</center></td>
						<td><center>3.8</center></td>
						<td><center>3.2</center></td>
						<td><center>4.5</center></td>
						
					</tr>
					<tr class="info">
						<td><center>1067936799</center></td>
						<td><center>Andrea Carolina</center></td>
						<td><center>Lopez Mendoza</center></td>
						<td><center>2.0</center></td>
						<td><center>4.0</center></td>
						<td><center>3.5</center></td>
						<td><center>4.0</center></td>
						<td><center>2.9</center></td>
						<td><center>3.4</center></td>
						<td><center>2.5</center></td>
						<td><center>2.7</center></td>
						<td><center>4.0</center></td>
						<td><center>3.9</center></td>
						<td><center>3.8</center></td>
						<td><center>3.2</center></td>
						<td><center>4.5</center></td>
					</tr>
					<tr class="info">

						<td><center>1067936689</center></td>
						<td><center>Carlos Alberto</center></td>
						<td><center>Florez torres</center></td>
						<td><center>2.0</center></td>
						<td><center>4.0</center></td>
						<td><center>3.5</center></td>
						<td><center>4.0</center></td>
						<td><center>2.9</center></td>
						<td><center>3.4</center></td>
						<td><center>2.5</center></td>
						<td><center>2.7</center></td>
						<td><center>4.0</center></td>
						<td><center>3.9</center></td>
						<td><center>3.8</center></td>
						<td><center>3.2</center></td>
						<td><center>4.5</center></td>
						
					</tr>
				</table>
			
		</div>
	</div><br>
	<footer>
		<div class="container" id="footer"><center><b>Copyright © Todos los Derechos Reservados</b></center></div>
	</footer>
	</div>
<script src="../../../../bootstrap/js/jquery.js"></script>
<script src="../../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>