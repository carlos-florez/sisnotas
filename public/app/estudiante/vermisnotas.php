<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ESTUDIANTE</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../../bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../../../bootstrap/css/estilos.css">
</head>
<body>
	<div class="container" id="fondo">
		<header>
				<div class="row">
					<div class="col-md-10">
						<center>
							<img src="../../img/logo1.png" class="img-responsive" id="logo">
						</center>
					</div>
					<div class="col-md-2"><br>
						<a href="../../index.html"><label  class="control-label"><b>Cerrar sesión</b></label></a>
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
						<a id="nav" href="accesoestudiante.html" class="navbar-brand"><b>Sisnotas</b></a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-1">
						<ul class="nav navbar-nav">
							<li role="presentation" ><a id="nav" href="accesoestudiante.html"><b>Inicio</b></a></li>
							<li role="presentation" class="active"><a id="select"  href="vermisnotas.php"><b>Ver mis notas</b></a></li>
							<li role="presentation"><a id="nav" href="vermiinformacion.php"><b>Ver mi informacion</b></a></li>
							<li role="presentation"><a id="nav" href="actualizarmiinformacion.php"><b>Actualizar mi informacion</b></a></li>
							<li role="presentation"><a id="nav" href="cambiarpasswd.php"><b>Cambiar contraseña</b></a></li>
						</ul>
					</div>
			</div>

			</nav>
	</header>
			<b><p id="bienvenida">Bienvenid@ estudiante: </p></b>
	<div class="container" id="centro2">
		<div class="form-group">
				<center><label class="control-label">Grado: 10 - A  </label></center>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover ">
					
						<tr class="info">
						<th><center>#</center></th>
						<th><center>Asignatura</center></th>
						<th><center>1er periodo</center></th>
						<th><center>2do periodo</center></th>
						<th><center>3er periodo</center></th>
						<th><center>4to periodo</center></th>
						<th><center>Definitiva</center></th>
					</tr>
					<tr class="info">
						<td><center>1</th>
						<td><center>Matematicas</center></td>
						<td><center>3.0</center></td>
						<td><center>0</center></td>
						<td><center>0</center></td>
						<td><center>0</center></td>
						<td><center>0.75</center></td>
					</tr>
					<tr class="info">
						<td><center>2</th>
						<td><center>Lengua Castellana</center></td>
						<td><center>4.5</center></td>
						<td><center>0</center></td>
						<td><center>0</center></td>
						<td><center>0</center></td>
						<td><center>1.12</center></td>
					</tr>
					<tr class="info">
						<td><center>3</th>
						<td><center>Ciencias Naturales</center></td>
						<td><center>4.0</center></td>
						<td><center>0</center></td>
						<td><center>0</center></td>
						<td><center>0</center></td>
						<td><center>1</center></td>
					</tr>
				</table>
			</div>
	</div><br>
	<footer>
		<div class="container" id="footer"><center><b>Copyright © Todos los Derechos Reservados</b></center></div>
	</footer>
	</div>
<script src="../../../bootstrap/js/jquery.js"></script>
<script src="../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>