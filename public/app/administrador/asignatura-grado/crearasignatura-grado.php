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
						<a id="nav" href="../accesoadministrador.html" class="navbar-brand"><b>Sisnotas</b></a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-1">
						<ul class="nav navbar-nav">
							<li role="presentation"><a id="nav" href="../accesoadministrador.html"><b>Inicio</b></a></li>
							<li role="presentation"class="active"><a id="select"  href="crearasignatura-grado.php"><b>Crear asignatura-grado</b></a></li>
							<li role="presentation"><a id="nav" href="consultarasignatura-grado.php"><b>Consultar asignatura-grado</b></a></li>
							<li role="presentation"><a id="nav" href="actualizarasignatura-grado.php"><b>Modificar asignatura-grado</b></a></li>
							<li role="presentation"><a id="nav" href="estadoasignatura-grado.php"><b>Estado asignatura-grado</b></a></li>
						</ul>
					</div>
				</div>

			</nav>
	</header>
			<b><p id="bienvenida">Bienvenid@ administrador(a): Carlos Alberto Florez Torres</p></b>
	<div class="container" id="centro6">
	<form action="" class="form-horizontal">
		<center><label  class="control-label"><b>Crear asignatura-grado</b></label></center><br>
			<div class="form-group">
				<label for="nombre" class="control-label col-md-2"><b>Codigo:  </b></label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="passwd" name="nid" placeholder="codigo: ">
				</div>
				<label class="control-label col-md-2"><b>Asignatura: </b></label>
					<div class="col-md-4">
						<select class="form-control" name="" placeholder="Sexo:" id="option">
							<option value="sex">Seleccione el asignatura..</option>
							<option value="m">Matematica</option>
							<option value="f">Español</option>
						</select>
					</div>
			</div>
			<div class="form-group">
					<label class="control-label col-md-2"><b>Grado: </b></label>
					<div class="col-md-4">
						<select class="form-control" name="" placeholder="Sexo:" id="option">
							<option value="sex">Seleccione el grado..</option>
							<option value="m">8</option>
							<option value="f">9</option>
							<option value="m">10</option>
							<option value="f">11</option>
						</select>
					</div>
					<label class="control-label col-md-2"><b>Grupo: </b></label>
					<div class="col-md-4">
						<select class="form-control" name="" placeholder="Sexo:" id="option">
							<option value="sex">Seleccione el grupo..</option>
							<option value="m">A</option>
							<option value="f">B</option>
							<option value="m">C</option>
							<option value="f">D</option>
						</select>
					</div>
			</div>

			<br><br><br>
			
			<center>
				<button class="btn btn-info" aria-label="right Align">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar
				</button></center>

		</form><br>
	</div><br><br>
	<footer>
		<div class="container" id="footer"><center><b>Copyright © Todos los Derechos Reservados</b></center></div>
	</footer>
	</div>
<script src="../../../../bootstrap/js/jquery.js"></script>
<script src="../../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>