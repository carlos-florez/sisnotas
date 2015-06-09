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
							<li class="dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="select"  role="button">Registro actual <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="registroactualestudiante.php">Estudiante</a></li>
									<li><a href="registroactualdocente.php">Docente</a></li>
									<li><a id="select" href="registroactualgrado.php">Grado</a></li>
									<li><a href="registroactualasignatura.php">Asignatura</a></li>
								</ul>
							</li>
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" id="nav" data-toggle="dropdown" role="button">Registro historico <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="registrohistoricoestudiante.php">Estudiante</a></li>
									<li><a href="registrohistoricodocente.php">Docente</a></li>
									<li><a href="registrohistoricogrado.php">Grado</a></li>
									<li><a href="registrohistoricoasignatura.php">Asignatura</a></li>
								</ul>
							</li>
							<li role="presentation"><a id="nav" href="registrohistorico.php"><b>Registro historico</b></a></li>
							<li role="presentation"><a id="nav" href="reporteestudiantesperdidos.php"><b>Estudiantes perdidos</b></a></li>
							<li role="presentation"><a id="nav" href="reportecargadocente.php"><b>Cargas docente</b></a></li>
						</ul>
					</div>
				</div>

			</nav>
	</header>
			<b><p id="bienvenida">Bienvenid@ administrador(a): Carlos Alberto Florez Torres</p></b>
	<div class="container" id="centro2">
		<center><label for="">Registro actual de Docentes</label></center>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover ">
					
						<tr class="info">
						<th><center># </center></th>
						<th><center>IDENTIFICACION: </center></th>
						<th><center>NOMBRES: </center></th>	
						<th><center>APELLIDOS: </center></th>
						<th><center>SEXO: </center></th>	
						<th><center>FECHA NACIMIENTO: </center></th>
						<th><center>DIRECCION: </center></th>	
						<th><center>CORREO: </center></th>
						<th><center>TELEFONO: </center></th>						
					</tr>
					<tr class="info">
						<td><center>1</center></td>
						<td><center>1067936689</center></td>
						<td><center>Jhonatan Alfonso </center></td>
						<td><center>Paternina Rojas</center></td>
						<td><center>Masculino </center></td>
						<td><center>02/12/1995 </center></td>
						<td><center>Mz 22 lt 79 </center></td>
						<td><center>jhonatan@gmail.com</center></td>
						<td><center>3128499876</center></td>					
					</tr>
					<tr class="info">
						<td><center>2</center></td>
						<td><center>1067936012</center></td>
						<td><center>Laura Vanessa </center></td>
						<td><center>Conde Medina</center></td>
						<td><center>Femenino </center></td>
						<td><center>10/04/1992</center></td>
						<td><center>Mz 16 lt 14 </center></td>
						<td><center>laura@gmail.com</center></td>
						<td><center>3126789876</center></td>	
					</tr>
					<tr class="info">
						<td><center>3</center></td>
						<td><center>1067936013</center></td>
						<td><center>Kelly </center></td>
						<td><center>Villareal</center></td>
						<td><center>Femenino </center></td>
						<td><center>20/07/1995 </center></td>
						<td><center>Mz 54 lt 14 </center></td>
						<td><center>kelly@gmail.com</center></td>
						<td><center>3013456543</center></td>	
					</tr>
					<tr class="info">
						<td><center>4</center></td>
						<td><center>1067936014</center></td>
						<td><center>Anllelith </center></td>
						<td><center>Hernandez Gomez</center></td>
						<td><center>Femenino </center></td>
						<td><center>22/09/1993</center></td>
						<td><center>Mz 15 lt 10 </center></td>
						<td><center>anllelith@gmail.com</center></td>
						<td><center>3000988765</center></td>	
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