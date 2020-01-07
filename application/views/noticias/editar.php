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
<script src="https://cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Editar Noticias</h1>
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
    <div class="row">
        <div class="col-md-12 card">
            <form action="<?= base_url('/noticias/atualizar')?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idNoticia" value="<?= $noticia[0]->idNoticia ?>" />
                <div class="row justify-content-end">
                    <div class="col-md-12 top">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $noticia[0]->titulo ?>" required>
                    </div>

                    <div class="col-md-12 top">
                        <label for="subtitulo">Subtitulo</label>
                        <input type="text" class="form-control" name="subtitulo" id="subtitulo" value="<?= $noticia[0]->subtitulo ?>" required>
                    </div>

                    <div class="col-md-12">
                        <input type="file" name="imagem" id="imagem" style="display: none;" />
                        <label for="imagem" class="input-file">
                            <i class="fa fa-image" style="margin-right: 5px;"></i>Editar Imagem
                        </label>
                    </div>


                    <div class="col-md-12 top">
                        <textarea name="texto" id="texto"  class="form-control" rows="30" required><?= $noticia[0]->texto ?></textarea>
                    </div>

                    <div class="col-md-2 top">
                        <a href="#" class="btn btn-danger btn-block" onclick="window.history.back()">Cancelar</a>
                    </div>

                    <div class="col-md-2 top">
                        <input type="submit" class="btn btn-info btn-block" value="Editar">
                    </div>
                </div>




            </form>
        </div>
    </div>
</div> <!-- .content -->

<script>

    CKEDITOR.replace( 'texto' );

</script>