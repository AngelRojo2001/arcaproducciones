<?php $this->load->view('public/templates/header'); ?>

<header>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="public/img/arca1.jpg" alt="Imagen 1">
	      <div class="carousel-caption">
	        <p></p>
	      </div>
	    </div>
	    <div class="item">
	      <img src="public/img/arca2.jpg" alt="Imagen 2">
	      <div class="carousel-caption">
	        <p></p>
	      </div>
	    </div>
      <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Anterior</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Siguiente</span>
	  </a>
	</div>
</header>
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
      <div class="col-md-7 <?= ($sw != 0)?'col-md-push-5':'' ?>">
        <h2 class="featurette-heading"><?= $publicacion->titulo; ?> <span class="text-muted"><?= $publicacion->subtitulo; ?></span></h2>
        <p class="lead"><?= $publicacion->descripcion; ?></p>
      </div>
      <div class="col-md-5 <?= ($sw != 0)?'col-md-pull-7':'' ?>">
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