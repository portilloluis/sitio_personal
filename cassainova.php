		<? include "head.php" ?>
		<title>Luis Portillo: Cassa Inova</title>
		<meta name="description" content="Portafolio Digital de trabajos de diseño gráfico y web de Luis Portillo" />
		<link rel="stylesheet" href="css/vendor/jquery.fancybox.css">
	</head>
	<body>
		<? include "nav.php" ?>
		<h2 id="tituloProyecto">Cassa Inova</h2>
		<div class="center">
			<article class="introCuadro item" id="descripcion">
				<h3>Descripción</h3>
				<p>Elaboración de imagen corporativa y folleto promocional para inmobiliaria.<p>
				<h3>Fecha de proyecto</h3>
				<p>Junio 2012.</p>
				<p id="textoPequeno">(Proyecto personal)</p>
			</article>			
			<article class="introCuadro item">
				<img class="imgProyecto" src="img/portafolio/cassa_inova/cassa_inova_1.jpg" alt="Cassa Inova Imagen corporativa">
				<a rel="porta" href="img/portafolio/cassa_inova/grandes/cassa_inova_1.jpg" class="verMas">
					<span class="icon-signos-01">
					</span>
				</a>
			</article>
			<article class="introCuadro item">
				<img class="imgProyecto" src="img/portafolio/cassa_inova/cassa_inova_2.jpg" alt="Cassa Inova folleto">
				<a rel="porta" href="img/portafolio/cassa_inova/grandes/cassa_inova_2.jpg" class="verMas">
					<span class="icon-signos-01">
					</span>
				</a>
			</article>
			<article class="introCuadro item">
				<img class="imgProyecto" src="img/portafolio/cassa_inova/cassa_inova_3.jpg" alt="Cassa Inova Hoja membretada">
				<a rel="porta" href="img/portafolio/cassa_inova/grandes/cassa_inova_3.jpg" class="verMas">
					<span class="icon-signos-01">
					</span>
				</a>
			</article>
			<article class="introCuadro item">
				<img class="imgProyecto" src="img/portafolio/cassa_inova/cassa_inova_4.jpg" alt="Cassa Inova Tarjeta Presentación">
				<a rel="porta" href="img/portafolio/cassa_inova/grandes/cassa_inova_4.jpg" class="verMas">
					<span class="icon-signos-01">
					</span>
				</a>
			</article>
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