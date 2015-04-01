<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eliminar Contactos</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap/bootstrap.min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap/bootstrap-theme.min.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/plugins/bootstrap.min.js"); ?>"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<h1>Eliminar Contacto</h1>
		<div class="col-xs-12">
			<p>Estás seguro de eliminar el contacto: <b><?php echo $datos[0]->con_nombre; ?></b></p>
			<?php $input_con_id = array('con_id' => $datos[0]->con_id,); ?>
			<?php
			$atrib = array('role' => 'form',); 
			$btnOptions = array(
                      'id'    => 'btn_guardar',
                      'name'  => 'btn_guardar',
                      'class' => 'btn btn-default',
                      'value' => 'Si Eliminar!',
                      );
			?>
			<?php echo form_open(); ?>
			<div class="form-group">
			<?php echo form_hidden($input_con_id); ?><br>
			</div>
			<div class="form-group">
			<?php echo form_submit($btnOptions); ?>
			</div>
			<?php echo form_close(); ?>	
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="list-group"`>
	          <a class="btn btn-info" href="<?php echo base_url() ?>index.php/contactos">Home</a>
	          <a class="btn btn-info" href="<?php echo base_url() ?>index.php/contactos/listar">Listar</a>
			</div>
		</div>
	</div>
	
</div>

</body>
</html>
