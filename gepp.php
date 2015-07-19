		<? include "head.php" ?>
		<title>Luis Portillo: Gepp</title>
		<meta name="description" content="Trabajos de diseño web para Fujifilm" />
		<link rel="stylesheet" href="css/vendor/jquery.fancybox.css">
	</head>
	<body>
		<? include "nav.php" ?>
		<h2 id="tituloProyecto">Gepp</h2>
		<div class="center">
			<article class="introCuadro" id="descripcion">
				<h3>Descripción</h3>
				<p>Diseño de materiales para propaganda interna.<p>
				<h3>Fecha de proyecto</h3>
				<p>Enero 2013</p>
				<p id="textoPequeno">(A través de Grey Dot)</p>
			</article>
			<a rel="porta" href="img/portafolio/gepp/grandes/gepp_1.jpg" class="verMas" target="_blank">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/gepp/gepp_1.jpg" alt="Sanborns Vacaciones">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/gepp/grandes/gepp_2.jpg" class="verMas" target="_blank">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/gepp/gepp_2.jpg" alt="Sanborns Vacaciones">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/gepp/grandes/gepp_3.jpg" class="verMas" target="_blank">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/gepp/gepp_3.jpg" alt="Sanborns Vacaciones">
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