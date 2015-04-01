<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap/bootstrap.min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap/bootstrap-theme.min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/bootstrap.min.js"); ?>"></script>
</head>
<body>
	<div class="container">
		<div class="row" id>
			<h1>Hola bienvenido al home de Contactos</h1>
			<div id="col-xs-12">
				<p>Mini CRUD creado con Codeigniter v2.2.1</p>
				<p>Vista:</p>
				<code>application/views/view_home_contactos.php</code>
				<br>
				<br>
				<p>Controlador:</p>
				<code>application/controllers/contactos.php</code>
				<br>
				<br>
				<div id="list-group">
					<p>Comenzar like a boss:</p>
					<a class="list-group-item active" href="<?php echo base_url(); ?>index.php/contactos/listar">Start!!!!</a>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>