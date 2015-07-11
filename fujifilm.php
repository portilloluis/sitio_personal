		<? include "head.php" ?>
		<title>Luis Portillo: Fujifilm</title>
		<meta name="description" content="Trabajos de diseño web para Fujifilm" />
		<link rel="stylesheet" href="css/vendor/jquery.fancybox.css">
	</head>
	<body>
		<? include "nav.php" ?>
		<h2 id="tituloProyecto">Fujifilm</h2>
		<div class="center">
			<article class="introCuadro item" id="descripcion">
				<h3>Descripción</h3>
				<p>Armado de materiales y landing pages para diversas campañas.<p>
				<h3>Fecha de proyecto</h3>
				<p>2014</p>
				<p id="textoPequeno">(A través de Grey Dot)</p>
			</article>			
			<article class="introCuadro item">
				<img class="imgProyecto" src="img/portafolio/fujifilm/fujifilm_1.jpg" alt="Sanborns Vacaciones">
				<a href="sites/fujifilm/calendario/" class="verMas" target="_blank">
					<span class="icon-signos-06">
					</span>
				</a>
			</article>
			<article class="introCuadro item">
				<img class="imgProyecto" src="img/portafolio/fujifilm/fujifilm_2.jpg" alt="Sanborns Vacaciones">
				<a href="sites/fujifilm/holding_navidad/" class="verMas" target="_blank">
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