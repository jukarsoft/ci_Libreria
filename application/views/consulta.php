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
		<h1>Consulta</h1>
		<?php
			foreach ($libros as $clave => $libro) {
				echo "<strong>Titulo: </strong>$libro[titulo]<br> ";
				echo "<strong>Precio: </strong>$libro[precio]<hr>";
			}
		?>
		<center><a href="<?=base_url()?>">Volver a inicio</a></center><br>
	</section>
	<?=$footer?>
</div>
</body>
</html>