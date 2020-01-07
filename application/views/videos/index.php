<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Ver Videos</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Videos</li>
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
            <a href="<?= base_url('videos/cadastrar') ?>" class="btn btn-primary btn-block">Cadastrar Video</a>
        </div>
    </div>

    <div class="row" style="margin-top: 15px;">
        <div class="col-md-12 card">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="40%">Video</th>
                    <th width="40%">Url</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($videos as $video) { ?>
                    <tr>
                        <td><?= $video->idVideos ?></td>
                        <td>
                            <iframe width="420" height="315" src="https://www.youtube.com/embed/<?= $video->url_curta?>" frameborder="0" allowfullscreen></iframe>
                        </td>
                        <td><?= $video->url ?></td>
                        <td>
                            <a class="btn btn-danger" href="#" onclick="apagarVideo(<?= $video->idVideos ?>)"><i class="fa fa-trash-o"></i> </a>
                        </td>
                    </tr>

                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>







</div> <!-- .content -->


