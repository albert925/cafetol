<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, maximun-scale=1" />
	<meta name="description" content="cafetol" />
	<meta name="keywords" content="Cafetol, café, productos, cafe molido, cafe tostado" />
	<title>Cafetol</title>
	<link rel="icon" href="imagenes/icono.png" />
	<link rel="image_src" href="imagenes/logo.png" />
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/iconos/style.css" />
	<link rel="stylesheet" href="css/owl_carousel.css" />
	<link rel="stylesheet" href="css/owl_theme_min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/inicio.css" />
	<script src="js/jquery_2_1_1.js"></script>
	<script src="js/owl_carousel_min.js"></script>
	<script src="js/scripag.js"></script>
</head>
<body>
	<div id="line"></div>
	<header>
		<article id="redes">
			<a href="" target="_blank"><span class="icon-facebook2"></span></a>
			<a href="" target="_blank"><span class="icon-instagram"></span></a>
		</article>
		<figure id="logo">
			<a href="">
				<img src="imagenes/logo.png" alt="logo" />
			</a>
		</figure>
	</header>
	<article id="mn_h">
		<div id="btn_mov"><span class="icon-menu"></span></div>
		<nav id="mnP">
			<ul>
				<li><a class="sull" href="">Inicio</a></li>
				<li><a href="nosotros">Nosotros</a></li>
				<li class="submen" data-num="1"><a href="productos">Productos</a>
					<ul class="children1">
						<?php
							$Mntp="SELECT * from tipos order by id_tipo asc";
							$sql_mntp=mysql_query($Mntp,$conexion) or die (mysql_error());
							while ($tp=mysql_fetch_array($sql_mntp)) {
								$idtp=$tp['id_tipo'];
								$nmtp=$tp['nam_tipo'];
						?>
						<li><a href="productos/tipos.php?tp=<?php echo $idtp ?>"><?php echo "$nmtp"; ?></a></li>
						<?php
							}
						?>
					</ul>
				</li>
				<li><a href="novedades">Novedades</a></li>
				<li><a href="contacto">Contacto</a></li>
				<li><a href="region">Región</a></li>
			</ul>
		</nav>
	</article>
	<section>
		<article class="migms">
			<figure id="gnfg">
				<img src="imagenes/slider/cafe1.jpg" alt="cafe1" />
			</figure>
			<article id="gdos">
				<figure>
					<img src="imagenes/slider/cafe2.jpg" alt="cafe2" />
				</figure>
				<figure>
					<img src="imagenes/slider/cafe3.jpg" alt="cafe3" />
				</figure>
			</article>
		</article>
		<article class="infem">
			<figure id="emun">
				<img src="imagenes/cafever.jpg" alt="cafe4" />
			</figure>
			<article id="emdo">
				<article class="owl-carousel owl-theme owl-loaded">
					<div id="item">
						<div class="hdos">
							<h2>Nosotros</h2>
						</div>
						<article>
							<p>
								Los municipios de Toledo y Labateca, cuna del Café Especial Toledo de Origen, 
								están localizados al suroriente del Departamento Norte de Santander, 
								a 94 kilómetros de la ciudad de Cúcuta, sobre las estribaciones de la cordillera oriental, 
								con una altura sobre el nivel del mar de 1.650 mts., 
								una temperatura que oscila entre los 12 y 18 °C. 
								La posición geográfica dentro del parque Nacional natural Tamá, 
								los vientos cálidos que llegan de los llanos Orientales, los ricos suelos volcánicos, 
								las condiciones climáticas, el cultivo bajo el bosque y una única cosecha en el año; 
								hacen que se produzca el Café Especial Toledo de Origen. Además, el don de sus habitantes, 
								sus lindos paisajes, su riqueza hídrica, el ambiente del Parque Tama, 
								su historia y la Fe en Dios; 
								hacen que muchos sientan el deseo de conocer esta tierra pródiga y bendita.
							</p>
						</article>
					</div>
					<div id="item">
						<div class="hdos">
							<h2>Misión</h2>
						</div>
						<article>
							<p>
								Producir, procesar y comercializar Café Especial Toledo tostado y 
								molido en sus diferentes formas y presentaciones, conservando sus características, 
								manteniendo una excelente calidad, innovando en la presentación del producto, 
								brindando la mejor atención al cliente y mejorando continuamente la calidad de vida 
								de nuestros Asociados y sus Familias.
							</p>
						</article>
					</div>
					<div id="item">
						<div class="hdos">
							<h2>Visión</h2>
						</div>
						<article>
							<p>
								La Asociación  Productora y  Comercializadora de Café  Especial Toledo -CAFETOL-, 
								al año 2018, será una organización consolidada productiva y competitiva, 
								sostenible e incluyente, con sentido de pertenencia, 
								posicionada comercialmente a nivel nacional e internacional.
							</p>
						</article>
					</div>
				</article>
			</article>
		</article>
		<div class="htres">
			<h2>PRODUCTOS</h2>
		</div>
		<article class="tipos_cafes">
			<?php
				$Ttdtp="SELECT * from tipos order by id_tipo asc";
				$sql_tp=mysql_query($Ttdtp,$conexion) or die (mysql_error());
				while ($ts=mysql_fetch_array($sql_tp)) {
					$Oidtp=$ts['id_tipo'];
					$Onmtp=$ts['nam_tipo'];
					$Orttp=$ts['rut_tp'];
					$Oxxtp=$ts['mintx_tp'];
			?>
			<figure>
				<img src="<?php echo $Orttp ?>" alt="<?php echo $Onmtp ?>" />
				<figcaption>
					<h2><?php echo "$Onmtp"; ?></h2>
					<p>
						<?php echo "$Oxxtp"; ?>
					</p>
					<a href="productos/tipos.php?tp=<?php echo $Oidtp ?>">Ver más</a>
				</figcaption>
			</figure>
			<?php
				}
			?>
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
	<script type="text/javascript">
		$(document).on("ready",icionowl);
		function icionowl () {
			 $('.owl-carousel').owlCarousel({
				autoplay:true,
				autoplayTimeout:3000,
				autoplayHoverPause:true,
				dots:false,
				loop:true,
				margin:10,
				responsiveClass:true,
				nav:false,
				responsive:{
					0:{
						items:1
					}
				}
			});
		}
	</script>
</body>
</html>