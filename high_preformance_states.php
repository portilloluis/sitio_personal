		<? include "head.php" ?>
		<title>Luis Portillo: High Preformance States</title>
		<meta name="description" content="Portafolio Digital de trabajos de diseño gráfico y web de Luis Portillo" />
		<link rel="stylesheet" href="css/vendor/jquery.fancybox.css">
	</head>
	<body>
		<? include "nav.php" ?>
		<h2 id="tituloProyecto">High Preformance States</h2>
		<div class="center">
			<article class="introCuadro item" id="descripcion">
				<h3>Descripción</h3>
				<p>Armado de sitio web con HTML, CSS, Javascript y responsive design.<p>
				<h3>Fecha de proyecto</h3>
				<p>Noviembre de 2013 - Enero de 2014</p>
				<p id="textoPequeno">(Proyecto personal)</p>
			</article>			
			<article class="introCuadro item">
				<img class="imgProyecto" src="img/portafolio/high_preformance_states/high_preformance_states_1.jpg" alt="Sanborns Vacaciones">
				<a href="http://www.hpstates.com/" class="verMas" target="_blank">
					<span class="icon-signos-06">
					</span>
				</a>
			</article>
			<article class="introCuadro item">
				<img class="imgProyecto" src="img/portafolio/high_preformance_states/high_preformance_states_2.jpg" alt="Sanborns Vacaciones">
				<a rel="porta" href="img/portafolio/high_preformance_states/grandes/high_preformance_states_2.jpg" class="verMas">
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