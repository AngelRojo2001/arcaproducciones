<?php $this->load->view('admin/templates/header'); ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Editar Audio</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-edit fa-fw"></i> Audio
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <?= form_open('audio/editar/'.$audio->id); ?>
                            <?php $this->load->view('admin/audio/form.php') ?>
                            <?= form_submit('editar', 'Editar Audio', ['class'=>'btn btn-success']); ?>
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