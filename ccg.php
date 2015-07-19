		<? include "head.php" ?>
		<title>Luis Portillo: Centro Cultural Guadalupe</title>
		<meta name="description" content="Trabajos de diseño web para Fujifilm" />
		<link rel="stylesheet" href="css/vendor/jquery.fancybox.css">
	</head>
	<body>
		<? include "nav.php" ?>
		<h2 id="tituloProyecto">Centro Cultural Guadalupe</h2>
		<div class="center">
			<article class="introCuadro item" id="descripcion">
				<h3>Descripción</h3>
				<p>Planeación, diseño y armado de sitio web.<p>
				<h3>Fecha de proyecto</h3>
				<p>Mayo 2011</p>
				<p id="textoPequeno">(A través de Pick)</p>
			</article>
			<a href="http://www.centroculturalguadalupe.com.mx/" class="verMas" target="_blank">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/ccg/ccg_1.jpg" alt="Centro Cultura Guadalupe">
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