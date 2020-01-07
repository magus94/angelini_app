<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Corpo Técnico</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Corpo Técnico</li>
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
            <a href="<?= base_url('corpo_tecnico/cadastrar') ?>" class="btn btn-primary btn-block">Cadastrar Membro</a>
        </div>
    </div>

    <div class="row" style="margin-top: 15px;">
        <div class="col-md-12 card">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="15%">Imagem</th>
                    <th width="30%">Nome</th>
                    <th width="30%">Especialidade</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($corpo_tecnico as $tecnico) { ?>
                    <tr>
                        <td><?= $tecnico->idCorpoTecnico ?></td>
                        <td><img src="<?= base_url('assets/images/membros/'.$tecnico->foto) ?>" style="width: 50px;"></td>
                        <td><?= $tecnico->nome ?></td>
                        <td><?= $tecnico->especialidade ?></td>
                        <td>
                            <a class="btn btn-info" href="<?= base_url('corpo_tecnico/editar/'.$tecnico->idCorpoTecnico)?>"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger" href="#" onclick="apagarMembro(<?= $tecnico->idCorpoTecnico ?>)"><i class="fa fa-trash-o"></i> </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>







</div> <!-- .content -->


