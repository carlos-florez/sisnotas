<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>DOCENTE</title>
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
							<li role="presentation"><a id="nav" href="crearasignatura.php"><b>Crear asignatura</b></a></li>
							<li role="presentation"><a id="nav" href="consultarasignatura.php"><b>Consultar asignatura</b></a></li>
							<li role="presentation"class="active"><a id="select" href="actualizarasignatura.php"><b>Modificar asignatura</b></a></li>
							<li role="presentation"><a id="nav" href="estadoasignatura.php"><b>Estado asignatura</b></a></li>
						</ul>
					</div>
				</div>

			</nav>
	</header>
			<b><p id="bienvenida">Bienvenid@ administrador(a): Carlos Alberto Florez Torres</p></b>
	<div class="container" id="centro6">
	<center><form action="" class="form-inline">
						<div class="form-group">

							<label for="nombre">Codigo ó nombre:</label>
							<input type="text" class="form-control" id="bus" name="nombres" placeholder="Codigo ó nombre: ">
						</div>
							<div class="form-group">
								<button class="btn btn-info"><span class=" glyphicon glyphicon-search " aria-hidden="true"></span> Consultar</button>
							</div>
						</form></center>
	<form action="" class="form-horizontal">
		<center><label  class="control-label"><b>Modificar asignatura</b></label></center><br>
			<div class="form-group">
				<label for="nombre" class="control-label col-md-1"><b>Codigo:  </b></label>
				<div class="col-md-5">
					<input type="text" class="form-control" id="passwd" name="nid" placeholder="codigo: ">
				</div>
				<label class="control-label col-md-1"><b>Nombre: </b></label>
				<div class="col-md-5">
					<input type="text" class="form-control" id="passwd" name="nombres" placeholder="Nombres: ">
				</div>	
			</div>
				<label for="nombre" class="control-label col-md-2"><b></b></label>	<br>	
			<center>
				<button class="btn btn-info" aria-label="right Align">
				<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Actualizar
				</button></center>

		</form><br>
	</div><br><br><br><br>
	<footer>
		<div class="container" id="footer"><center><b>Copyright © Todos los Derechos Reservados</b></center></div>
	</footer>
	</div>
<script src="../../../../bootstrap/js/jquery.js"></script>
<script src="../../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>