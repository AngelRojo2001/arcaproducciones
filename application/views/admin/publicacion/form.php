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