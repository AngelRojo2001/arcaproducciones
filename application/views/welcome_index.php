<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arca Producciones</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/custom.css">
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
    	<div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Arca Producciones</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav navbar-right">
	                <li><a href="#">Nosotros</a></li>
	                <li><a href="#">Contacto</a></li>
	                <li class="iconos"><a href="#"><i class="fa fa-facebook-square fa-1x"></i></a></li>
	                <li class="iconos"><a href="#"><i class="fa fa-envelope fa-1x"></i></a></li>
	                <li class="dropdown iconos">
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	                        <i class="fa fa-share-alt-square fa-1x"></i>
	                    </a>
	                    <ul class="dropdown-menu">
	                        <!-- generado por http://www.sharelinkgenerator.com/ -->
	                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//web.facebook.com/danny.almanzaamaru" target="_blank"><i class="fa fa-facebook-square fa-2x"></i> Comparte en Facebook</a></li>
	                        <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i> Comparte en Twitter</a></li>
	                        <li><a href="#"><i class="fa fa-linkedin-square fa-2x"></i> Comparte en LinkedIn</a></li>
	                    </ul>
	                </li>
	            </ul>
	        </div><!--/.nav-collapse -->
      	</div>
    </nav>

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
    	      <img src="public/img/arca1.jpg" alt="Imagen 1" height="50">
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
    	    <span class="sr-only">Previous</span>
    	  </a>
    	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    	    <span class="sr-only">Next</span>
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
          <p>En todo Tiempo ama al amigo y es como un hermano en tiempos de angustiA</p>
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
          <div class="col-md-7 <?php echo ($sw != 0)?'col-md-push-5':'' ?>">
            <h2 class="featurette-heading"><?php echo $publicacion->titulo; ?> <span class="text-muted"><?php echo $publicacion->subtitulo; ?></span></h2>
            <p class="lead"><?php echo $publicacion->descripcion; ?></p>
          </div>
          <div class="col-md-5 <?php echo ($sw != 0)?'col-md-pull-7':'' ?>">
            <img data-holder-rendered="true" src="public/img/<?php echo $publicacion->imagen; ?>" class="featurette-image img-responsive center-block" alt="500x500">
          </div>
        </div>
        <?php $sw = 1; ?>
      <?php endforeach; ?>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Arriba</a></p>
        <p>&copy; 2016 Alejandra Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->
    <script type="text/javascript" src="public/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
</body>
</html>