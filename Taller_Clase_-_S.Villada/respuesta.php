<!DOCTYPE html>
<html>
<head>
	<title>Respuesta</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
</head>
<body>

	<!-- Header -->
		<div id="header">
			<div id="nav-wrapper"> 
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">Homepage</a></li>
						<li><a href="right-sidebar.php">Formurio</a></li>
						<li><a href="no-sidebar.html">Contactanos</a></li>
					</ul>
				</nav>
			</div>
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Formulario</a></h1>
				</div>
			</div>
		</div>
	<!-- Header --> 	

<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">

					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Completado</h2>
								<span class="byline"><strong>Sus datos han sido enviados correctamente.</strong></span>
							</header>

							<div class="form_container">
								
								<?php 

									$nombre = $_GET["nombre"];
									$apellido = $_GET["apellido"];
									$telefono = $_GET["telefono"];
									$email = $_GET["email"];
									$asunto = $_GET["Asunto"];
								 								
									//Guardar Datos

									$datos_get = "nombre=".$_GET["nombre"];
									$datos_get .= "apellido=".$_GET["apellido"];			
									$datos_get .= "telefono=".$_GET["telefono"];			
									$datos_get .= "email=".$_GET["email"];			
									$datos_get .= "Asunto=".$_GET["Asunto"];

									//Validacion

									$error = "¡Ingresar Texto!";
									$error_num = "¡Ingresar Numero!";
									$error_email = "¡Dirección invalida!";

									if (!ctype_alpha($_GET["nombre"])) {
										$msjerror = "error_1=$error";
										}else{
											$nombre = $_GET["nombre"];
										}	

									if (!ctype_alpha($_GET["apellido"])) {
										$msjerror = "&error_2=$error";
										}else{
											$apellido = $_GET["apellido"];
										}

									if (!is_numeric($_GET["telefono"])) {
										$msjerror ="&error_3=$error_num";
										}else{
											$telefono = $_GET["telefono"];
										}

									if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
											$msjerror = "&error_4 = $error_email";
										}else{
											$email = $_GET["email"];	
										}

									if (isset($msjerror)) {
										header("location: right-sidebar.php?".$msjerror. "&".$datos_Get);
										}										 									
								?>


										<span class="form_text"><strong>Nombre(s).</strong></span>
										<input type="text" class="form_design" placeholder="<?php echo $nombre ?>" readonly="readonly">
									
										<span class="form_text"><strong>Apellido(s).</strong></span>
										<input type="text" class="form_design"  placeholder="<?php echo $apellido ?>" readonly="readonly">
															
										<span class="form_text"><strong>Numero de telefono.</strong></span>
										<input type="text" class="form_design"  placeholder="<?php echo $telefono ?>" readonly="readonly">
																		
										<span class="form_text"><strong>Direccion de correo.</strong></span>
										<input type="text" class="form_design"  placeholder="<?php echo $email ?>" readonly="readonly">
									

										<span class="form_text"><strong>Asunto</strong></span>
										<textarea class="form_text" placeholder="<?php echo $asunto ?>" readonly="readonly"></textarea>
								 

							</div>

						</section>
					</div>
				</div>
			</div>
		</div>
	<!-- /Main -->	

	<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;Lograriamos muchas más cosas si no pensáramos que es imposible. - Vince Lombardi&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Get in touch</h2>
						<span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
					</header>
					<ul class="contact">
						<li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
						<li class="active"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
						<li><a href="#" class="fa fa-dribbble"><span>Pinterest</span></a></li>
						<li><a href="#" class="fa fa-tumblr"><span>Google+</span></a></li>
					</ul>
				</section>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>

</body>
</html>