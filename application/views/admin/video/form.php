<div class="form-group">
    <?= form_label('Título', 'titulo'); ?>
    <?= form_input('titulo', set_value('titulo',@$video->titulo), ['class'=>'form-control', 'placeholder'=>'Ingresar Título']); ?>
    <?= form_error('titulo', '<span style="color:red;">', '</span>') ?>
</div>
<div class="form-group">
    <?= form_label('Autor', 'autor'); ?>
    <?= form_input('autor', set_value('autor',@$video->autor), ['class'=>'form-control', 'placeholder'=>'Ingresar Autor']); ?>
    <?= form_error('autor', '<span style="color:red;">', '</span>') ?>
</div>
<div class="form-group">
    <?= form_label('URL del Video', 'url_video'); ?>
    <?= form_input('url_video', set_value('url_video',@$video->url_video), ['class'=>'form-control', 'placeholder'=>'Ingresar URL del Video']); ?>
    <?= form_error('url_video', '<span style="color:red;">', '</span>') ?>
</div>