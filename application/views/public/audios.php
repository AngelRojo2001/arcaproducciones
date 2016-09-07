<?php $this->load->view('public/templates/header'); ?>
<?php //$this->load->view('public/templates/slider'); ?>

<div class="container">
    <div class="row featurette">
        <div class="col-sm-3">
            <div class="col-lg-12" id="menu">
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Ministerios</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($ministerios as $ministerio): ?>
                            <tr>
                                <td>
                                    <a href="<?= site_url('welcome/audios2/'.$ministerio->ministerio) ?>"><?= $ministerio->ministerio; ?> <span class="badge"><?= $ministerio->cantidad; ?></span></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- endforeach -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-sm-9">
            <div class="col-lg-12" id="mostrar-audio">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($audios as $audio): ?>
                            <tr>
                                <td><?= $audio->titulo; ?></td>
                                <td><?= $audio->url_audio; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <!-- endforeach -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <br>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(iniciar);

    function iniciar() {
        var x = $('#menu a');
        x.click(leer);
    }

    function leer() {
        var direccion = $(this).attr('href');
        var x = $('#mostrar-audio');
        x.load(direccion);
        return false;
    }
</script>

<?php $this->load->view('public/templates/footer'); ?>