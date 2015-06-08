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
							<li role="presentation" class="active"><a id="select"  href="creargrado.php"><b>Crear grado</b></a></li>
							<li role="presentation"><a id="nav" href="consultargrado.php"><b>Consultar grado</b></a></li>
							<li role="presentation"><a id="nav" href="actualizargrado.php"><b>Modificar grado</b></a></li>
							<li role="presentation"><a id="nav" href="estadogrado.php"><b>Estado grado</b></a></li>
						</ul>
					</div>
				</div>

			</nav>
	</header>
			<b><p id="bienvenida">Bienvenid@ administrador(a): Carlos Alberto Florez Torres</p></b>
	<div class="container" id="centro6">
	<form action="" class="form-horizontal">
		<center><label  class="control-label"><b>Crear grado</b></label></center><br>
			<div class="form-group">
				<label for="nombre" class="control-label col-md-2"><b>Codigo:  </b></label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="passwd" name="nid" placeholder="Codigo: ">
				</div>
				<label class="col-md-2"><b>Num max estudiantes: </b></label>
				<div class="col-md-4">
					<input type="number" class="form-control" id="passwd" name="nombres" placeholder="Num max estudiantes: ">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2"><b>Grado:</b></label>
					<div class="col-md-4">
						<select class="form-control" name="" placeholder="Grado:" id="option">
							<option value="sex">Seleccione el grado..</option>
							<option value="m">transicion</option>
							<option value="f">1</option>
							<option value="f">2</option>
							<option value="f">3</option>
							<option value="f">4</option>
							<option value="f">5</option>
							<option value="f">6</option>
							<option value="f">7</option>
							<option value="f">8</option>
							<option value="f">9</option>
							<option value="f">10</option>
							<option value="f">11</option>
						</select>
					</div>
				<label class="control-label col-md-2"><b>Grupo: </b></label>
				<div class="col-md-4">
						<select class="form-control" name="" placeholder="Grado:" id="option">
							<option value="sex">Seleccione el grado..</option>
							<option value="m">A</option>
							<option value="f">B</option>
							<option value="f">C</option>
							<option value="f">D</option>
							<option value="f">E</option>
						</select>
					</div>
			</div>			
			<center>
				<button class="btn btn-info" aria-label="right Align">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar
				</button></center>

		</form><br>
	</div><br>
	<footer>
		<div class="container" id="footer"><center><b>Copyright © Todos los Derechos Reservados</b></center></div>
	</footer>
	</div>
<script src="../../../../bootstrap/js/jquery.js"></script>
<script src="../../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>