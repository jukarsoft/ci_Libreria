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
				<h1>MENU DE OPCIONES</h1>
				<a href="<?=base_url()?>inicio/consulta">Consulta</a><br><br>
				<a href="<?=base_url()?>inicio/alta">Alta</a><br><br>	
				<a href="<?=base_url()?>inicio/baja">Baja</a><br><br>	
				<a href="<?=base_url()?>inicio/modificacion">Modificación</a><br><br>
				</div>
		</section>
			<?=$footer?>	
	</body>

</html>
