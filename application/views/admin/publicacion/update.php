<?php $this->load->view('admin/templates/header'); ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Editar Publicación</h1>
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
                        <?php if ($publicacion->imagen == NULL) { ?>
                            <?= form_open_multipart('publicacion/editar/'.$publicacion->id); ?>
                        <?php } else { ?>
                            <?= form_open('publicacion/editar/'.$publicacion->id); ?>
                        <?php } ?>
                        
                            <?php $this->load->view('admin/publicacion/form.php') ?>
                            <?php if ($publicacion->imagen == NULL) { ?>
                                <div class="form-group">
                                    <?= form_label('Imagen', 'imagen'); ?>
                                    <?= form_upload('imagen', ''); ?>
                                    <?php
                                    if(isset($error)){
                                        echo '<span style="color:red;">' . $error['error'] . '</span>';
                                    }
                                    ?>
                                </div>
                            <?php } else { ?>
                                <div class="form-group">
                                    <img src="<?= base_url('public/img/'.$publicacion->imagen); ?>" class="img-responsive">
                                    <a href="<?= site_url('publicacion/eliminar_imagen/'.$publicacion->id); ?>" class="btn btn-danger" id="btn-eliminar">Eliminar Imagen</a>
                                </div>
                            <?php } ?>
                            
                            <?= form_submit('', 'Editar Publicación', ['class'=>'btn btn-success']); ?>
                        <?= form_close(); ?>
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