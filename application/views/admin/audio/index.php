<?php $this->load->view('admin/templates/header'); ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Audio</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <a href="<?= site_url('audio/crear') ?>" class="btn btn-success">Agregar Audio</a>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <?php foreach ($audios as $audio): ?>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-music fa-fw"></i> <?= $audio->titulo . ' - ' . $audio->ministerio; ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-lg-5">
                                <h1><?= $audio->titulo; ?></h1>
                                <h2><?= $audio->ministerio; ?></h2>
                            </div>
                            <div class="col-lg-7">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <?= $audio->url_audio; ?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <a href="<?= site_url('audio/editar/'.$audio->id); ?>" class="btn btn-warning">Editar</a>
                                <a href="<?= site_url('audio/eliminar/'.$audio->id); ?>" class="btn btn-danger btn-eliminar">Eliminar</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            <?php endforeach; ?>
            <!-- endforeach -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

<?php $this->load->view('admin/templates/footer'); ?>