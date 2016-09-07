<div class="form-group">
    <?= form_label('Título', 'titulo'); ?>
    <?= form_input('titulo', set_value('titulo',@$audio->titulo), ['class'=>'form-control', 'placeholder'=>'Ingresar Título']); ?>
    <?= form_error('titulo', '<span style="color:red;">', '</span>') ?>
</div>
<div class="form-group">
    <?= form_label('Ministerio', 'ministerio'); ?>
    <?= form_input('ministerio', set_value('ministerio',@$audio->ministerio), ['class'=>'form-control', 'placeholder'=>'Ingresar Ministerio']); ?>
    <?= form_error('ministerio', '<span style="color:red;">', '</span>') ?>
</div>
<div class="form-group">
    <?= form_label('URL', 'url_audio'); ?>
    <?= form_textarea(['name' => 'url_audio', 'rows' => '3'], @$audio->url_audio, ['class'=>'form-control', 'placeholder'=>'Ingresar URL del Audio']); ?>
    <?= form_error('url_audio', '<span style="color:red;">', '</span>') ?>
</div>