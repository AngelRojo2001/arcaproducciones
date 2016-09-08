<?php $this->load->view('public/templates/header'); ?>
<?php $this->load->view('public/templates/slider'); ?>

<div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row text-center">
        <div class="col-lg-4">
            <img class="img-circle" src="<?= base_url('public/storage/perfil.jpg') ?>" height="140" width="140">
            <h2>Hno. Reynaldo Mujica</h2>
            <p>Consagrado a la obra de Dios... Bienaventurados los limpios de corazón porque ellos verán a Dios</p>
            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="<?= base_url('public/storage/teclado1.jpg') ?>" alt="Generic placeholder image" height="140" width="140">
            <h2>Provervios 17:17</h2>
            <p>En todo Tiempo ama al amigo y es como un hermano en tiempos de angustia</p>
            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="<?= base_url('public/storage/teclado2.jpg') ?>" alt="Generic placeholder image" height="140" width="140">
            <h2>Juan 3:16</h2>
            <p>Porque de tal manera amo Dios al mundo que a dado a su hijo unigenito para que todo aquel que en el crea no se pierda mas tenga vida eterna</p>
            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    
    <!-- START THE FEATURETTES -->
    <?php $this->load->view('public/publicacion') ?>
    
    <hr class="featurette-divider">
</div>
<!-- /END THE FEATURETTES -->

<?php $this->load->view('public/templates/footer'); ?>