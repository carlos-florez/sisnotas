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
							<li role="presentation"><a id="nav" href="accesodocente.html"><b>Inicio</b></a></li>
							<li role="presentation"><a id="nav" href="subirnotas.php"><b>Subir notas</b></a></li>
							<li role="presentation"><a id="nav" href="vermiinformaciondoc.php"><b>Ver mi informacion</b></a></li>
							<li role="presentation" class="active"><a id="select"  href="actualizarmiinformaciondoc.php"><b>Actualizar mi informacion</b></a></li>
							<li role="presentation"><a id="nav" href="cambiarpasswddoc.php"><b>Cambiar contraseña</b></a></li>
						</ul>
					</div>
				</div>

			</nav>
	</header>
			<b><p id="bienvenida">Bienvenid@ docente: Carlos Alberto Florez Torres</p></b>
	<div class="container" id="centro2">
	<form action="" class="form-horizontal">
		<center><label  class="control-label"><b>Actualizar información docente</b></label></center><br>
			<div class="form-group">
				<label for="nombre" class="control-label col-md-1"><b>Nid:  </b></label>
				<div class="col-md-3">
					<input type="text" class="form-control" id="passwd" name="nid" placeholder="Nid: ">
				</div>
				<label class="control-label col-md-1"><b>Nombres: </b></label>
				<div class="col-md-3">
					<input type="text" class="form-control" id="passwd" name="nombres" placeholder="Nombres: ">
				</div>
				<label class="control-label col-md-1"><b>Apellidos: </b></label>
				<div class="col-md-3">
					<input type="text" class="form-control" id="passwd" name="apellidos" placeholder="Apellidos: ">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-1"><b>Sexo:  </b></label>
					<div class="col-md-3">
						<select class="form-control" name="" placeholder="Sexo:" id="option">
							<option value="sex">Seleccione el sexo..</option>
							<option value="m">Masculino</option>
							<option value="f">Femenino</option>
						</select>
					</div>
				<label class="col-md-1"><b>Fecha nacimiento:</b></label>
				<div class="col-md-3">
					<input type="date" class="form-control" id="passwd" name="datetimepicker" data-date-format="YYYY-MM-DD"id="fnaci" placeholder="Fecha nacimiento: ">
				</div>
				<label class="control-label col-md-1"><b>Dirección: </b></label>
				<div class="col-md-3">
					<input type="text" class="form-control" id="passwd" name="direccion" placeholder="Direccion: ">
				</div>
			</div>
			<div class="form-group">
				<label class=" col-md-1"><b>Correo:  </b></label>
				<div class="col-md-3">
					<input type="text" class="form-control" id="passwd" name="nomacudiente" placeholder="Nombre acudiente: ">
				</div>
				<label class=" col-md-1"><b>Telefono: </b></label>
				<div class="col-md-3">
					<input type="text" class="form-control" id="passwd" name="telacudiente" placeholder="Telefono acudiente: ">
				</div>
			</div>
			<br>
			<center>
				<button class="btn btn-info" aria-label="right Align">
				<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Actualizar
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