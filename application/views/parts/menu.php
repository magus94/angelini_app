<!-- Left Panel -->

<?php $user = $this->ion_auth->user()->row(); ?>

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./">Angelo Pessini Advogados</a>
            <a class="navbar-brand hidden" href="./">AP</a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?= base_url(); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Gerenciamento App</h3><!-- /.menu-title -->
                <li>
                    <a href="<?= base_url('/noticias') ?>"> <i class="menu-icon fa fa-newspaper-o"></i>Notícias </a>
                </li>

                <li>
                    <a href="<?= base_url('/corpo_tecnico') ?>"> <i class="menu-icon fa fa-users"></i>Corpo Técnico </a>
                </li>

                <li>
                    <a href="<?= base_url('/feedback') ?>"> <i class="menu-icon fa fa-handshake-o"></i>Feedback de Clientes </a>
                </li>

                <li>
                    <a href="<?= base_url('/servicos') ?>"> <i class="menu-icon fa fa-server"></i>Nossos Serviços </a>
                </li>

                <li>
                    <a href="<?= base_url('/videos') ?>"> <i class="menu-icon fa fa-youtube"></i>Videos </a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">

                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="<?= base_url('images/admin.jpg') ?>" title="<?= $user->first_name.' '.$user->last_name?>" alt="<?= $user->first_name.' '.$user->last_name?>">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="<?= base_url('home/meu_perfil') ?>"><i class="fa fa-user"></i> Meu Perfil</a>
                        <a class="nav-link" href="<?= base_url('login/logout') ?>"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

<!--    <div class="breadcrumbs">-->
<!--        <div class="col-sm-4">-->
<!--            <div class="page-header float-left">-->
<!--                <div class="page-title">-->
<!--                    <h1>Dashboard</h1>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-sm-8">-->
<!--            <div class="page-header float-right">-->
<!--                <div class="page-title">-->
<!--                    <ol class="breadcrumb text-right">-->
<!--                        <li class="active">Dashboard</li>-->
<!--                    </ol>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->