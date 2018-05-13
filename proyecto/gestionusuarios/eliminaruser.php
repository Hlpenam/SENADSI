<?php
    session_start();
    ob_start();
    include '../connect_db.php';

    if (isset($_SESSION['email'])) {?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>General</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="../estilos.css">
		<link rel="stylesheet" href="../assets/css/main.css" />
		
		
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="../Administrador.php" class="logo"><strong>Timiza ParkLot</strong> Conjunto Residensial</a>
									<ul class="icons">
										<li><a href="../cerrar_sesion.php" class="icon fa-instagram"><span class="label"></span>-SALIR-</a></li>
										<li><span class="label"></span>-ADMINISTRADOR-</li>
									</ul>
								</header>

							<!-- Content -->
						<section>
									<header class="main">
										<h1>Eliminar Usuarios</h1>
									</header>

						<form>
								 <div class="form-group">
								 	<!-- campos nombres-->
								 	<small id="nombreHelp" class="form-text text-muted">Buscar Ususario a Eliminar (Digite la Cedula)</small>
								 	<input type="text" class="form-control" id="exampleInputNombre1" aria-describedby="nombreHelp" placeholder="Ingrese los Nombres">

								 	<!-- boton Buscar  y eliminar-->
								 	<div class="form-check" style="margin-top: 1%; display: inline-block;">
								     <button type="submit" class="btn btn-primary">Buscar</button>
								      <button type="submit" class="btn btn-primary">Eliminar</button>
								  	</div>
								 	
								 	
								    
									<?php
								 /* <!--div class="form-group"> ingreso o acceso a carpetas para guardar
								    <label for="exampleInputFile">File input</label>
								    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
								    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
								  </div-->*/?>
								 
						</form>


					</section>

					<section>	
					<div class="table-responsive">
   						<table class="table table-small-font table-bordered table-striped table-responsive">
								  <thead>
								  	<h1 style="text-align: center;">Listados de Usuarios Eliminados</h1>
								    <tr>
								      <th scope="col">#</th>
								      <th scope="col">Nombres</th>
								      <th scope="col">Apellidos</th>
								      <th scope="col">Email</th>
								      <th scope="col">Cargo</th>
								      <th scope="col">Teléfono</th>
								      <th scope="col">Apartanemtno</th>
								      <th scope="col">Torre</th>
								      <th scope="col">Placa</th>
								     </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th scope="row">1</th>
								      <td>a</td>
								      <td>b</td>
								      <td>c</td>
								      <td>d</td>
								      <td>e</td>
								      <td>f</td>
								      <td>g</td>
								      <td>h</td>
								    </tr>
								    <tr>
								      <th scope="row">2</th>
								      <td>a</td>
								      <td>b</td>
								      <td>c</td>
								      <td>d</td>
								      <td>e</td>
								      <td>f</td>
								      <td>g</td>
								      <td>h</td>
								    </tr>
								    <tr>
								      <th scope="row">3</th>
								      <td>a</td>
								      <td>b</td>
								      <td>c</td>
								      <td>d</td>
								      <td>e</td>
								      <td>f</td>
								      <td>g</td>
								      <td>h</td>
								    </tr>
								  </tbody>
						</table>
					</div>
					</section>	
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							

							<!-- Menu -->
						<nav id="menu">
									<header class="major">
										<h2 style="color: black;">Menu</h2>
									</header>
									<ul>
										<li><a href="../Administrador.php">Inicio</a></li>
										<li>
											<span class="opener">Ingresos Usuarios</span>
											<ul>
												<li style="color: black;"><a href="crearuser.php">Crear</a></li>
												<li style="color: black;"><a href="eliminaruser.php">Eliminar</a></li>
												<li style="color: black;"><a href="modificaruser.php">Modificar</a></li>
												<li style="color: black;"><a href="listaruser.php">Listado</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Ingresos Vehiculos</span>
											<ul>
												<li style="color: black;"><a href="#">Crear</a></li>
												<li style="color: black;"><a href="#">Eliminar</a></li>
												<li style="color: black;"><a href="#">Modificar</a></li>
												<li style="color: black;"><a href="#">Listado</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Puntos de parqueo</span>
											<ul>
												<li style="color: black;"><a href="#">Visualizar Punto/parqueo</a></li>
												<li style="color: black;"><a href="#">Programar Punto/parqueo</a></li>
												
											</ul>
										</li>
										<li><a href="../elements.php">Programar Eventos</a></li>
										<li>
											<span class="opener">Informes</span>
											<ul>
												<li style="color: black;"><a href="#">Diario</a></li>
												<li style="color: black;"><a href="#">Semanal</a></li>
												<li style="color: black;"><a href="#">Mensual</a></li>
												
											</ul>
										</li>
										<li><a href="../generic.php">Quejas y Reclamos(PQR)</a></li>
										
										
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Destacados</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="../images/pic014.jpg" alt="" /></a>
											<p style="color: black;">Noticias Uno mes actual más Importantes del conjunto</p>
										</article>
										<article>
											<a href="#" class="image"><img src="../images/pic015.jpg" alt="" /></a>
										<p style="color: black;">Noticias Dos mes actual más Importantes del conjunto</p>
										</article>
										<article>
											<a href="#" class="image"><img src="../images/pic016.jpg" alt="" /></a>
										<p style="color: black;">Noticias Dos mes actual más Importantes del conjunto</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">Galeria</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Noticias Antiguas</h2>
									</header>
									<p>parrafos</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">administrador@sionwebsites.com</a></li>
										<li class="fa-phone">(+57) 317-264-6327</li>
										<li class="fa-home">Bogota, Colombia</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

			<script>
   $(function() {
      $('.table-responsive').responsiveTable({options});
   });
</script>

	</body>
</html>

<?php
    }
    else{
        echo'<script>window.location ="../index.php"</script>';

        }
 ?>
