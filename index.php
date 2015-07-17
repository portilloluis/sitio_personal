		<? include "head.php" ?>
		<title>Luis Portillo: diseño gráfico y diseño web</title>
		<meta name="description" content="Diseñador gráfico especializado en diseño web " />
	</head>
	<body>
		<? include "nav.php" ?>
		<div class="center">
			<header>
				<div id="title_index">
					<h1>Diseño gráfico<span>/web</span> </h1>
					<img src="img/portillo_firma.png" alt="Portillo">
				</div>
				<a href="http://training.adobe.com/certification/ace-finder.html#p=1&name=Luis%20Carlos&country=mexico" target="_blank" id="ace_dreamweaver">
					<img src="img/ace_dreamweaver.gif" alt="Adobe Certificate Expert: Dreamweaver" />
				</a>
			</header>
			<a href="sanborns_artes.php">
				<article class="introCuadro" id="introSanborns">	
				</article>
			</a>
			<!--<a href="perfil.php">
				<article class="introCuadro grey">
					<h2>Mi perfil</h2>
					<img src="img/perfil.png" alt="Ver Portafolio de trabajos" class="introIlustra">
				</article>
			</a>-->
			<a href="cassainova.php">
				<article class="introCuadro" id="introCassaInova">
				</article>
			</a>
			<!--<a href="portafolio.php">
				<article class="introCuadro grey">
					<h2>Portafolio</h2>
					<img src="img/portafolio.png" alt="Ver Portafolio de trabajos" class="introIlustra">
				</article>
			</a>-->
			<a href="">
				<article class="introCuadro" id="introiShow">
				</article>
			</a>
			<a href="high_preformance_states.php">
				<article class="introCuadro" id="introHighPreformanceStates">	
				</article>
			</a>
			<a href="casa_morales.php">
				<article class="introCuadro" id="introCasaMorales">
				</article>
			</a>
			<a href="digital_plus.php">
				<article class="introCuadro" id="introdigitalPlus">
				</article>
			</a>			
			
			<a href="fujifilm.php">
				<article class="introCuadro" id="introFujifilm">	
				</article>
			</a>
			<article class="introCuadro grey">
				<h2>Contáctame</h2>
				<form action="accion_formulario.php" method="post">
					<table>
						<tr>
							<td>
								<img src="img/nombre.png" alt="Tu nombre" class="imgForm" />
							</td>
							<td>
								<input type="text" required placeholder="Nombre" name="nombre" />
							</td>
						</tr>
						<tr>
							<td>
								<img src="img/correo_electronico.png" alt="Tu correo electrónico" class="imgForm"/>
							</td>
							<td>
								<input type="email" required placeholder="Correo" name="correo" />
							</td>
						</tr>
						<tr>
							<td>
								<img src="img/escribir_mensaje.png" alt="Tu mensaje" class="imgForm"/>
							</td>
							<td>
								<textarea placeholder="Escribe tu mensaje aqui" value="" id="mensaje" name="mensaje">
									
								</textarea>
							</td>
						</tr>
						<tr>
							<td>
								
							</td>
							<td>
								<input type="submit" value="Enviar"/>
							</td>
						</tr>
					</table>
				</form>
			</article>	
		</div>
		<? include "footer.php" ?>
	</body>
</html>