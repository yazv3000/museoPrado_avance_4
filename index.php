<?php

// 1. Variable de tipo fecha
$hoy = date('d/m/y');

// 2. Variable arreglo con propiedades
$secciones = array(
	"hero"=>"Inicio", 
	"info"=>"Información", 
	"gallery"=>"Pinturas", 
	"escult"=>"Esculturas", 
	"faq"=>"Preguntas", 
	"entradas"=>"Entradas"
);

// 3. Variable texto
$nombre_museo = "Museo del Prado";

// 4. Variable texto
$ciudad_museo = "Madrid";

// 5. Variable numérica - año de construccion
$anio_construccion = 1785;

// 6. Variable numérica - año de apertura
$anio_apertura = 1819;

// 7. Variable arreglo
$edificios_museo = array(
	"el Claustro de los Jerónimos",
	"el edificio Villanueva",
	"el Casón del Buen Retiro",
	"el edificio administrativo",
	"la Sala de los Reinos"
);

// 8. Variable numérica - cantidad de pinturas
$cant_pinturas = 7500;

// 9. Variable numérica - cantidad de dibujos
$cant_dibujos = 8000;

// 10. Variable numérica - cantidad de esculturas
$cant_escult = 1000;

// 11-16. Variables tipo objeto (pinturas)
$pintura_01 = (object)["nombre"=>"Las meninas",					"autor"=>"Diego Velázquez", 	"anio"=>1656, "estilo"=>"Barroco"];
$pintura_02 = (object)["nombre"=>"El 3 de mayo de Madrid",		"autor"=>"Francisco de Goya", 	"anio"=>1814, "estilo"=>"Romanticismo"];
$pintura_03 = (object)["nombre"=>"El jardín de las delicias",	"autor"=>"El Bosco", 			"anio"=>1500, "estilo"=>"Flamenco"];
$pintura_04 = (object)["nombre"=>"El descendimiento de la cruz","autor"=>"Rogier van der Weyden","anio"=>1436, "estilo"=>"Gótico"];
$pintura_05 = (object)["nombre"=>"El cabellero de la mano pecho","autor"=>"El Greco", 			"anio"=>1580, "estilo"=>"Manierismo"];
$pintura_06 = (object)["nombre"=>"David vencedor de Goliat",	"autor"=>"Caravaggio", 			"anio"=>1600, "estilo"=>"Barroco"];

// 17-21. Variables tipo objeto (esculturas)
$escult_01 = (object)["nombre"=>"Carlos V y el Furor", "siglo"=>"XVI", "materia"=>"Bronce"];
$escult_02 = (object)["nombre"=>"Marco Bruto", "siglo"=>"XVI", "materia"=>"Mármol"];
$escult_03 = (object)["nombre"=>"Venus", "siglo"=>"XVI", "materia"=>"Mármol blanco"];
$escult_04 = (object)["nombre"=>"Marco Aurelio", "siglo"=>"II", "materia"=>"Mármol blanco"];
$escult_05 = (object)["nombre"=>"Isabel II, velada", "siglo"=>"XIX", "materia"=>"Mármol de Carrara"];

// 22. Variable arreglo con propiedades
$testimonios = array(
	"Álvaro Arévalo"=>"Uno de los mejores museos del Mundo. Visita imprescindible en la ciudad como lo es el Louvre en París o el British en Londres. Don Bosco, Velázquez o Goya son algunos de los pintores que podemos ver con sus mejores obras, además de la escuela italiana y la escuela flamenca.", 
	"Maria Gamarra"=>"Encantador. Para los fanáticos de los museos es un lugar al que ir seguro si se visita Madrid. <br> Buenos accesos, comodidades y, por supuesto, unas obras de arte que no tienen precio. <br> ¡Es excelente!", 
	"Francisco de Pedro"=>"Imprescindible visita cultural. Un viaje en el tiempo y en la historia que no tiene comparación en España. Si te gusta el arte necesitas unas cuantas horas para disfrutar de uno de los mejores museos del mundo.", 
);

// 23-30 Variables - horarios
$horario_apertura_ls = '10:00 am';
$horario_cierre_ls = '8:00 pm';

$horario_apertura_df = '10:00 am';
$horario_cierre_df = '5:00 pm';

$horario_apertura_ls_gratuito = '6:00 pm';
$horario_cierre_ls_gratuito = '8:00 pm';

$horario_apertura_df_gratuito = '3:00 pm';
$horario_cierre_df_gratuito = '5:00 pm';

