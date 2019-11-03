<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Libreria</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/menu.css">
</head>
<body>

<div id="container" class='justify'>
	<?=$header?>
	<section>
		<h1>Modificación</h1>
		<div id="alerta"><?=$respuesta?></div><br>
		<label>Título del libro: </label><br>
		<form method='post' action="<?=base_url()?>procesos/cargaLibro">
			<select id="libro" name='libro' onchange="this.form.submit()">
				<option disabled selected value='-1'>Seleccione libro</option>
				<?php
					foreach ($libros as $clave => $libro) {
						//para mantener la selección del libro seleccionado
						if ($idlibros==$libro['idlibros']) {
							$selected = 'selected';
						} else {
							$selected = '';
						}

						echo "<option value='$libro[idlibros]' $selected >$libro[titulo]  </option>";
					}
				?>
				
			</select>
		</form>
		<br><br>
		<form id="formulario" method="post" action="<?=base_url()?>procesos/modificacionLibro" >
			<input type="hidden" id="idlibro" name="idlibro" value="<?=$idlibros?>" />
			<label>Título: </label><input class="fields" type="text" maxlenght="200" id="titulo" name="titulo" value="<?=$titulo?>" /><br><br>
			<label>Precio: </label><input class="fields" type="number" maxlenght="5" id="precio" name="precio" value="<?=$precio?>" /><br><br>
			<center><input type="submit" name="modificacion" id="modificacion" value="Modificar" /></center>
		</form><br>
		<center><a href="<?=base_url()?>">Volver a inicio</a></center><br>
	</section>
	<?=$footer?>
</div>
</body>
</html>