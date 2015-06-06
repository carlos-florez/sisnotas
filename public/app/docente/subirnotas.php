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
							<li role="presentation" class="active"><a id="select" href="subirnotas.php"><b>Subir notas</b></a></li>
							<li role="presentation"><a id="nav" href="vermiinformaciondoc.php"><b>Ver mi informacion</b></a></li>
							<li role="presentation"><a id="nav" href="actualizarmiinformaciondoc.php"><b>Actualizar mi informacion</b></a></li>
							<li role="presentation"><a id="nav" href="cambiarpasswddoc.php"><b>Cambiar contraseña</b></a></li>
						</ul>
					</div>
			</div>

			</nav>
	</header>
			<b><p id="bienvenida">Bienvenid@ docente: Carlos Alberto Florez Torres</p></b>
	<div class="container" id="centro2">
			
					<center><form action="" class="form-inline">
						<div class="form-group">

							<label for="nombre">Grado:</label>
								<select class="form-control" name="" id="option1">
									<option value="">10</option>
									<option value="">9</option>
									<option value="">7</option>
									<option value="">6</option>
									<option value="">5</option>
								</select>
						</div>
							
							<div class="form-group">
								<label for="nombre">Grupo:</label>
									<select class="form-control" name="" id="option1">
										<option value="">A</option>
										<option value="">B</option>
										<option value="">C</option>
										<option value="">D</option>
										<option value="">E</option>
									</select>
							</div>
							<div class="form-group">
								<label for="nombre">Asignatura:</label>
									<select class="form-control" name="" id="option1">
										<option value="">Matematicas</option>
										<option value="">informatica</option>
										<option value="">sociales</option>
										<option value="">naturales</option>
										<option value="">español</option>
									</select>
							</div>
							<div class="form-group">
								<button class="btn btn-info">Consultar</button>
							</div>
						</form></center>
					<br>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
						<tr class="info">
						<th><center>#</center></th>
						<th><center>Identificacion</center></th>
						<th><center>Estudiante</center></th>
						<th><center>1er periodo</center></th>
						<th><center>2do periodo</center></th>
						<th><center>3er periodo</center></th>
						<th><center>4to periodo</center></th>
						<th><center>Definitiva</center></th>
					</tr>
					<tr class="info">
						<td><center>1</td>
						<td><center>1067936689</td>
						<td><center>Florez Torres Carlos Alberto</center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 1: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 2: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 3:"></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 4: "></center></td>
						<td><center>0.75</center></td>
					</tr>
					<tr class="info">
						<td><center>2</th>
						<td><center>1067936784</td>
						<td><center>Paternina Rojas Jhonatan Alfonso</center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 1: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 2: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 3:"></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 4: "></center></td>
						<td><center>1.12</center></td>
					</tr>
					<tr class="info">
						<td><center>3</th>
						<td><center>1067936986</td>
						<td><center>Arteaga Fuentes Angie Paola</center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 1: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 2: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 3:"></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 4: "></center></td>
						<td><center>1</center></td>
					</tr>
					<!--<tr class="info">
						<td><center>4</th>
						<td><center>1067936986</td>
						<td><center>Arteaga Fuentes Angie Paola</center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 1: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 2: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 3:"></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 4: "></center></td>
						<td><center>1</center></td>
					</tr>
					<tr class="info">
						<td><center>5</td>
						<td><center>1067936986</td>
						<td><center>Arteaga Fuentes Angie Paola</center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 1: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 2: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 3:"></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 4: "></center></td>
						<td><center>1</center></td>
					</tr>
					<tr class="info">
						<td><center>6</th>
						<td><center>1067936986</td>
						<td><center>Arteaga Fuentes Angie Paola</center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 1: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 2: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 3:"></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 4: "></center></td>
						<td><center>1</center></td>
					</tr>
					<tr class="info">
						<td><center>7</td>
						<td><center>1067936986</td>
						<td><center>Arteaga Fuentes Angie Paola</center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 1: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 2: "></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 3:"></center></td>
						<td><center><input type="number" min="0" max="5" step="0.1" class="form-control" id="passwd" placeholder="nota 4: "></center></td>
						<td><center>1</center></td>
					</tr>-->
				</table>
			</div>
		</div>
		<center><nav>
			<ul class="pagination">
				<li class="disabled"><a href="#">&laquo;</a></li>
				<li class="active"><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">5</a></li>
				<li><a href="">&raquo;</a></li>
			</ul>
		</nav></center>
		<footer>
			<div class="container" id="footer"><center><b>Copyright © Todos los Derechos Reservados</b></center></div>
		</footer>
	</div>
<script src="../../../bootstrap/js/jquery.js"></script>
<script src="../../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>