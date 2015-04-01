<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contactos</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap/bootstrap.min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap/bootstrap-theme.min.css"); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/bootstrap.min.js"); ?>"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<h1>View Controlador Contactos</h1>
		<div class="col-xs-12" id="body">
			<p>Test de la funcion test() en el controlador</p>
			<br>
			<p>Probando variable=> <?php echo $nombre.' '."Esto se paso como variable"; ?> </p>
			<br>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="list-group"`>
	          <a class="btn btn-info" href="<?php echo base_url() ?>index.php/contactos">Home</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>