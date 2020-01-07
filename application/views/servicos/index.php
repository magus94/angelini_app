<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Ver Serviços</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Serviços</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">

    <?php
        if($this->session->message){
            echo $this->session->message;
        }
    ?>

    <div class="row justify-content-end">
        <div class="col-md-2">
            <a href="<?= base_url('servicos/cadastrar') ?>" class="btn btn-primary btn-block">Cadastrar Serviço</a>
        </div>
    </div>

    <div class="row" style="margin-top: 15px;">
        <div class="col-md-12 card">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="25%">Serviço</th>
                    <th width="20%">Subtitulo</th>
                    <th width="40%">Descrição</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($servicos as $servico) { ?>
                    <tr>
                        <td><?= $servico->idServicos ?></td>
                        <td><?= $servico->titulo ?></td>
                        <td><?= $servico->subtitulo ?></td>
                        <td><?= $servico->info ?></td>
                        <td>
                            <a class="btn btn-info" href="<?= base_url('servicos/editar/'.$servico->idServicos )?>"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger" href="#" onclick="apagarServico(<?= $servico->idServicos ?>)"><i class="fa fa-trash-o"></i> </a>
                        </td>
                    </tr>

                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>







</div> <!-- .content -->


