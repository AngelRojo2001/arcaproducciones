<?php $this->load->view('public/templates/header'); ?>
<?php //$this->load->view('public/templates/slider'); ?>

<div class="container">
    <div class="row featurette">
        <br>
        <?php foreach ($videos as $video): ?>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-film fa-fw"></i> <?= $video->titulo . ' - ' . $video->autor; ?>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <?php
                            $enlaces = explode('=', $video->url_video);
                            $link = explode('&', $enlaces[1]);
                            ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/<?= $link[0]; ?>" frameborder="0" allowfullscreen></iframe>
                            </div>
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
</div>

<?php $this->load->view('public/templates/footer'); ?>