<?php 



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Libreria</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/menu.css">

	</head>
	<body>
		<?=$header?>
		<section id="general">
				
			<div id="menu">
				<h1>ALTA</h1>
				<div id="alerta"><?=$respuesta?></div><br>
				<form method="post"  name="formulario"	id="formulario" action="<?=base_url()?>procesos/altaLibro">
					<label>Introduzca el título:  </label>
					<input type="text" name="titulo"><br>
					<label>Introduzca el precio: </label>
					<input type="number" name="precio"><br><br>
					<input type="submit" value="inserte registro" name="enviar">
					<br><br>
				</form>
				<a href="<?=base_url()?>">volver a menu</a><br><br>				
			</div>
		</section>
			<?=$footer?>	
	</body>

</html>
