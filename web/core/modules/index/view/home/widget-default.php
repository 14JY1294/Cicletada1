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
	<!-- banner -->
	<div class="banner">
		<!-- container -->
		<div class="container">
			<div class="banner-top-grid">
				<script src="js/responsiveslides.min.js"></script>
				<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					// Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
								$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
							}
						 });				
					});
				</script>
				<div  id="top" class="callbacks_container-wrap">
					<ul class="rslides" id="slider3">
						<li>
							<div class="banner-info">
								<h3>Lorem ipsum dolor consectetur</h3>
								<h5>molestie elit condi</h5>
								<p>Sed dignissim augue ut ex cursus, vel molestie elit condimentum.  mattis nec ipsum. Morbi quis tincidunt urna, eget laoreet felis. Curabitur ut pulvinar dui. mattis nec ipsum. Morbi quis tincidunt urna, eget laoreet felis. Curabitur ut pulvinar dui. Nunc tortor dui, mattis sit amet ultricies sed, feugiat quis odio. Ut metus justo, placerat at semper et</p>
								<div class="banner-buttons">
									<div class="banner-button white-button">
										<a href="#">Click</a>
									</div>
									<div class="banner-button">
										<a href="#">More</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3>Vel molestie elit condimentum</h3>
								<h5>molestie elit condi</h5>
								<p> Morbi quis sed dignissim augue ut ex cursus, vel molestie elit condimentum.  mattis nec ipsum. tincidunt urna, eget laoreet felis. Curabitur ut pulvinar dui. mattis nec ipsum. Morbi quis tincidunt urna, eget laoreet felis,  quis odio. Ut metus justo, placerat at semper et Curabitur ut pulvinar dui. Nunc tortor dui, mattis sit amet ultricies sed</p>
								<div class="banner-buttons">
									<div class="banner-button white-button">
										<a href="#">Click</a>
									</div>
									<div class="banner-button">
										<a href="#">More</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<h3>Curabitur ut pulvinar duicursus</h3>
								<h5>molestie elit condi</h5>
								<p>Molestie sed dignissim augue ut ex cursus, vel elit condimentum.  mattis nec ipsum. Morbi quis tincidunt urna, eget laoreet felis, eget laoreet felis. Curabitur ut pulvinar dui. Nunc tortor dui, mattis sit amet ultricies sed, feugiat quis odio. Ut metus justo, placerat at semper et Curabitur ut pulvinar dui. mattis nec ipsum. Morbi quis tincidunt urna</p>
								<div class="banner-buttons">
									<div class="banner-button white-button">
										<a href="#">Click</a>
									</div>
									<div class="banner-button">
										<a href="#">More</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>	
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	<!-- welcome -->
	
	<div class="welcome">
		<!-- container -->
		<div class="container">
			<div class="welcome-info">
				<h2>Particia con nosotros</h2>
				<div id="piechart" ></div>
				<h5>Llevamos registro de todos nuestros participantes: Registrate para participar con nosotros, tenemos muchos aupicadores que estaran encantado de que lleves su camiseta.</h5>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //welcome -->
	<!-- slider -->
	<div class="slider">
		<div class="arrival-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="single.html"><img src="images/s1.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/s4.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/s3.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/s2.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/s4.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="single.html"><img src="images/s3.jpg" alt=""/>
					 </a>
				 </li>
				</ul>
				<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
		</div>
	</div>
	<!-- //slider -->
	<!-- news -->
	<div class="news" id="news">
		<!-- container -->
		<div class="container">
			<div class="news-info">
				<h3>News &amp; Events</h3>
			</div>
			<div class="news-grids">
				<div class="col-md-6 news-grid">
					<div class="news-grid-left">
						<div class="col-md-3 date">
							<p>23</p>
							<span>June</span>
						</div>
						<div class="col-md-9 date-info">
							<a href="single.html">Fusce scelerisque sit amet justo vitae</a>
							<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="news-grid-left">
						<div class="col-md-3 date">
							<p>09</p>
							<span>May</span>
						</div>
						<div class="col-md-9 date-info">
							<a href="single.html">Fusce scelerisque sit amet justo vitae</a>
							<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
							<div class="news-button">
								<a href="single.html">More</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 news-grid">
					<div class="news-grid-img">
						<img src="images/6.png" alt="" />
					</div>
					<div class="news-grid-right">
						<h5>Fusce scelerisque sit amet justo vitae</h5>
						<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
						<div class="news-button">
							<a href="single.html">More</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //news -->
	<!-- news-bottom -->
	<div class="news-bottom">
		<!-- container -->
		<div class="container">
			<div class="news-bottom-info">
				<h3>Join the 2015 CYCLE tour</h3>
				<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet In eget sem consectetur, condimentum velit nec, rhoncus sapien. Cras sit amet ullamcorper dui. Ut euismod lacinia elit sed ullamcorper. Integer mollis neque sed dictum pretium. Integer eget elementum sapien. dolor id egestas. Nulla leo purus, facilisis non cursus ut Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
				<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet In eget sem consectetur, condimentum velit nec, rhoncus sapien. Cras sit amet ullamcorper dui. Ut euismod lacinia elit sed ullamcorper. Integer mollis neque sed dictum pretium. Integer eget elementum sapien. dolor id egestas. Nulla leo purus.</p>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //news-bottom -->
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-6 footer-right">
					<h5>Stay in Touch</h5>
					<form>
						<input type="text" placeholder="Email address" required="">
						<input type="submit" value="Subscribe">
					</form>
					<div class="footer-right-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3771907.975236311!2d-2.09480472072984!3d39.07355564363949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1436857347604" frameborder="0" style="border:0" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="col-md-6 footer-left">
					<div class="f-social">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="facebook twitter"> </a></li>
							<li><a href="#" class="facebook chrome"> </a></li>
							<li><a href="#" class="facebook dribbble"> </a></li>
						</ul>
					</div>
					<div class="f-address">
						<p class="text">Eiusmod Tempor inc ,St Dolore Place,Kingsport 56777</p>
						<p class="number">+1 234 567 8901</p>
					</div>
					<div class="copyright">
						<p>© 2015 Biking . All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //footer -->
	
</body>
</html>

