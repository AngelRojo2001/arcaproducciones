<div class="form-group">
    <?= form_label('Título', 'titulo'); ?>
    <?= form_input('titulo', set_value('titulo',@$publicacion->titulo), ['class'=>'form-control', 'placeholder'=>'Ingresar Título']); ?>
    <?= form_error('titulo', '<span style="color:red;">', '</span>') ?>
</div>
<div class="form-group">
    <?= form_label('Subtítulo', 'subtitulo'); ?>
    <?= form_input('subtitulo', set_value('subtitulo',@$publicacion->subtitulo), ['class'=>'form-control', 'placeholder'=>'Ingresar Subtítulo']); ?>
    <?= form_error('subtitulo', '<span style="color:red;">', '</span>') ?>
</div>
<div class="form-group">
    <?= form_label('Descripción', 'descripcion'); ?>
    <?= form_textarea(['name'=>'descripcion', 'rows'=>'3'], set_value('descripcion',@$publicacion->descripcion), ['class'=>'form-control', 'placeholder'=>'Ingresar Descripción']); ?>
</div>
<div class="form-group">
    <?= form_radio('categoria', 'Cursos',  set_radio('categoria', 'Cursos', isset($publicacion)?($publicacion->categoria=='Cursos'?TRUE:FALSE):TRUE), ['id' => 'cursos']) ?>
    <?= form_label('Cursos', 'cursos')?>
    <?= form_radio('categoria', 'Ventas',  set_radio('categoria', 'Ventas', isset($publicacion)?($publicacion->categoria=='Ventas'?TRUE:FALSE):FALSE), ['id' => 'ventas']) ?>
    <?= form_label('Ventas', 'ventas')?>
    <?= form_error('categoria', '<span style="color:red;">', '</span>') ?>
</div>