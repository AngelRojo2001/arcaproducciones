<?php $this->load->view('admin/templates/header'); ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Publicaciones</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <a href="<?= site_url('publicacion/agregar') ?>" class="btn btn-success">Agregar Publicación</a>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <?php foreach ($publicaciones as $publicacion) { ?>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comment fa-fw"></i> <?= $publicacion->titulo . ' - ' . $publicacion->subtitulo; ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-lg-7">
                                <?= $publicacion->descripcion; ?>
                            </div>
                            <div class="col-lg-5">
                                <img src="<?= base_url('public/img/'.$publicacion->imagen); ?>" class="img-responsive">
                            </div>
                            <div class="col-lg-12">
                                <a href="<?= site_url('publicacion/editar/'.$publicacion->id); ?>" class="btn btn-warning">Editar</a>
                                <a href="<?= site_url('publicacion/eliminar/'.$publicacion->id); ?>" class="btn btn-danger" id="btn-eliminar">Eliminar</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            <?php } ?>
            <!-- endforeach -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

<?php $this->load->view('admin/templates/footer'); ?>