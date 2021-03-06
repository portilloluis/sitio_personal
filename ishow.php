		<? include "head.php" ?>
		<title>Luis Portillo: iShow</title>
		<meta name="description" content="Portafolio Digital de trabajos de diseño gráfico y web de Luis Portillo" />
		<link rel="stylesheet" href="css/vendor/jquery.fancybox.css">
	</head>
	<body>
		<? include "nav.php" ?>
		<h2 id="tituloProyecto">iShow</h2>
		<div class="center">
			<article class="introCuadro item" id="descripcion">
				<h3>Descripción</h3>
				<p>Diseño de imagotipo, papelería corporativa y sitio web.<p>
				<h3>Fecha de proyecto</h3>
				<p>Abril de 2011.</p>
				<p id="textoPequeno">(A través de Pick)</p>
			</article>
			<a href="http://www.ishow.com.mx" class="verMas" target="_blank">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/ishow/ishow_4.jpg" alt="iShow sitio web">	
				</article>
			</a>
			<a rel="porta" href="img/portafolio/ishow/grandes/ishow_1.jpg" class="verMas">	
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/ishow/ishow_1.jpg" alt="iShow tarjeta de presentación">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/ishow/grandes/ishow_2.jpg" class="verMas">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/ishow/ishow_2.jpg" alt="iShow hoja membretada">				
				</article>
			</a>
			<a rel="porta" href="img/portafolio/ishow/grandes/ishow_3.jpg" class="verMas">
				<article class="introCuadro">
					<img class="imgProyecto" src="img/portafolio/ishow/ishow_3.jpg" alt="iShow flyer">
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