		<? include "head.php" ?>
		<title>Luis Portillo: Dra. Beatriz Gurrola</title>
		<meta name="description" content="Trabajos de diseño web para Fujifilm" />
		<link rel="stylesheet" href="css/vendor/jquery.fancybox.css">
	</head>
	<body>
		<? include "nav.php" ?>
		<h2 id="tituloProyecto">Dra. Beatriz Gurrola</h2>
		<div class="center">
			<article class="introCuadro item" id="descripcion">
				<h3>Descripción</h3>
				<p>Planeación, diseño y armado de sitio web.<p>
				<h3>Fecha de proyecto</h3>
				<p>Mayo 2011</p>
				<p id="textoPequeno">(A través de Pick)</p>
			</article>			
			<article class="introCuadro item">
				<img class="imgProyecto" src="img/portafolio/dra_gurrola/dra_gurrola_1.jpg" alt="Centro Cultura Guadalupe">
				<a href="http://www.beatrizgurrola.com/" class="verMas" target="_blank">
					<span class="icon-signos-06">
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