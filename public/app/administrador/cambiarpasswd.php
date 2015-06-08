<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>DOCENTE</title>
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
						<a id="nav" href="accesodocente.html" class="navbar-brand"><b>Sisnotas</b></a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-1">
						<ul class="nav navbar-nav">
							<li role="presentation"><a id="nav" href="accesoadministrador.html"><b>Inicio</b></a></li>
							<li role="presentation"><a id="nav" href="docente/creardocente.php"><b>Docente</b></a></li>
							<li role="presentation"><a id="nav" href="estudiante/crearestudiante.php"><b>Estudiante</b></a></li>
							<li role="presentation"><a id="nav" href="asignatura/crearasignatura.php"><b>Asignatura</b></a></li>
							<li role="presentation"><a id="nav" href="grado/creargrado.php"><b>Grado</b></a></li>
							<li role="presentation"><a id="nav" href="asignatura-grado/crearasignatura-grado.php"><b>Asignatura-grado</b></a></li>
							<li role="presentation"><a id="nav" href="asignatura-docente/crearasignatura-docente.php"><b>Asignatura-Docente</b></a></li>
							<li role="presentation"><a id="nav" href="reporte/reporteestudiante.php"><b>Reportes</b></a></li>
							<li role="presentation" class="active"><a id="select" href="cambiarpasswd.php"><b>Cambiar pass</b></a></li>
						</ul>
					</div>
				</div>

			</nav>
	</header>
			<b><p id="bienvenida">Bienvenid@ administrador(a): Carlos Alberto Florez Torres</p></b>
	<div class="container" id="centro">
		<form action="" class="form-horizontal">
		<center><label  class="control-label"><b>Cambie su contraseña administrador(a) </b></label></center><br>
			<div class="form-group">
				<label for="passwd" class="control-label col-xs-12 col-md-4"><b>Contraseña Actual:</b></label>
				<div class="col-xs-12 col-md-8">
					<input type="password" class="form-control" id="passwd" placeholder="contraseña actual: ">
				</div>
			</div>
			<div class="form-group">
				<label for="passwd" class="control-label col-xs-12 col-md-4"><b>Contraseña Nueva:</b></label>
				<div class="col-xs-12 col-md-8">
					<input type="password" class="form-control" id="passwd" placeholder="contraseña nueva: ">
				</div>
			</div>
			
			<div class="form-group">
				<label for="passwd" class="control-label col-xs-12 col-md-4"><b>Confirme Contraseña:</b></label>
				<div class="col-xs-12 col-md-8">
					<input type="password" class="form-control" id="passwd" placeholder="confirme contraseña nueva: ">
				</div>
			</div><br>
			<center>
				<button class="btn btn-info" aria-label="right Align">
					<span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Cambiar contraseña 
				</button></center>
		</form>
	</div><br>
	<footer>
		<div class="container" id="footer"><center><b>Copyright © Todos los Derechos Reservados</b></center></div>
	</footer>
	</div>
<script src="../../../bootstrap/js/jquery.js"></script>
<script src="../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>