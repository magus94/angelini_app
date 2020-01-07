<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Ver Noticias</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Noticias</li>
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
            <a href="<?= base_url('noticias/cadastrar') ?>" class="btn btn-primary btn-block">Cadastrar Notícia</a>
        </div>
    </div>

    <div class="row" style="margin-top: 15px;">
        <div class="col-md-12 card">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="15%">Imagem</th>
                    <th width="30%">Titulo</th>
                    <th width="30%">Subtitulo</th>
                    <th width="10%">Data</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($noticias as $noticia) { ?>
                    <tr>
                        <td><?= $noticia->idNoticia ?></td>
                        <td><img src="<?= base_url('assets/images/noticias/'.$noticia->imagem) ?>" style="width: 50px;"></td>
                        <td><?= $noticia->titulo ?></td>
                        <td><?= $noticia->subtitulo ?></td>
                        <td><?= date('d/m/Y H:i:s', strtotime($noticia->data)) ?></td>
                        <td>
                            <a class="btn btn-info" href="<?= base_url('noticias/editar/'.$noticia->idNoticia)?>"><i class="fa fa-edit"></i> </a>
                            <a class="btn btn-danger" href="#" onclick="apagarNoticia(<?= $noticia->idNoticia ?>)"><i class="fa fa-trash-o"></i> </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>







</div> <!-- .content -->


