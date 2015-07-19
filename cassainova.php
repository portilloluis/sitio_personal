		<? include "head.php" ?>
		<title>Luis Portillo: Cassa Inova</title>
		<meta name="description" content="Portafolio Digital de trabajos de diseño gráfico y web de Luis Portillo" />
		<link rel="stylesheet" href="css/vendor/jquery.fancybox.css">
	</head>
	<body>
		<? include "nav.php" ?>
		<h2 id="tituloProyecto">Cassa Inova</h2>
		<div class="center">
			<article class="introCuadro" id="descripcion">
				<h3>Descripción</h3>
				<p>Elaboración de imagen corporativa y folleto promocional para inmobiliaria.<p>
				<h3>Fecha de proyecto</h3>
				<p>Junio 2012.</p>
				<p id="textoPequeno">(Proyecto personal)</p>
			</article>
			<a rel="porta" href="img/portafolio/cassa_inova/grandes/cassa_inova_1.jpg" class="verMas">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/cassa_inova/cassa_inova_1.jpg" alt="Cassa Inova Imagen corporativa">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/cassa_inova/grandes/cassa_inova_2.jpg" class="verMas">	
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/cassa_inova/cassa_inova_2.jpg" alt="Cassa Inova folleto">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/cassa_inova/grandes/cassa_inova_3.jpg" class="verMas">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/cassa_inova/cassa_inova_3.jpg" alt="Cassa Inova Hoja membretada">		
				</article>
			</a>
			<a rel="porta" href="img/portafolio/cassa_inova/grandes/cassa_inova_4.jpg" class="verMas">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/cassa_inova/cassa_inova_4.jpg" alt="Cassa Inova Tarjeta Presentación">	
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