// 31. Variable arreglo con propiedades (redes sociales)
$url_rsocial = array(
	"fb"=>"https://www.facebook.com/museonacionaldelprado", 
	"twitter"=>"https://twitter.com/museodelprado", 
	"instagram"=>"https://www.instagram.com/museoprado/", 
	"yt"=>"https://www.youtube.com/user/museodelprado", 
);


// 31-32. Variables de texto
$author = "Y. Zapata";
$url_github = "https://github.com/yazv3000";

?>

<!doctype html>
<html lang="en">
<head>
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Museo del Prado</title>
	
	<meta name="description" content="Avance 4 - Taller de Programación Web: Uso de variables en PHP">
    <meta name="author" content="Y. Zapata Vargas">

	<!-- Styles -->
	<link rel='stylesheet' href='assets/css/bootstrap.min.css'>
	<link rel='stylesheet' href='assets/css/animate.min.css'>
	<link rel='stylesheet' href="assets/css/font-awesome.min.css"/>
	<link rel='stylesheet' href="assets/css/style.css"/>
	
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
			
	<!--Icono-->
	<link rel="shortcut icon" type="image/svg" href="assets/img/icon.svg">
</head>

<body>
		
	<!-- Hero Background -->
	<div id="parallax"></div>

	<!--====================================================
							HEADER
	======================================================-->
	<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
	<div class="container">
		<!-- Navbar -->
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<!-- Logo -->					  <!--*********** Uso de la variable $secciones ***********-->
			<a href="#hero" class="navbar-brand"><i class="fa fa-university"></i>&nbsp;<?php echo $nombre_museo; ?></a>
		</div>
		<!-- Start Navigation -->
		<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
		
		<!--*********** Uso de la variable $secciones ***********-->
		<ul class="nav navbar-nav">
			
			<li><a href="#hero">		<?php echo $secciones["hero"]; ?></a></li>
			<li><a href="#informacion">	<?php echo $secciones["info"]; ?></a></li>
			<li><a href="#gallery">		<?php echo $secciones["gallery"]; ?></a></li>
			<li><a href="#esculturas">	<?php echo $secciones["escult"]; ?></a></li>
			<li><a href="#faq">			<?php echo $secciones["faq"]; ?></a></li>
			<li><a href="#contactarea">	<?php echo $secciones["entradas"]; ?></a></li>
		</ul>
		</nav>
	</div>
	</header>

	<!--====================================================
						SECCIÓN MUSEO
	======================================================-->
	<section id="hero" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="herotext">										<!--*********** Uso de la variable $nombre_museo ***********-->
					<h1 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.1s"><?php echo strtoupper($nombre_museo); ?></h1>	
					<p>
						<a href="#gallery" class="btn btn-default btn-lg wow fadeInLeft mb-15" role="button"> Ver Pinturas </a> &nbsp; 
						<a href="#esculturas" class="btn btn-default btn-lg wow fadeInRight mb-15" role="button"> Ver esculturas </a>
					</p>
				</div>
			</div>
			<div class="col-md-5">
				<div id="reloj">
					<div id="fecha">
						<!--*********** Uso de la variable $hoy ***********-->
						<?php echo "Hoy es $hoy"; ?>
					</div>

					<div id="time">
						00 : 00 : 00 PM
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>

	<div class="separador_secciones"></div>

	<!--====================================================
					SECCIÓN INFORMACIÓN GENERAL
	======================================================-->

	<section id="informacion" class="parallax section">
		<div class="wrapsection">
			<div class="parallax-overlay"></div>
			<div class="counter">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-xl-6">
							<div class="image-container">
								<img class="img-fluid" src="assets/img/info.jpg" alt="alternative">
							</div> 
						</div>
						<div class="col-lg-7 col-xl-6">
							<div class="maintitle">
								<h3 class="section-title mb-30">Información General</h3>
							</div>
							<div class="text-container">
								<!--*********** Uso de la variable $anio_construccion ***********-->
								<p> El Museo Nacional del Prado, es un edificio neoclásico del siglo XVIII de <?php echo $ciudad_museo?>, España, que fue diseñado por el arquitecto Juan de Villanueva, el edificio se empezó a construir en <?php echo $anio_construccion?> .</p>
								
								<p> Abrió sus puertas al público por primera vez en <?php echo $anio_apertura?>. Con el devenir del tiempo este edificio sufrió varias ampliaciones. En el año 2007 se diseñó un nuevo edificio para albergar la creciente colección de las obras de arte.
									En la actualidad el museo comprende cinco edificios: 
									<!--******** Uso de la variable arreglo $edificios_museo ********-->
										<?php echo  $edificios_museo[0], ", ",  
													$edificios_museo[1], ", ",  
													$edificios_museo[2], ", ",  
													$edificios_museo[3], " y ",  
													$edificios_museo[4], ".";  
										?>
								</p>
								
								<!-- Contadores -->			<!--******** Uso de la variables $cant_pinturas,  ********-->
								<div id="counter">
									<div class="cell">
										<div class="counter-value number-count" data-count=<?php echo $cant_pinturas; ?>>1</div>
										<div class="counter-info">Pinturas</div>
									</div>
									<div class="cell">
										<div class="counter-value number-count" data-count=<?php echo $cant_dibujos; ?>>1</div>
										<div class="counter-info">Dibujos</div>
									</div>
									<div class="cell">
										<div class="counter-value number-count" data-count=<?php echo $cant_escult; ?>>1</div>
										<div class="counter-info">Esculturas</div>
									</div>
								</div>
							</div>     
						</div> 
					</div> 
				</div> 
			</div>
		</div>
	</section>

	<!--====================================================
					MÁS SOBRE EL MUSEO
	======================================================-->
	<section id="conocemas_video" class="whitecolor parallax section">
		<div class="wrapsection">
			<div class="container">
			<div class="row">
				<div class="col-md-12 sol-sm-12">
					<div class="maintitle">			
						<h3 class="section-title justtitle">
							<!--*********** Uso de la variable $nombre_museo ***********-->
							Conoce más sobre el <?php echo $nombre_museo; ?>
						</h3>

						<p class="lead bottom0">	<!--*********** Uso de la variable $ciudad_museo ***********-->
							El museo es una de las atracciones más visitadas de <?php echo $ciudad_museo?>, donde se aprecian obras maestras de artista españoles y europeos.
						</p>
					</div>
				</div>
				<div class="video_wrap text-center">
					<div class="video_icon">
						<a class="popup-video video_button" href="https://www.youtube.com/watch?v=tvWcsUbgJ1I">
							Ver video
						</a>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

	<!--====================================================
					SECCIÓN GALERÍA DE PINTURAS
	======================================================-->
	<section id="gallery" class="parallax section">
		<div class="wrapsection">
			<div class="parallax-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 sol-sm-12">
						<div class="maintitle">
							<h3 class="section-title"><?php echo $secciones["gallery"]; ?></h3>		<!-- Pinturas -->
							<p class=" lead mb-70 wow flipInX">
								Se ha dicho que el <?php echo $nombre_museo; ?> es un museo de pintores, pues posee los mayores conjuntos de El Bosco, Tiziano, El Greco, Rubens, Velázquez o Goya, a veces con más de un centenar obras. 
							</p>
						</div>
					</div>
					<!--*********** Uso de las variable objeto - pinturas ***********-->
					<div class="col-md-6 col-lg-4">
						<a href="assets/img/pinturas/las_meninas_01.jpg" title="Las meninas -  Diego Velázquez">
							<img src="assets/img/pinturas/las_meninas_01.jpg" alt="" class="image-responsive">
							<div class="description">
								<span class="caption"><b><?php echo $pintura_01->nombre; ?></b></span> 
								<span class="camera"><i class="fa fa-picture-o"></i></span>
								<p>
									<br><b>Autor: </b><?php echo $pintura_01->autor; ?>
									<br><b>Año: </b><?php echo $pintura_01->anio; ?>
									<br><b>Estilo: </b><?php echo $pintura_01->estilo; ?>
								</p>
							</div>			
						</a>
					</div>
					<div class="col-md-6 col-lg-4">
						<a href="assets/img/pinturas/3_mayo_02.jpg" title="El 3 de mayo en Madrid - Francisco de Goya">
						<img src="assets/img/pinturas/3_mayo_02.jpg" alt="" class="image-responsive">
							<div class="description">
								<span class="caption"><b><?php echo $pintura_02->nombre; ?></b></span> 
								<span class="camera"><i class="fa fa-picture-o"></i></span>
								<p>
									<br><b>Autor: </b><?php echo $pintura_02->autor; ?>
									<br><b>Año: </b><?php echo $pintura_02->anio; ?>
									<br><b>Estilo: </b><?php echo $pintura_02->estilo; ?>
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-6 col-lg-4">
						<a href="assets/img/pinturas/jardin_delicias_03.jpg" title="El jardín de las delicias - El Bosco">
						<img src="assets/img/pinturas/jardin_delicias_03.jpg" alt="" class="image-responsive">
							<div class="description">
								<span class="caption"><b><?php echo $pintura_03->nombre; ?></b></span> 
								<span class="camera"><i class="fa fa-picture-o"></i></span>
								<p>
									<br><b>Autor: </b><?php echo $pintura_03->autor; ?>
									<br><b>Año: </b><?php echo $pintura_03->anio; ?>
									<br><b>Estilo: </b><?php echo $pintura_03->estilo; ?>
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-6 col-lg-4">
						<a href="assets/img/pinturas/el_descendimiento_04.jpg" title="El descendimiento de la cruz - Rogier van der Weyden">
						<img src="assets/img/pinturas/el_descendimiento_04.jpg" alt="" class="image-responsive">
							<div class="description">
								<span class="caption"><b><?php echo $pintura_04->nombre; ?></b></span> 
								<span class="camera"><i class="fa fa-picture-o"></i></span>
								<p>
									<br><b>Autor: </b><?php echo $pintura_04->autor; ?>
									<br><b>Año: </b><?php echo $pintura_04->anio; ?>
									<br><b>Estilo: </b><?php echo $pintura_04->estilo; ?>
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-6 col-lg-4">
						<a href="assets/img/pinturas/el_caballero_mano_05.jpg" title="El caballero de la mano en el pecho - El Greco">
						<img src="assets/img/pinturas/el_caballero_mano_05.jpg" alt="" class="image-responsive">
							<div class="description">
								<span class="caption"><b><?php echo $pintura_05->nombre; ?></b></span> 
								<span class="camera"><i class="fa fa-picture-o"></i></span>
								<p>
									<br><b>Autor: </b><?php echo $pintura_05->autor; ?>
									<br><b>Año: </b><?php echo $pintura_05->anio; ?>
									<br><b>Estilo: </b><?php echo $pintura_05->estilo; ?>
								</p>
							</div>
						</a>
					</div>
					<div class="col-md-6 col-lg-4">
						<a href="assets/img/pinturas/david_vencedor_06.jpg" title="David vencedor de Goliat - Caravaggio">
						<img src="assets/img/pinturas/david_vencedor_06.jpg" alt="" class="image-responsive">
							<div class="description">
								<span class="caption"><b><?php echo $pintura_06->nombre; ?></b></span> 
								<span class="camera"><i class="fa fa-picture-o"></i></span>
								<p>
									<br><b>Autor: </b><?php echo $pintura_06->autor; ?>
									<br><b>Año: </b><?php echo $pintura_06->anio; ?>
									<br><b>Estilo: </b><?php echo $pintura_06->estilo; ?>
								</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!--====================================================
					MÁS SOBRE EL MUSEO
	======================================================-->
	<section id="arte_mprado" class="whitecolor parallax section">
		<div class="wrapsection">
			<div class="container">
			<div class="row">
				<div class="col-md-12 sol-sm-12">
					<div class="maintitle">
						<h3 class="section-title justtitle">Arte</h3>
						<p class="lead bottom0">
							A través del arte se transmite emociones y vivencias del autor a nuestra realidad.
						</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
		
	<!--====================================================
					SECCIÓN DE ESCULTURAS
	======================================================-->
	<section id="esculturas" class="parallax section">
	<div class="wrapsection">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Title -->
					<div class="maintitle">
						<h3 class="section-title">Esculturas</h3>
						<p class="lead">
							<!--*********** Uso de la variable $nombre_museo ***********-->
							El <?php echo $nombre_museo; ?> conserva un amplio número de obras que forman el conjunto de esculturas clásicas.
						</p>
					</div>
				</div>

				<!--*********** Uso de las variable objeto - esculturas ***********-->

				<div class="col-md-4 col-sm-6">
					<div class="service-box wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
						<img src="assets/img/escultura_artes/carlosv.jpg" alt="">
						<div class="description">
							<span class="caption"><b><?php echo $escult_01->nombre; ?></b><?php echo " (s. ", $escult_01->siglo, ")"; ?></span> 
						</div>
						<button type="button" class="btn btn-info btn-md"><a href="https://www.museodelprado.es/coleccion/obra-de-arte/carlos-v-y-el-furor/271cd3bf-243d-4c17-b0c7-83716cc9d230" target="_blank">
							Más información</a></button>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
						<img src="assets/img/escultura_artes/marco_bruto_02.jpg" alt="" height="190px">
						<div class="description">
						<span class="caption"><b><?php echo $escult_02->nombre; ?></b><?php echo " (s. ", $escult_02->siglo, ")"; ?></span> 
						</div>
						<button type="button" class="btn btn-info btn-md"><a href="https://www.museodelprado.es/coleccion/obra-de-arte/marco-bruto/e28ab6c0-da14-4755-ac4b-f3908e32e446" target="_blank">
							Más información</a></button>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
						<img src="assets/img/escultura_artes/venus_03.jpg" alt="" height="190px">
						<div class="description">
						<span class="caption"><b><?php echo $escult_03->nombre; ?></b><?php echo " (s. ", $escult_03->siglo, ")"; ?></span> 
						</div>
						<button type="button" class="btn btn-info btn-md"><a href="https://www.museodelprado.es/coleccion/obra-de-arte/venus/051a69cc-a574-43e6-a436-26407a59128a" target="_blank">
							Más información</a></button>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
						<img src="assets/img/escultura_artes/marco_aurelio_04.jpg" alt="" height="190px">
						<div class="description">
						<span class="caption"><b><?php echo $escult_04->nombre; ?></b><?php echo " (s. ", $escult_04->siglo, ")"; ?></span> 
						</div>
						<button type="button" class="btn btn-info btn-md"><a href="https://www.museodelprado.es/coleccion/obra-de-arte/busto-del-emperador-marco-aurelio/67ba183a-bb80-4640-84b1-690a5401b2a0" target="_blank">
							Más información</a></button>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
						<img src="assets/img/escultura_artes/isabel_ii_velada_05.jpg" alt="" height="190px">
						<div class="description">
						<span class="caption"><b><?php echo $escult_05->nombre; ?></b><?php echo " (s. ", $escult_05->siglo, ")"; ?></span> 
						</div>
						<button type="button" class="btn btn-info btn-md"><a href="https://www.museodelprado.es/coleccion/obra-de-arte/isabel-ii-velada/d51dff32-4043-4630-9539-d2d8e528222e" target="_blank">
							Más información</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>

	<!--====================================================
					SECCIÓN DE TESTIMONIOS
	======================================================-->
	<section id="testimonio_slider" class="parallax section">
		<div class="wrapsection">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="Carousel" class="carousel slide">
							<ol class="carousel-indicators">
								<li data-target="#Carousel" data-slide-to="0" class="active"></li>
								<li data-target="#Carousel" data-slide-to="1"></li>
								<li data-target="#Carousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">

								<!--*********** Uso de la variable $testimonios ***********-->

								<div class="item active">
									<blockquote>
										<p class="lead"><?php echo $testimonios["Álvaro Arévalo"]?></p>
										<small>Álvaro Arévalo</small>
									</blockquote>
								</div>
								<div class="item">
									<blockquote>
										<p class="lead"><?php echo $testimonios["Maria Gamarra"]?></p>
										<small>Maria Gamarra</small>
									</blockquote>
								</div>
								<div class="item">
									<blockquote>
										<p class="lead"><?php echo $testimonios["Francisco de Pedro"]?></p>
										<small>Francisco de Pedro</small>
									</blockquote>
								</div>
							</div>
							<a class="left carousel-control" href="#Carousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#Carousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--====================================================
				SECCIÓN PREGUNTAS FRECUENTES
	======================================================-->
	<section id="faq" class="section">
		<div class="wrapsection">
			<div class="container">
				<div class="row">
					<div class="col-md-12 sol-sm-12">
						<div class="maintitle">
							<h3 class="section-title mb-70">Preguntas frecuentes</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="faq-block wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s">
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											¿Cuál es el horario de apertura del <?php echo $nombre_museo; ?>? </a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse">		
										<div class="panel-body">								<!--****** Uso de la variables $nombre_museo y horarios ******-->
											El <?php echo $nombre_museo; ?> está abierto:
											<br> Lunes a sábado - <?php echo $horario_apertura_ls, " a ", $horario_cierre_ls; ?>
											<br> Domingos y días festivos - <?php echo $horario_apertura_df, " a ", $horario_cierre_df; ?>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											¿Es seguro visitar el <?php echo $nombre_museo; ?>? </a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">
											Es seguro visitar el <?php echo $nombre_museo; ?> ya que las medidas de seguridad como el distanciamiento social se siguen estrictamente en el museo.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											¿Cuáles son las instalaciones disponibles en el <?php echo $nombre_museo; ?>? </a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											Entre los servicios que ofrece el <?php echo $nombre_museo; ?> están las audioguías, los cambiadores de bebés y guardarropa. Por favor, tenga en cuenta que algunas de estas instalaciones pueden no estar disponibles hasta nuevo aviso.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="faq-block wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
											¿Puedo acceder al <?php echo $nombre_museo; ?> de forma gratuita? </a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse">
										<div class="panel-body">									<!--****** Uso de la variables $nombre_museo y horarios ******-->
											Los visitantes pueden disfrutar de acceso libre al <?php echo $nombre_museo; ?>:
											<br> Lunes a sábado - <?php echo $horario_apertura_ls_gratuito, " a ", $horario_cierre_ls_gratuito; ?>
											<br> Domingos y días festivos - <?php echo $horario_apertura_df_gratuito, " a ", $horario_cierre_df_gratuito; ?>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
											¿Qué incluye la entrada al <?php echo $nombre_museo; ?>? </a>
										</h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse">
										<div class="panel-body">
											Dependiendo de la entrada al <?php echo $nombre_museo; ?>, disfrutarás de una acceso sin colas así como de acceso al museo con todo incluido.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
											¿Tengo que reservar mis entradas para con antelación? </a>
										</h4>
									</div>
									<div id="collapseSix" class="panel-collapse collapse">
										<div class="panel-body">
											Debido a la pandemia de COVID-19, es necesario reservas tus entradas en línea. Es recomendable que reserves tus entradas al menos con un día de antelación.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--====================================================
				SECCIÓN DE RESERVA DE ENTRADAS
	======================================================-->
	<section id="contactarea" class="parallax section">
		<div class="wrapsection">
			<div class="parallax-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="maintitle">
							<h3 class="section-title">Entradas</h3>
							<p class="lead">
								El <?php echo $nombre_museo; ?> reabrió sus puertas al público el 6 de junio de 2020. Reserva tu ticket llenando el siguiente formulario.
							</p>
						</div>
						<form id="contact" action="process.php" name="contact" method="post" class="text-left">
							<fieldset>
								<div class="row">
									<div class="col-md-4 wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
										<label for="name">Nombre<span class="required">*</span></label>
										<input type="text" name="name" id="name" size="30" value="" required/>
									</div>
									<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
										<label for="email">Email<span class="required">*</span></label>
										<input type="text" name="email" id="email" size="30" value="" required/>
									</div>
									<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
										<label for="phone">Celular</label>
										<input type="text" name="phone" id="phone" size="30" value=""/>
									</div>
								</div>
								<div class="wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="1.5" style="margin-top:15px;">
									<label for="message">Mensaje<span class="required">*</span></label>
									<textarea name="message" id="message" required></textarea>
								</div>
								<div class="wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s">
									<input id="submit" type="submit" name="submit" value="Enviar"/>
								</div>
							</fieldset>
						</form>
						<div id="success">		
							<p class="contactalert">
								¡Su mensaje fue enviado exitosamente! En breve se reservarán sus entradas
							</p>			
						</div>
						<div id="error">			
							<p class="contactalert">
								Algo salió mal, intente actualizar y enviar el formulario nuevamente.
							</p>			
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--====================================================
				FOOTER & CRÉDITOS TEMPLATE
	======================================================-->
	<section id="credits" class="text-center">
		<span class="social wow zoomIn">
		<a href=<?php echo $url_rsocial["fb"]; ?> target="_blank"><i class="fa fa-facebook"></i></a>
		<a href=<?php echo $url_rsocial["twitter"]; ?> target="_blank"><i class="fa fa-twitter"></i></a>
		<a href=<?php echo $url_rsocial["instagram"]; ?> target="_blank"><i class="fa fa-instagram"></i></a>
		<a href=<?php echo $url_rsocial["yt"]; ?> target="_blank"><i class="fa fa-youtube"></i></a>
		</span><br/>
		Copyright &copy; <a href=<?php echo $url_github; ?> target="_blank"><?php echo $author; ?></a> 
		<br/>Template By <i class="fa fa-heart"></i> WowThemes.Net
	</section>
	
	<!--====================================================
						SCRIPTS
	======================================================-->

	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.scrollTo.min.js"></script>
	<script src="assets/js/jquery.localScroll.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/validate.js"></script>
	<script src="assets/js/common.js"></script>
	<script src="assets/js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>