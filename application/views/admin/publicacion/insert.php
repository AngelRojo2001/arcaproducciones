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
                        <?php
                        if(isset($error)){
                            echo $error;
                        }
                        ?>
                        <?= validation_errors(); ?>
                        <?= form_open_multipart(); ?>
                            <div class="form-group">
                                <?= form_label('Título', 'titulo'); ?>
                                <?= form_input('titulo', set_value('titulo',@$publicacion->titulo), ['class'=>'form-control', 'placeholder'=>'Ingresar Título']); ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Subtítulo', 'subtitulo'); ?>
                                <?= form_input('subtitulo', set_value('subtitulo',@$publicacion->subtitulo), ['class'=>'form-control', 'placeholder'=>'Ingresar Subtítulo']); ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Descripción', 'descripcion'); ?>
                                <?= form_textarea(['name'=>'descripcion', 'rows'=>'3'], set_value('descripcion',@$publicacion->descripcion), ['class'=>'form-control', 'placeholder'=>'Ingresar Descripción']); ?>
                            </div>
                            <div class="form-group">
                                <?= form_label('Imagen', 'imagen'); ?>
                                <?= form_upload('imagen', ''); ?>
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