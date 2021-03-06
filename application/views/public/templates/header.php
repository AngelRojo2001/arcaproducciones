<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/custom.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/default.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('public/css/nivo-slider.css'); ?>">
    <link rel="icon" type="image/icon" href="<?= base_url('public/favicon.ico'); ?>">

    <script type="text/javascript" src="<?= base_url('public/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('public/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('public/js/jquery.nivo.slider.js') ?>"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url(); ?>">
                    <img src="<?= base_url('public/img/logo.jpg') ?>" class="logo img-circle">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url() ?>">Inicio</a></li>
                    <li><a href="#">Quienes Somos</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Multimedia <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= site_url('welcome/audios') ?>">Audio</a>
                            </li>
                            <li><a href="<?= site_url('welcome/videos') ?>">Video</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?= site_url('welcome/cursos') ?>">Cursos</a></li>
                    <li><a href="<?= site_url('welcome/ventas') ?>">Ventas</a></li>
                    <li><a href="#">Contactos</a></li>
	            <?php if ($this->session->userdata('logued')) { ?>
                    <li class="dropdown iconos">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw fa-2x"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?= site_url('publicacion'); ?>"><i class="fa fa-gear fa-fw fa-2x"></i> Administrar</a></li>
                            <li class="divider"></li>
                            <li><a href="<?= site_url('login/logout'); ?>"><i class="fa fa-sign-out fa-fw fa-2x"></i> Salir</a></li>
                        </ul>
                    </li>
                    <?php } else { ?>
                    <li class="iconos"><a href="<?= site_url('login'); ?>"><i class="fa fa-lock fa-2x"></i></a></li>
                    <?php } ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    