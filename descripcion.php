<?php
	include 'config.php';
	$idR=$_GET['pd'];
	if ($idR=="") {
		echo "<script type='text/javascript'>";
			echo "alert('id de producto');";
			echo "var pagina='productos';";
			echo "document.location.href=pagina;";
		echo "</script>";
	}
	else{
		$datos="SELECT * from productos 
			inner join tipos on(productos.tipo_id=tipos.id_tipo) where id_p=$idR";
		$sql_datos=mysql_query($datos,$conexion) or die (mysql_error());
		$numdatos=mysql_num_rows($sql_datos);
		if ($numdatos>0) {
			while ($dt=mysql_fetch_array($sql_datos)) {
				$idP=$dt['id_p'];
				$tpP=$dt['tipo_id'];
				$nmP=$dt['nam_p'];
				$rsP=$dt['rs_p'];
				$xxP=$dt['txt_p'];
				$nmTP=$dt['nam_tipo'];
				$rtTP=$dt['rut_tp'];
				$xtTP=$dt['mintx_tp'];
			}
			$primerImg="SELECT * from img_producto where p_id=$idR order by id_img_p asc limit 1";
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, maximun-scale=1" />
	<meta name="description" content="<?php echo $xtTP ?>" />
	<meta name="keywords" content="<?php echo $nmTP ?>" />
	<title><?php echo "$nmP"; ?>|Cafetol</title>
	<link rel="icon" href="imagenes/iconob.png" />
	<link rel="image_src" href="<?php echo $rtigp ?>" />
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/iconos/style.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/productos.css" />
	<script src="js/jquery_2_1_1.js"></script>
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
			<a href="index.php">
				<img src="imagenes/logo.png" alt="logo" />
			</a>
		</figure>
	</header>
	<article id="mn_h">
		<div id="btn_mov"><span class="icon-menu"></span></div>
		<nav id="mnP">
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="nosotros">Nosotros</a></li>
				<li class="submen" data-num="1"><a class="sull" href="productos">Productos</a>
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
				<li><a href="contacto">Contacto</a></li>
				<li><a href="region">Región</a></li>
			</ul>
		</nav>
	</article>
	<section>
		<div class="hcinc">
			<h2><?php echo "$nmP"; ?></h2>
		</div>
		<figure id="galery">
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<?php
						$umgi="SELECT * from img_producto where p_id=$idR order by id_img_p asc";
						$sql_im=mysql_query($umgi,$conexion) or die (mysql_error());
						while ($uj=mysql_fetch_array($sql_im)) {
							$iduj=$uj['id_img_p'];
							$rtuj=$uj['rut_img'];
					?>
					<img src="<?php echo $rtuj ?>" alt="<?php echo $nmTP.'-'.$nmP.'-'.$rtuj ?>" />
					<?php
						}
					?>
				</div>
			</div>
		</figure>
		<article class="otrotx">
			<article id="automargen">
				<?php echo "$xxP"; ?>
			</article>
		</article>
		<div class="hcuatr">
			<h2>Ficha Técnica</h2>
		</div>
		<article>
			<table border="1px">
				<tr>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
				</tr>
				<tr>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
				</tr>
				<tr>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
				</tr>
				<tr>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
				</tr>
				<tr>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
				</tr>
				<tr>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
				</tr>
				<tr>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
				</tr>
				<tr>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
					<td>texto</td>
				</tr>
			</table>
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
				echo "alert('Producto no existe o ha sido eliminado');";
				echo "var pagina='productos';";
				echo "document.location.href=pagina;";
			echo "</script>";
		}
	}
?>