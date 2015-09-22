<?php
	include '../config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, maximun-scale=1" />
	<meta name="description" content="Nuestra Región" />
	<meta name="keywords" content="Cafetol, café, productos, cafe molido, cafe tostado" />
	<title>Región|Cafetol</title>
	<link rel="icon" href="../imagenes/iconob.png" />
	<link rel="stylesheet" href="../css/normalize.css" />
	<link rel="stylesheet" href="../css/iconos/style.css" />
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/contacto.css" />
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
				<li><a href="../nosotros">Nosotros</a></li>
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
				<li><a href="../contacto">Contacto</a></li>
				<li><a class="sull" href="../region">Región</a></li>
			</ul>
		</nav>
	</article>
	<section>
		<div class="htres">
			<h2>Región</h2>
		</div>
		<article class="flxregn">
			<figure id="maogm">
				<img src="../imagenes/mapa_cafetol.jpg" alt="mapa" />
			</figure>
			<article id="Nnp">
				<h3>Economía</h3>
				<p>Basa su economía en el café "ESPECIAL TOLEDO" el cual es exportado a Estados Unidos, también se basa en la ganadería (carne y leche) y la industria de lácteos en pleno proceso evolutivo, la cual a partir de la Cooperativa Cogansonorte lidereda por el empresario rural Eduardo Rico V., y otras empresas de carácter privado como la Quesera Cifuentes, incluyen este renglòn como muy importante dentro del desarrollo municipal.</p>
				<p>Igualmente la agricultura con inmensas posibilidades en cítricos, verduras, aromàticas y especiales como la estevia y caña panelera tienen una mirada especial por parte de algunos productores y comercializadores. La explotación carbonífera, que de todos modos deja secuelas pésimas para el medio ambiente, especialmente en las fuentes hìdricas, se ha intensificado en los últimos años.</p>
				<p>Ésta, junto a las regalías que deja la empresa Ecopetrol constituyen otros rubros de interès para el sector productivo de la población. Pronto se comenzarán a explotar los ricos campos de gas natural en Gibraltar, región que corresponde a su jurisdicción, para lo cual se ha construido un extenso gasoducto desde ese lugar hasta Bucaramanga.</p>
				<p>Igualmente en pocos meses se dará inicio a la etapa de construcción del Oleoducto Bicentenario, paralelo a la línea del llamado Caño LImón - Coveñas. Esta nueva tubería apta para transportar 500 mil barriles día tiene sus origen en los ricos yacimientos de Casanare y el Meta.</p>
			</article>
		</article>
		<article id="Nnp">
			<article id="automargen" class="texto">
				<h3>Reseña histórica</h3>
				<p>En el libro " adrian carrillo", de Anita Sánchez de Rozo y Rubén Darío Rodríguez, se dice que "los primitivos pobladores descendían de los chitareros, quienes a su vez eran descendientes de los chibchas. Como un reducto de los pobladores ancestrales, se tienen hoy a los U'was (anteriormente llamados tunebos), quienes se localizan en la zona conocida como Santa Librada, Sararito, Samoré , El Chuscal y algunas regiones vecinas de Arauca y Boyacá".</p>
				<p>Los conquistadores dominaron sin mayor resistencia a los primitivos indígenas, que huyendo, habían llegado a estos valles donde se conformaban con proveerse de los alimentos, que en esencia consistían el maíz, yuca, batata y varias frutas silvestres, cazaban venados y otros animales monteses cuya carne era muy apreciada.</p>
				<p>Toledo, como municipio, procede de su vecino Labateca, de donde fue segregado como parroquia en 1795.</p>
				<p>La existencia y fundación de Labateca como encomienda se remonta hacia 1555 y 1560.</p>
				<p>Juana Gertrudis Mora de Almeyda y sus hijos Juan, Diego y Martín, de acuerdo a los documentos históricos, son los fundadores del poblado, pues ella como dueña de las tierras y sus descendientes como tramitadores ante el Rey de la solicitud, se inscriben en la historia como los fundadores de Toledo, cuyo nombre, sin duda es un homenaje a la tierra española de donde era oriundos.</p>
				<p>A partir de entonces el apellido Mora se arraigó en el lugar y hasta hoy son miles de familias, de varias generaciones, que lo llevan en algún lugar de su genealogía.
				<p>Toledo fue elevado a categoría de cabecera municipal en el año de 1886, pero su fundación data de 1795.</p>
				<h3>Festividades</h3>
				<ul>
					<li>Septiembre del 5 al 15, Santo Cristo, patrono y Nuestra Señora de las Angustias.</li>
					<li>Febrero 13 al 16, Ferias y Fiestas y Reinado Departamental de la Ganadería, festival de comparsas.</li>
					<li>Semana Santa como retiro espiritual para propios y extraños.</li>
					<li>octubre semana cultural colegio, Guillermo Cote Bautista, expresiones artísticas de la región.</li>
					<li>Noviembre primer puente festivo, gran caravana turística presentación de actos culturales por colonias, festival mundial del Guarapo patrocinado por las personas residentes y las que nos visitan.</li>
				</ul>
				<p>En el segundo puente festivo del mes de noviembre se lleva a cabo la gran maratón "Ciudad de Toledo", organiza ECOPETROL, con la colaboración de la administración Municipal y la Institución educativa.</p>
				<p>El gran factor "T", este evento se realiza desde el 26 al 30 de Diciembre, de siete a diez de la noche, en espacio público, entrada gratis, se transmite por la emisora comunitaria La Voz de Toledo, y el canal comunal Tele Toledo,</p>
				<h2>Sitios turísticos</h2>
				<ul>
					<li>Parque Nacional Natural <b>El Tamá</b>, el cual tiene todos los pisos térmicos y una variada gama de especies en su fauna y flora, así como hermosas vistas paisajísticas. Dentro de este parque, señala la historia, se encuentra la cascada La Segueta, que con más de 800 metros de caída libre sería la más alta de Colombia y segunda del mundo detrás del famoso <a href="/wiki/Salto_%C3%81ngel" title="Salto Ángel">Salto del Ángel</a> en Venezuela. Sin embargo acceder al lugar es todavía muy difícil, por lo abrupto del terreno en plena selva del lugar.</li>
				</ul>
				<ul>
					<li>En el sitio conocido como El Azul y Santa Rita hay numerosas cascadas, que por su belleza, pueden ser en el futuro destino turístico de gran importancia.</li>
					<li>Aguas termales en la vereda Tapatá, un sitio aún por descubrir pero que con adecuaciones necesarias de movilidad y hospedaje podría ser interesante punto de encuentro y referencia de viajeros.</li>
					<li>El cerro del Venado, paradisíaco y misterioso lugar, de grandes riscos, lagunas, manantiales, vegetación y especies animales propias de los Andes colombianos.</li>
					<li>Santuario de Nuestra Señora de las Angustias en la vereda Bochagá, donde dice la leyenda apareció el lienzo de la Virgen protectora de toledanos y batecanos.</li>
					<li>Capilla Nuestra Señora de las Angustias.(centro)</li>
					<li>Templo parroquial San Luis.</li>
					<li>Piscina los Pinos.</li>
					<li>Río Culaga.</li>
					<li>Casa de la Cultura y Biblioteca.</li>
					<li>La peña de los Micos, un cerro de gran tamaño, pura roca, que es atravesado por un camino de herradura con altura, del camino hasta el río Margua, de unos trecientos metros en caída libre, camino angosto y construido hace más o menos ochenta años cuando los colonizadores del Sararé mostraron interés por esa rica región. Sin duda es una obra de arte, para el turismo extremo, pero lamentablemente sin promoción. Está ubicada a cinco minutos de San Bernardo de Bata vía Santa Barbara.</li>
					<li>Los toboganes naturales vereda El Azul. El agua se desplaza sobre una piedra plana(laja).</li>
					<li>Hogar Juvenil Campesino Toledito.</li>
					<li>Coliseo La Canchita.</li>
					<li>Cascada de Piletas.</li>
					<li>Museo don David Hernández.</li>
					<li>Las tres plantas físicas de la Institución Educativa Guillermo Cote Bautista</li>
					<li>Casona de la Alcaldía.</li>
					<li>La Tamarana, Hotel ubicado en Samoré, con cabañas de madera, caminos de piedra y piscina natural.</li>
					<li>Sede 2 de la Alcaldía Municipal, antigua Alcaldía.</li>
				</ul>}
				<h3>Biblioteca Eduardo Cote Lamus</h3>
				<p>Constituida en el año de 1975 por el Club de Leones, el nombre fue asignado en 1997 en honor al Poeta <a href="/w/index.php?title=Nortesantandereano&amp;action=edit&amp;redlink=1" class="new" title="Nortesantandereano (aún no redactado)">Nortesantandereano</a> <a href="/wiki/Eduardo_Cote_Lamus" title="Eduardo Cote Lamus">Eduardo Cote Lamus</a> quién, el 3 de agosto de 1964 murió en un accidente automovilístico en la carretera que comunica <a href="/wiki/Pamplona" title="Pamplona">Pamplona</a> con <a href="/wiki/C%C3%BAcuta" title="Cúcuta">Cúcuta</a> en el sitio La Garita.</p>
				<p>La Biblioteca pública funciona en las instalaciones de la casa de la cultura. en la calle 14, nº 6-12 esquina Barrio el Contento frente al parque principal.</p>
				<p>La Biblioteca está afiliada a la red Departamental de Bibliotecas públicas de Norte de Santander.</p>
				<p>Presta servicios de investigación sistematizada y bibliográfica, préstamo externo,cuenta con programa de promoción de lectura y escuela de literatura.</p>
				<p>La Biblioteca, cuenta con 7.000 volúmenes a disposición de la comunidad; además de una biblioteca abierta, se presta asesoría en los trabajos de investigación y se suministra información local.</p>
				<p>Hoy contamos con un gran proyecto que se desarrolla a nivel nacional, "BIBLIOTECA ESCUELA", programa de lectura, convenio entre la Biblioteca y la institución educativa, con grupos de niños de primaria.</p>
				<p>dentro de los programas de lectura, se esta ejecutando un proyecto de LECTURA EN VOZ ALTA, con los estudiantes del Hogar juvenil Campesino con el fin de promover la lectura y promocionar la Biblioteca de Nuestro Municipio, con el debido acompañados por el Ministerio de Cultura, la Biblioteca Nacional, la Red Departamental de Bibliotecas y la Administración Municipal. desde el 20 de septiembre de 2014 contamos con colectividad en el área de la Biblioteca, instalada por el ministerio de Cultura.</p>
			</article>
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