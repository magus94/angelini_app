<style>
    .input-file {
        padding: 20px 50px;
        background-color: #2a328b;
        margin-top: 20px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #FFF;
    }

    .input-file:hover {
        opacity: 0.8;
    }

    .top {
        margin-top: 10px;
    }

</style>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Cadastrar Serviço</h1>
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
    <div class="row">
        <div class="col-md-12 card">
            <form action="<?= base_url('/servicos/salvar')?>" method="post" enctype="multipart/form-data">
                <div class="row justify-content-end">
                    <div class="col-md-12 top">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" required>
                    </div>

                    <div class="col-md-12 top">
                        <label for="subtitulo">Subtitulo</label>
                        <input type="text" class="form-control" name="subtitulo" id="subtitulo" required>
                    </div>

                    <div class="col-md-12 top">
                        <label for="info">Descrição: Máx. (250)</label>
                        <textarea name="info" id="info"  class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="col-md-2 top">
                        <a href="#" class="btn btn-danger btn-block" onclick="window.history.back()">Cancelar</a>
                    </div>

                    <div class="col-md-2 top">
                        <input type="submit" class="btn btn-success btn-block" value="Salvar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> <!-- .content -->