<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Contato</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Contatos</li>
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

    <div class="row" style="margin-top: 15px;">
        <div class="col-md-12 card">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="20%">Nome</th>
                    <th width="25%">Email</th>
                    <th width="30%">Telefone</th>
                    <th width="30%">Data</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($agendamento as $a) { ?>
                    <tr>
                        <td><?= $a->idAgendamento ?></td>
                        <td><?= $a->nome ?></td>
                        <td><?= $a->email ?></td>
                        <td><?= $a->telefone ?></td>
                        <td><?= $a->data ?></td>
                        <td>
                            <a class="btn btn-danger" href="#" onclick="apagarAgendamento(<?= $a->idAgendamento ?>)"><i class="fa fa-trash-o"></i> </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>







</div> <!-- .content -->


