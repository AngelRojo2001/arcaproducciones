<?php $this->load->view('public/templates/header'); ?>

<div class="container login">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Iniciar Sesión</h3>
                </div>
                <div class="panel-body">
                    <?= form_open('login/user_verificate'); ?>
                        <div class="form-group">
                            <?= form_label('E-mail', 'email'); ?>
                            <?= form_input('email', '', ['class'=>'form-control', 'placeholder'=>'E-mail']); ?>
                            <?= form_error('email', '<span style="color:red;">', '</span>'); ?>
                        </div>
                        <div class="form-group">
                            <?= form_label('Password', 'password'); ?>
                            <?= form_password('password', '', ['class'=>'form-control', 'placeholder'=>'Password']); ?>
                            <?= form_error('password', '<span style="color:red;">', '</span>'); ?>
                        </div>
                        <div class="form-group">
                            <?= form_submit('login', 'Login', ['class'=>'btn btn-success btn-block']); ?>
                        </div>
                        <?php if ($this->session->flashdata('usuario_incorrecto')): ?>
                            <p><?= $this->session->flashdata('usuario_incorrecto') ?></p>
                        <?php endif; ?>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('public/templates/footer'); ?>