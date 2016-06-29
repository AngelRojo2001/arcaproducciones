<?php $this->load->view('admin/templates/header'); ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Publicación</h1>
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
                        <?= form_open_multipart('publicacion/agregar'); ?>
                            <?php $this->load->view('admin/publicacion/form.php') ?>
                            <div class="form-group">
                                <?= form_label('Imagen', 'imagen'); ?>
                                <?= form_upload('imagen', ''); ?>
                                <?php
                                if(isset($error)){
                                    echo '<span style="color:red;">' . $error . '</span>';
                                }
                                ?>
                            </div>
                            <?= form_submit('', 'Agregar Publicación', ['class'=>'btn btn-success']); ?>
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