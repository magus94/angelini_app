<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Feedback</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Feedback</li>
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
            <a href="<?= base_url('feedback/cadastrar') ?>" class="btn btn-primary btn-block">Cadastrar Feedback</a>
        </div>
    </div>

    <div class="row" style="margin-top: 15px;">
        <div class="col-md-12 card">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="30%">Nome</th>
                    <th width="30%">Cidade</th>
                    <th width="30%">Mensagem</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($feedback as $feed) { ?>
                    <tr>
                        <td><?= $feed->idFeedback ?></td>
                        <td><?= $feed->nome ?></td>
                        <td><?= $feed->cidade ?></td>
                        <td><?= $feed->mensagem ?></td>
                        <td>
                            <a class="btn btn-danger" href="#" onclick="apagarFeedback(<?= $feed->idFeedback ?>)"><i class="fa fa-trash-o"></i> </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>







</div> <!-- .content -->


