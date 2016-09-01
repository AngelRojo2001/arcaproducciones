<?php $this->load->view('public/templates/header'); ?>
<?php $this->load->view('public/templates/slider'); ?>

<div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row text-center">
        <div class="col-lg-4">
            <img class="img-circle" src="public/img/perfil.jpg" height="140" width="140">
            <h2>Hno. Reynaldo Mujica</h2>
            <p>Consagrado a la obra de Dios... Bienaventurados los limpios de corazón porque ellos verán a Dios</p>
            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="public/img/teclado1.jpg" alt="Generic placeholder image" height="140" width="140">
            <h2>Provervios 17:17</h2>
            <p>En todo Tiempo ama al amigo y es como un hermano en tiempos de angustia</p>
            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="public/img/teclado2.jpg" alt="Generic placeholder image" height="140" width="140">
            <h2>Juan 3:16</h2>
            <p>Porque de tal manera amo Dios al mundo que a dado a su hijo unigenito para que todo aquel que en el crea no se pierda mas tenga vida eterna</p>
            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    
    <!-- START THE FEATURETTES -->
    <?php $sw = 0; ?>
    <?php foreach ($publicaciones as $publicacion) : ?>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-5 <?= ($sw != 0)?'col-md-push-7':'' ?>">
            <h2 class="featurette-heading"><?= $publicacion->titulo; ?> <span class="text-muted"><?= $publicacion->subtitulo; ?></span></h2>
            <p class="lead text-justify"><?= $publicacion->descripcion; ?></p>
        </div>
        <div class="col-md-7 <?= ($sw != 0)?'col-md-pull-5':'' ?>">
            <img data-holder-rendered="true" src="public/img/<?= $publicacion->imagen; ?>" class="featurette-image img-responsive center-block" alt="500x500">
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
    
    <hr class="featurette-divider">
</div>
<!-- /END THE FEATURETTES -->

<?php $this->load->view('public/templates/footer'); ?>