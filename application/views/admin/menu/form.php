<div class="form-group">
    <?= form_label('Posición', 'posicion'); ?>
    <?= form_input('posicion', set_value('posicion',@$publicacion->titulo), ['class'=>'form-control', 'placeholder'=>'Ingresar Posición']); ?>
    <?= form_error('posicion', '<span style="color:red;">', '</span>') ?>
</div>
<div class="form-group">
    <?= form_label('Nombre', 'nombre'); ?>
    <?= form_input('nombre', set_value('nombre',@$publicacion->subtitulo), ['class'=>'form-control', 'placeholder'=>'Ingresar Nombre']); ?>
    <?= form_error('nombre', '<span style="color:red;">', '</span>') ?>
</div>
<div class="form-group">
    <?= form_label('Ruta', 'ruta'); ?>
    <?= form_input('ruta', set_value('ruta',@$publicacion->descripcion), ['class'=>'form-control', 'placeholder'=>'Ingresar Ruta']); ?>
    <?= form_error('ruta', '<span style="color:red;">', '</span>'); ?>
</div>
<div class="form-group">
    <?= form_label('Icono', 'icono'); ?>
    <?= form_input('icono', set_value('icono',@$publicacion->titulo), ['class'=>'form-control', 'placeholder'=>'Ingresar Icono']); ?>
    <?= form_error('icono', '<span style="color:red;">', '</span>') ?>
</div>
<?php
$categoria = array(
    '2' => 'Administrador',
    '1' => 'Super Administrador'
);
?>
<div class="form-group">
    <?= form_label('Categoría', 'categoria'); ?>
    <?= form_dropdown('categoria', $categoria, set_value('categoria',@$publicacion->subtitulo), ['class'=>'form-control']); ?>
</div>