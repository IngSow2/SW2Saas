<!DOCTYPE HTML>
<?php 
	$user=$_GET['id'];
	//$user=$_REQUEST['id'];
    //require_once("negocio/suscriptorN.php");
    //$suscriptorN=new SuscriptorN();
    require_once("../datos/contenidoD.php");
	$contenidoD=new ContenidoD();
	$contenido=$contenidoD->obtenerContenido($user);
	echo dirname(__FILE__)."/configurar/style.php";
 ?>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Recursos Humanos</title>
		<base href = "<? echo "http://".$_SERVER['SERVER_NAME']."/";?>" target="_top" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
		<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.scrollgress.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>
		<link href="../configurar/style.php" rel="stylesheet" type="text/css" />
	</head>
	<body class="left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html"><?php echo $_REQUEST['id']; ?><span></span></a></h1>
					BIENVENIDO
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-male"></span>
						<h2><strong><?php echo $contenido['titulo'] ?></strong></h2>
						<p><?php echo $contenido['subtitulo'] ?></p>
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<div class="row 150%">
								<div class="4u 12u(narrower)">

									<!-- Sidebar -->
										<div class="sidebar">
											<section>
												<header>
													<h3><?php echo $contenido['titulo3'] ?></h3>
												</header>
												<p><?php echo $contenido['contenido3'] ?></p>
												<footer>
													
												</footer>
											</section>

										</div>

								</div>
								<div class="8u 12u(narrower) important(narrower)">

									<!-- Content -->
										<div class="content">
											<section>
												<a href="#" class="image featured"><img height="300px" width="10px" src='<?php echo $contenido['imagen'] ?>' alt="" /></a>
												<header>
													<h3><?php echo $contenido['titulo2'] ?></h3>
												</header>
												<p><?php echo $contenido['contenido2'] ?></p>
											</section>
										</div>

								</div>
							</div>
						</section>

					<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="row">
								<div class="4u 12u(narrower)">

									<section>
										<header>
											<h3>TELEFONOS</h3>
										</header>
										<p><?php echo $contenido['telefono'] ?></p>
										<footer>
											<ul class="buttons">
												<li><span class="icon fa-phone"></span></li>
											</ul>
										</footer>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<header>
											<h3>DIRECCION</h3>
										</header>
										<p><?php echo $contenido['direccion'] ?></p>
										<footer>
											<ul class="buttons">
												<li><span class="icon fa-car"></span></li>
											</ul>
										</footer>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<header>
											<h3>CORREO</h3>
										</header>
										<p><?php echo $contenido['gmail'] ?></p>
										<footer>
											<ul class="buttons">
												<li><span class="icon fa-laptop"></span></li>
											</ul>
										</footer>
									</section>

								</div>
							</div>
						</section>

				</article>

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; recursos humanos</li><li>contactenos a atraves de las redes</li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			

	</body>
</html>