<?php $sw = 0; ?>
<?php foreach ($publicaciones as $publicacion): ?>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-5 <?= ($sw != 0)?'col-md-push-7':'' ?>">
            <h2 class="featurette-heading"><?= $publicacion->titulo; ?> <span class="text-muted"><?= $publicacion->subtitulo; ?></span></h2>
            <p class="lead text-justify"><?= $publicacion->descripcion; ?></p>
        </div>
        <div class="col-md-7 <?= ($sw != 0)?'col-md-pull-5':'' ?>">
            <img data-holder-rendered="true" src="<?= base_url('public/storage/'.$publicacion->imagen) ?>" class="featurette-image img-responsive center-block image-crecer" alt="500x500">
        </div>
    </div>
    <?php
    if ($sw == 0) {
        $sw = 1;
    } else {
        $sw = 0;
    }
    ?>
<?php endforeach; ?>