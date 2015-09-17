<?php
	include '../config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, maximun-scale=1" />
	<meta name="description" content="Información de la empresa" />
	<meta name="keywords" content="Cafetol, café, productos, cafe molido, cafe tostado" />
	<title>Nosotros|Cafetol</title>
	<link rel="icon" href="../imagenes/iconob.png" />
	<link rel="stylesheet" href="../css/normalize.css" />
	<link rel="stylesheet" href="../css/iconos/style.css" />
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/nosotro.css" />
	<script src="../js/jquery_2_1_1.js"></script>
	<script src="../js/scripag.js"></script>
	<script src="../js/nosotros.js"></script>
</head>
<body>
	<div id="line"></div>
	<header>
		<article id="redes">
			<a href="" target="_blank"><span class="icon-facebook2"></span></a>
			<a href="" target="_blank"><span class="icon-instagram"></span></a>
		</article>
		<figure id="logo">
			<a href="../">
				<img src="../imagenes/logo.png" alt="logo" />
			</a>
		</figure>
	</header>
	<article id="mn_h">
		<div id="btn_mov"><span class="icon-menu"></span></div>
		<nav id="mnP">
			<ul>
				<li><a href="../">Inicio</a></li>
				<li><a class="sull" href="../nosotros">Nosotros</a></li>
				<li class="submen" data-num="1"><a href="../productos">Productos</a>
					<ul class="children1">
						<?php
							$Mntp="SELECT * from tipos order by id_tipo asc";
							$sql_mntp=mysql_query($Mntp,$conexion) or die (mysql_error());
							while ($tp=mysql_fetch_array($sql_mntp)) {
								$idtp=$tp['id_tipo'];
								$nmtp=$tp['nam_tipo'];
						?>
						<li><a href="../productos/tipos.php?tp=<?php echo $idtp ?>"><?php echo "$nmtp"; ?></a></li>
						<?php
							}
						?>
					</ul>
				</li>
				<li><a href="../novedades">Novedades</a></li>
				<li><a href="../contacto">Contacto</a></li>
				<li><a href="../region">Región</a></li>
			</ul>
		</nav>
	</article>
	<section>
		<div class="hcuatr">
			<h2>Nosotros</h2>
		</div>
		<figure id="banner">
			<img src="../imagenes/bann_nosotros.jpg" alt="nosotros" />
		</figure>
		<article class="textons">
			<h2 class="disnhhs bthdos" data-nm="1">Misión</h2>
			<article id="cj1" class="cjgnocl">
				<p id="Nnp">
					Producir, procesar y comercializar Café Especial Toledo tostado y molido en sus diferentes formas y presentaciones, conservando sus características, manteniendo una excelente calidad, 
					innovando en la presentación del producto, brindando la mejor atención al cliente y mejorando continuamente la calidad de vida de nuestros Asociados y sus Familias.
				</p>
			</article>
			<h2 class="disnhhs bthdos" data-nm="2">Visión</h2>
			<article id="cj2" class="cjgnocl">
				<p id="Nnp">
					La Asociación  Productora y  Comercializadora de Café  Especial Toledo -CAFETOL-, al año 2018, 
					será una organización consolidada productiva y competitiva, sostenible e incluyente, 
					con sentido de pertenencia, posicionada comercialmente a nivel nacional e internacional.
				</p>
			</article>
		</article>
		<article class="textons">
			<h2 class="disnhhs bthdos" data-nm="3">Cafetol</h2>
		</article>
		<article class="textonvv">
			<article id="cj3" class="cjgnocl">
				<article id="Nnp">
					<h2>LOS CAFES DE ORIGEN</h2>
					<p>
						Son Cafés que provienen de una región o finca, con cualidades únicas, debido a que crecen en sitios especiales. 
						Son vendidos de igual manera al consumidor final sin ser mezclados con otras calidades o cafés provenientes de otros orígenes. 
						Los clientes los prefieren por sus especiales atributos en su sabor y aroma.
					</p>
					<h2>PORQUE ES IMPORTANTE TOMAR CAFETOL</h2>
					<p>
						El placer de probar los mejores Cafés Colombianos, está en CAFETOL. Sentir este sabor es degustar la riqueza de los aromas más exquisitos de las montañas colombianas. 
						Hemos seleccionado los mejores granos, directamente desde su origen, los cuales se destacan por su acidez media, cuerpo medio, con una taza limpia, suave y de sabor achocolatado y a nueces tostadas impresas en su Fragancia y aroma pronunciado, fuerte sabor y olor, que hacen de nuestro café, uno de los mejores cafés del mundo. 
						Nuestros clientes pueden degustar de manera fresca y pura una deliciosa bebida, que sale del corazón de esta hermosa región y que es elaborada con cariño, por las manos laboriosas del Campesino.
					</p>
					<h2>DONDE SE PRODUCE Y EL PORQUE DEL CAFÉ ESPECIAL TOLEDO</h2>
					<p>
						Los municipios de Toledo y Labateca, cuna del Café Especial Toledo de Origen, están localizados al suroriente del Departamento Norte de Santander, a 94 kilómetros de la ciudad de Cúcuta, sobre las estribaciones de la cordillera oriental, con una altura sobre el nivel del mar de 1.650 mts., una temperatura que oscila entre los 12 y 18 °C. 
						La posición geográfica dentro del parque Nacional natural Tamá, los vientos cálidos que llegan de los llanos Orientales, los ricos suelos volcánicos, las condiciones climáticas, el cultivo bajo el bosque y una única cosecha en el año; hacen que se produzca el Café Especial Toledo de Origen. Además, el don de sus habitantes, sus lindos paisajes, su riqueza hídrica, el ambiente del Parque Tama, su historia y la Fe en Dios; hacen que muchos sientan el deseo de conocer esta tierra pródiga y bendita.
					</p>
				</article>
			</article>
		</article>
	</section>
	<footer>
		<article class="flxfoot">
			<article class="informc">
				<h2 id="topno">Nosotros</h2>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					when an unknown printer took a galley of type and scrambled it 
					to make a type specimen book.
				</p>
				<div><span class="icon-old-phone"></span> +57 320 263 2769</div>
				<div><span class="icon-mail"></span> contact@dominio.com</div>
				<div><span class="icon-location"></span> Vereda Santa Ana Kilometro 5 vía Toledo-Chinacota - Finca el cafetero</div>
				<article id="redes">
					<a href="" target="_blank"><span class="icon-facebook2"></span></a>
					<a href="" target="_blank"><span class="icon-instagram"></span></a>
				</article>
			</article>
			<article class="contmsj">
				<form action="#" method="post" class="columninput">
					<label for="namct"><b>Nombre</b></label>
					<input type="text" id="namct" required />
					<label for="corct"><b>Correo</b></label>
					<input type="email" id="corct" required />
					<label for="txtct"><b>Mensaje</b></label>
					<textarea id="txtct" rows="4" required></textarea>
					<div id="msct"></div>
					<div>
						<input type="submit" value="Enviar" id="nvmsct" />
					</div>
				</form>
			</article>
		</article>
		<article class="footfin">
			CONAXPORT © 2015 &nbsp;&nbsp;todos los derechos reservados &nbsp;- &nbsp;PBX (5) 841 733 &nbsp;&nbsp;Cúcuta - Colombia &nbsp;&nbsp;
			<a href="http://conaxport.com/" target="_blank">www.conaxport.com</a>
		</article>
	</footer>
</body>
</html>