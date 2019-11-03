<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Libreria</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/menu.css">
</head>
<body>

<div id="container">
	<?=$header?>
	<section>
		<h1>Baja</h1>
		<div id="alerta"><?=$respuesta?></div><br>
		<form id="formulario" method="post" action="<?=base_url()?>procesos/bajaLibro"> 
			<label>Título a borrar: </label><br>
			<select id="libro" name='libro'>
				<option disabled selected value='-1'>Seleccione libro</option>
				<?php
					foreach ($libros as $clave => $libro) {
						echo "<option value='$libro[idlibros]'>$libro[titulo]</option>";
					}
				?>
				
			</select>
			<br><br>
			<input type="submit" name="baja" id="baja" value="Baja Libro" />
		</form><br>
		<center><a href="<?=base_url()?>">Volver a inicio</a></center><br>
	</section>
	<?=$footer?>
</div>
</body>
</html>