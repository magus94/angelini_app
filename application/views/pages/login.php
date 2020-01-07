<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?= base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendors/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendors/themify-icons/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendors/flag-icon-css/css/flag-icon.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendors/selectFX/css/cs-skin-elastic.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendors/jqvmap/dist/jqvmap.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body style="background-color: #2a328b">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="../index.html">
                    <img src="<?= base_url('/images/angelo-pessini.png') ?>" alt="">
                </a>
            </div>
            <?php

            if ($this->session->message){
                echo "<div class='alert alert-danger'>";
                echo "<p align='center'>".$this->session->message."</p>";
                echo "</div>";
            }

            ?>

            <div class="login-form">
                <form action="<?= base_url('/login/logar')?>" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" placeholder="Senha" name="password">
                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">ENTRAR</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="<?= base_url('vendors/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?= base_url('vendors/popper.js/dist/umd/popper.min.js') ?>"></script>
<script src="<?= base_url('vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>


</body>

</html>
