<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Clicletada</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Biking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- //bootstrap-css -->
<!-- css -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- //css -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<!-- //fonts -->
<script src="js/jquery-1.11.1.min.js"> </script>	
<script src="js/bootstrap.js"></script>    
<script type="text/javascript" src="webcamjs/webcam.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- Ingreso de grafico para conectar con base de datos -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['edades', 'menor a mayor'],
		  ['10 a 19',     5],
          ['20 a 29',     11],
          ['30 a 39',      15],
          ['40 a 49',  6],
          ['50 a 60', 3],
        ]);

        var options = {
          title: 'Grafico Etario de participantes'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>	
<!--fin de grafico jscrip-->
<script src="js/menu_jquery.js"></script>
<!--//pop-up-->	
</head>
<body>
	<!-- header-top -->
	<div class="header-top">
		<!-- container -->
		<div class="container">
			<div class="social">
				<ul>
					<li><a href="#" class="facebook"> </a></li>
					<li><a href="#" class="facebook twitter"> </a></li>
					<li><a href="#" class="facebook chrome"> </a></li>
					<li><a href="#" class="facebook dribbble"> </a></li>
				</ul>
			</div>
			<div class="details">
				<ul>
					<li><a href="mailto:@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info(at)example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+1)000 123 456789</li>
				</ul>
			</div>
			<div class="clearfix"> </div><div class="clearfix"> </div><div class="clearfix"> </div><div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //header-top -->
	<!-- header -->
	<div class="header">
		<!-- container -->
		<div class="container">
			<div class="header-bottom">
				<div class="logo">
					<h1><a href="index.html">Clicletada</a></h1>
				</div>
				
				<div class="clearfix"> </div>
			</div>

			<div class="top-nav">
				<nav class="navbar navbar-default">
					<div class="container">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav">
							<li class="home-icon"><a href="index.php?view=home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
							<li><a href="index.php?view=home" class="active">Inicio</a></li>
							<li><a href="index.php?view=home">Nosotros</a></li>
							<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a class="hvr-bounce-to-bottom" href="index.php?view=home">Gallery1</a></li>
									<li class="dropdown-submenu">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown-submenu" role="button" aria-haspopup="true" aria-expanded="false">Gallery2<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a tabindex="-1" href="index.php?view=home">Gallery4</a></li>
											<li><a href="index.php?view=home">Gallery5</a></li>
											 <li><a href="index.php?view=home">Gallery6</a></li>
										</ul>
									</li>
									<li><a class="hvr-bounce-to-bottom" href="index.php?view=home">Gallery3</a></li>           
								</ul>
							</li>	
							<li><a href="#news" class="scroll">Eventos</a></li>
							<li><a href="index.php?view=newregistration">Registro</a></li>
							<li><a href="index.php?view=home">Estadisticas</a></li>							
							<li><a href="index.php?view=loginadmin">Login</a></li>
							
							<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administración<span class="caret"></span></a>
								<ul class="dropdown-menu">									
									<li><a class="hvr-bounce-to-bottom" href="index.php?view=users">Usuarios</a></li>																	
									<li><a class="hvr-bounce-to-bottom" href="index.php?view=eventos">Eventos</a></li> 
									<li><a class="hvr-bounce-to-bottom" href="index.php?view=home">Paises</a></li>									
									<li><a class="hvr-bounce-to-bottom" href="index.php?view=home">Categorias</a></li> 
									<li><a class="hvr-bounce-to-bottom" href="index.php?view=home">Distancias</a></li>
									<li><a class="hvr-bounce-to-bottom" href="index.php?view=home">Grupos Sangre</a></li>
									<li><a class="hvr-bounce-to-bottom" href="index.php?view=home">Ciudades</a></li>
									<li><a class="hvr-bounce-to-bottom" href="index.php?view=home">Provincias</a></li>
									<li><a class="hvr-bounce-to-bottom" href="index.php?view=home">Regiones</a></li>
									<li><a class="hvr-bounce-to-bottom" href="index.php?view=home">Paises</a></li>								
								</ul>
							</li>
							
						</ul>
						
						<div class="clearfix"> </div>
					</div>	
				</nav>	
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //header -->
	
	<!-- //footer -->
	<?php 
	View::load("home");
	?>
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->	

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
</body>
</html>




