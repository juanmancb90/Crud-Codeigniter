<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de Contactos</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap/bootstrap.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap/bootstrap-theme.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
  <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/jquery.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/bootstrap.min.js"); ?>"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <h1>Formulario de Contactos</h1>
      <div class="col-xs-12">
        <?php
        $atrib = array('role' => 'form',);

        $input_con_email = array(
                      'name'        => 'con_email',
                      'id'          => 'con_email',
                      'type'        => 'email',
                      'class'       => 'form-control',
                      'placeholder' => 'Ingrese el correo',
                      'maxlength'   => '120',
                      'size'        => '100',
                      'value'       => set_value('con_email', @$datos[0]->con_email),
                    );
              
        $input_con_nombre = array(
                      'name'        => 'con_nombre',
                      'id'          => 'con_nombre',
                      'type'        => 'text',
                      'class'       => 'form-control',
                      'placeholder' => 'Ingrese el nombre del contacto',
                      'maxlength'   => '60',
                      'size'        => '50',
                      'value'       => set_value('con_nombre', @$datos[0]->con_nombre),
                    );
              
        $input_con_telefono = array(
                      'name'        => 'con_telefono',
                      'id'          => 'con_telefono',
                      'type'        => 'text',
                      'class'       => 'form-control',
                      'placeholder' => 'Ingrese el telefono',
                      'maxlength'   => '20',
                      'size'        => '20',
                      'value'       => set_value('con_telefono', @$datos[0]->con_telefono),
                    );
              
        $input_con_edad = array(
                      'name'        => 'con_edad',
                      'id'          => 'con_edad',
                      'type'        => 'number',
                      'class'       => 'form-control',
                      'placeholder' => 'Ingrese la edad',
                      'maxlength'   => '3',
                      'size'        => '4',
                      'value'       => set_value('con_edad', @$datos[0]->con_edad),
                    );
              
        $mis_status = array(
                      '0'       => 'Inactivo',
                      '1'       => 'Activo',
                      );

        $selOptions = 'class="form-control"';

        $btnOptions = array(
                      'id'    => 'btn_guardar',
                      'name'  => 'btn_guardar',
                      'class' => 'btn btn-default',
                      'value' => 'Guardar',
                      );
       
        ?>
        <?php //echo validation_errors(); ?>
        <?php echo form_open('',$atrib); ?>
        <div class="form-group">
          <?php echo form_label('Email:','lbl_email'); ?>
          <?php echo form_input($input_con_email); ?>
          <?php echo form_error('con_email'); ?>
        </div> 
        <div class="form-group">
          <?php echo form_label('Nombre:','lbl_nombre'); ?>
          <?php echo form_input($input_con_nombre); ?> 
          <?php echo form_error('con_nombre'); ?>
        </div>
        <div class="form-group">
          <?php echo form_label('Telefono:','lbl_teleono'); ?>
          <?php echo form_input($input_con_telefono); ?> 
          <?php echo form_error('con_telefono'); ?>
        </div>
        <div class="form-group">
          <?php echo form_label('Edad:','lbl_edad'); ?>
          <?php echo form_input($input_con_edad); ?> 
          <?php echo form_error('con_edad'); ?>
        </div>
        <div class="form-group">
          <?php echo form_label('Estatus:','lbl_status'); ?>
          <?php echo form_dropdown('con_estatus', $mis_status, set_value('con_estatus', @$datos[0]->con_estatus), $selOptions); ?>
        </div>
          <?php echo form_submit($btnOptions); ?><br><br>
          <?php echo form_close(); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="list-group">
          <a class="btn btn-info" href="<?php echo base_url() ?>index.php/contactos">Home</a>
          <a class="btn btn-info" href="<?php echo base_url() ?>index.php/contactos/listar">Listar</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

