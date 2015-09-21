<?php
	include '../config.php';
	$idR=$_GET['tp'];
	if ($idR=="") {
		echo "<script type='text/javascript'>";
			echo "alert('id de tipo no disponible');";
			echo "var pagina='../productos';";
			echo "document.location.href=pagina;";
		echo "</script>";
	}
	else{
		$datos="SELECT * from tipos where id_tipo=$idR";
		$sql_datos=mysql_query($datos,$conexion) or die (mysql_error());
		$numdatos=mysql_num_rows($sql_datos);
		if ($numdatos>0) {
			while ($dt=mysql_fetch_array($sql_datos)) {
				$nmdttp=$dt['nam_tipo'];
			}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, maximun-scale=1" />
	<meta name="description" content="Productos de cafetol" />
	<meta name="keywords" content="Cafetol, café, productos, cafe molido, cafe tostado" />
	<title>Productos|Cafetol</title>
	<link rel="icon" href="../imagenes/iconob.png" />
	<link rel="stylesheet" href="../css/normalize.css" />
	<link rel="stylesheet" href="../css/iconos/style.css" />
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/productos.css" />
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
				<li class="submen" data-num="1"><a class="sull" href="../productos">Productos</a>
					<ul class="children1">
						<?php
							$Mntp="SELECT * from tipos order by id_tipo asc";
							$sql_mntp=mysql_query($Mntp,$conexion) or die (mysql_error());
							while ($tp=mysql_fetch_array($sql_mntp)) {
								$idtp=$tp['id_tipo'];
								$nmtp=$tp['nam_tipo'];
								if ($idtp==$idR) {
									$colsl="class='sull'";
								}
								else{
									$colsl="";
								}
						?>
						<li><a <?php echo $colsl ?> href="../productos/tipos.php?tp=<?php echo $idtp ?>"><?php echo "$nmtp"; ?></a></li>
						<?php
							}
						?>
					</ul>
				</li>
				<li><a href="../contacto">Contacto</a></li>
				<li><a href="../region">Región</a></li>
			</ul>
		</nav>
	</article>
	<section>
		<div class="htres">
			<h2>PRODUCTOS</h2>
		</div>
		<article class="tdPP">
			<?php
				error_reporting(E_ALL ^ E_NOTICE);
				$tamno_pagina=15;
				$pagina= $_GET['pagina'];
				if (!$pagina) {
					$inicio=0;
					$pagina=1;
				}
				else{
					$inicio= ($pagina - 1)*$tamno_pagina;
				}
				$ssql="SELECT * from productos where tipo_id=$idR order by id_p desc";
				$rs=mysql_query($ssql,$conexion) or die (mysql_error());
				$num_total_registros= mysql_num_rows($rs);
				$total_paginas= ceil($num_total_registros / $tamno_pagina);
				$gsql="SELECT * from productos where tipo_id=$idR order by id_p desc limit $inicio, $tamno_pagina";
				$impsql=mysql_query($gsql,$conexion) or die (mysql_error());
				while ($xor=mysql_fetch_array($impsql)) {
					$idP=$xor['id_p'];
					$tpP=$xor['tipo_id'];
					$nmP=$xor['nam_p'];
					$rsP=$xor['rs_p'];
					$xxP=$xor['txt_p'];
					$primerImg="SELECT * from img_producto where p_id=$idP order by id_img_p asc limit 1";
					$sql_primg=mysql_query($primerImg,$conexion) or die (mysql_error());
					$numimg=mysql_num_rows($sql_primg);
					if ($numimg>0) {
						while ($igp=mysql_fetch_array($sql_primg)) {
							$idigp=$igp['id_img_p'];
							$rtigp=$igp['rut_img'];
						}
					}
					else{
						$idigp=0;
						$rtigp="imagenes/predeterminado.png";
					}
			?>
			<figure>
				<a href="../descripcion.php?pd=<?php echo $idP ?>">
					<img src="../<?php echo $rtigp ?>" alt="<?php echo $nmP ?>" />
				</a>
				<figcaption>
					<h2><?php echo "$nmP"; ?></h2>
				</figcaption>
			</figure>
			<?php
				}
			?>
		</article>
		<article id="automargen" class="pagin">
			<br />
			<?php
				//muestro los distintos indices de las paginas
				if ($total_paginas>1) {
					for ($i=1; $i <=$total_paginas ; $i++) { 
						if ($pagina==$i) {
							//si muestro el indice del la pagina actual, no coloco enlace
				?>
					<b><?php echo $pagina." "; ?></b>
				<?php
						}
						else{
							//si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página 
				?>
							<a href="tipos.php?tp=<?php echo $idR ?>&pagina=<?php echo $i ?>"><?php echo "$i"; ?></a>				<?php
						}
					}
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
<?php
			}
		else{
			echo "<script type='text/javascript'>";
				echo "alert('Tipo de producto eliminado o no existe');";
				echo "var pagina='../productos';";
				echo "document.location.href=pagina;";
			echo "</script>";
		}
	}
?>