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
	<link rel="icon" href="../imagenes/icono.png" />
	<link rel="stylesheet" href="../css/normalize.css" />
	<link rel="stylesheet" href="../css/iconos/style.css" />
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/nosotro.css" />
	<script src="../js/jquery_2_1_1.js"></script>
	<script src="../js/scripag.js"></script>
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
		<div class="htres">
			<h2>Nosotros</h2>
		</div>
		<article id="automargen" class="textons">
			<h2>Misión</h2>
			<p>
				Producir, procesar y comercializar Café Especial Toledo tostado y molido en sus diferentes formas y presentaciones, conservando sus características, manteniendo una excelente calidad, 
				innovando en la presentación del producto, brindando la mejor atención al cliente y mejorando continuamente la calidad de vida de nuestros Asociados y sus Familias.
			</p>
			<h2>Visión</h2>
			<p>
				La Asociación  Productora y  Comercializadora de Café  Especial Toledo -CAFETOL-, al año 2018, 
				será una organización consolidada productiva y competitiva, sostenible e incluyente, 
				con sentido de pertenencia, posicionada comercialmente a nivel nacional e internacional.
			</p>
			
		</article>
	</section>
	<footer>
		<article class="flxfoot">
			<article class="informc">
				<h2>Nosotros</h2>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
					when an unknown printer took a galley of type and scrambled it 
					to make a type specimen book.
				</p>
				<div><span class="icon-old-phone"></span> +48 12 77 33 22</div>
				<div><span class="icon-mail"></span> contact@dominio.com</div>
				<div><span class="icon-location"></span> Ui, Krakowwska 12, 30-229 Krakow, Poland</div>
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