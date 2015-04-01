<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listado de Contactos</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap/bootstrap.min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap/bootstrap-theme.min.css"); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/bootstrap.min.js"); ?>"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Listado de usuarios</h1>
			<div id="col-xs-12">
				<p>
					<?php if(empty($resultado)) { ?>
						<h1>no hay datos almacenados</h1> 
					<?php } else { ?>
						<h3>
						<p>Tienes <?php echo count($resultado).' contacto(s).'; ?> </p>
						<p>Tabla de Usuarios: </p></h3>
						<table class="table table-striped table-bordered table-hover table-condensed">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre del contacto</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($resultado as $contacto => $value) { ?>
								<tr>
									<td><?php echo $value->con_id; ?></td>
									<td><?php echo $value->con_nombre; ?></td>
									<td>
										<a class="btn btn-primary btn-sm"href="<?php echo base_url() ?>index.php/contactos/editar/<?php echo $value->con_id ?>" >Editar</a>
										<a class="btn btn-primary btn-sm"href="<?php echo base_url() ?>index.php/contactos/eliminar/<?php echo $value->con_id ?>" >Eliminar</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>	
					<?php }?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<a class="btn btn-info" href="<?php echo base_url() ?>index.php/contactos">Home</a>
				<a class="btn btn-info" href="<?php echo base_url() ?>index.php/contactos/agregar">Nuevo Contacto</a>
			</div>
		</div>
	</div>
</body>
</html>