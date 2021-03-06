		<? include "head.php" ?>
		<title>Luis Portillo: Digital Plus</title>
		<meta name="description" content="Portafolio Digital de trabajos de diseño gráfico y web de Luis Portillo" />
		<link rel="stylesheet" href="css/vendor/jquery.fancybox.css">
	</head>
	<body>
		<? include "nav.php" ?>
		<h2 id="tituloProyecto">Digital Plus</h2>
		<div class="center">
			<article class="introCuadro item" id="descripcion">
				<h3>Descripción</h3>
				<p>Diseño de papelería, sitio web y promocionales.<p>
				<h3>Fecha de proyecto</h3>
				<p>Mayo de 2011</p>
				<p id="textoPequeno">(A través de Pick)</p>
			</article>
			<a href="http://www.digital-plus.com.mx/" class="verMas" target="_blank">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/digital_plus/digital_plus_6.jpg" alt="Digital Plus: Sitio web">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/digital_plus/grandes/digital_plus_1.jpg" class="verMas">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/digital_plus/digital_plus_1.jpg" alt="Digital Plus: Papelería corporativa">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/digital_plus/grandes/digital_plus_2.jpg" class="verMas">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/digital_plus/digital_plus_2.jpg" alt="Digital Plus: Hoja membretada">	
				</article>
			</a>
			<a rel="porta" href="img/portafolio/digital_plus/grandes/digital_plus_3.jpg" class="verMas">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/digital_plus/digital_plus_3.jpg" alt="Digital Plus: Tarjeta de presentación">	
				</article>
			</a>
			<a rel="porta" href="img/portafolio/digital_plus/grandes/digital_plus_4.jpg" class="verMas">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/digital_plus/digital_plus_4.jpg" alt="Digital Plus: Sitio web">			
				</article>
			</a>
			<a rel="porta" href="img/portafolio/digital_plus/grandes/digital_plus_5.jpg" class="verMas">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/digital_plus/digital_plus_5.jpg" alt="Digital Plus: Bolsa promocional">		
				</article>
			</a>
		</div>
		<? include "footer.php" ?>
		<script src="js/vendor/jquery.fancybox.js"></script>
		<script>
			$(document).ready(function() {
				$(".verMas").fancybox();
			});
		</script>
	</body>
</html>