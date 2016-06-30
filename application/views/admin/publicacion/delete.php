<?php $this->load->view('admin/templates/header'); ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Eliminar Publicación</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-edit fa-fw"></i> Publicación
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <h1><?= $publicacion->titulo; ?></h1>
                        <h2><?= $publicacion->subtitulo; ?></h2>
                        <p><?= $publicacion->descripcion; ?></p>
                        <img src="<?= base_url('public/img/'.$publicacion->imagen); ?>" class="img-responsive">
                        <?= form_open('publicacion/eliminar/'.$publicacion->id); ?>
                            <?= form_submit('eliminar', 'Eliminar Publicación', ['class'=>'btn btn-danger']); ?>
                        <?= form_close() ?>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

<?php $this->load->view('admin/templates/footer'); ?>