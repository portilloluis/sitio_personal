		<? include "head.php" ?>
		<title>Luis Portillo: Casa Morales</title>
		<meta name="description" content="Portafolio Digital de trabajos de diseño gráfico y web de Luis Portillo" />
		<link rel="stylesheet" href="css/vendor/jquery.fancybox.css">
	</head>
	<body>
		<? include "nav.php" ?>
		<h2 id="tituloProyecto">Casa Morales</h2>
		<div class="center">
			<article class="introCuadro item" id="descripcion">
				<h3>Descripción</h3>
				<p>Diseño de imagotipo, papelería, firma digital y propuesta de uniformes.<p>
				<h3>Fecha de proyecto</h3>
				<p>Septiembre de 2013 - Noviembre de 2013</p>
				<p id="textoPequeno">(Proyecto personal)</p>
			</article>
			<a rel="porta" href="img/portafolio/casa_morales/grandes/casa_morales_1.jpg" class="verMas">		
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/casa_morales/casa_morales_1.jpg" alt="Casa Morales Imagotipo">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/casa_morales/grandes/casa_morales_2.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/casa_morales/casa_morales_2.jpg" alt="Casa Morales tarjetas">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/casa_morales/grandes/casa_morales_3.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/casa_morales/casa_morales_3.jpg" alt="Casa Morales hoja membretada">		
				</article>
			</a>
			<a rel="porta" href="img/portafolio/casa_morales/grandes/casa_morales_4.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/casa_morales/casa_morales_4.jpg" alt="Casa Morales Firma electrónica">	
				</article>
			</a>
			<a rel="porta" href="img/portafolio/casa_morales/grandes/casa_morales_5.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/casa_morales/casa_morales_5.jpg" alt="Casa Morales uniforme hombre">
				</article>
			</a>
			<a rel="porta" href="img/portafolio/casa_morales/grandes/casa_morales_6.jpg" class="verMas">
				<article class="introCuadro item">
					<img class="imgProyecto" src="img/portafolio/casa_morales/casa_morales_6.jpg" alt="Casa Morales uniforme mujer">
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