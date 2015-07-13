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
			<article class="introCuadro" id="introSanborns">
				<div>
					<h2>Sanborns</h2>
					<a href="sanborns_artes.php">
						<!--<span class="icon-signos-01">
						</span>-->
					</a>
				</div>
			</article>
			<a href="perfil.php">
				<article class="introCuadro grey">
					<h2>Mi perfil</h2>
					<img src="img/perfil.png" alt="Ver Portafolio de trabajos" class="introIlustra">
				</article>
			</a>
			<article class="introCuadro" id="introCassaInova">
				<div>
					<h2>Cassa Inova</h2>
					<a href="cassainova.php">
						<!--<span class="icon-signos-01">
						</span>-->
					</a>
				</div>
			</article>
			<a href="portafolio.php">
				<article class="introCuadro grey">
					<h2>Portafolio</h2>
					<img src="img/portafolio.png" alt="Ver Portafolio de trabajos" class="introIlustra">
				</article>
			</a>
			<article class="introCuadro" id="introiShow">
				<div>
					<h2>iShow</h2>
					<a href="ishow.php">
						<!--<span class="icon-signos-01">
						</span>-->
					</a>
				</div>
			</article>
			<article class="introCuadro" id="introHighPreformanceStates">
				<div>
					<h2>High Preformance States</h2>
					<a href="high_preformance_states.php">
						<!--<span class="icon-signos-01">
						</span>-->
					</a>
				</div>
			</article>
			<article class="introCuadro" id="introCasaMorales">
				<div>
					<h2>Casa Morales</h2>
					<a href="casa_morales.php">
						<!--<span class="icon-signos-01">
						</span>-->
					</a>
				</div>
			</article>
			<article class="introCuadro" id="introdigitalPlus">
				<div>
					<h2>Digital Plus</h2>
					<a href="digital_plus.php">
						<!--<span class="icon-signos-01">
						</span>-->
					</a>
				</div>
			</article>
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
			<article class="introCuadro" id="introFujifilm">
				<div>
					<h2>Fujifilm</h2>
					<a href="fujifilm.php">
						<span class="icon-signos-01">
						</span>
					</a>
				</div>
			</article>
		</div>
		<? include "footer.php" ?>
	</body>
</html>