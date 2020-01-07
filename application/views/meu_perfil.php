<style>
    .top {
        margin-top: 15px;
    }

    .bottom {
        margin-bottom: 20px;
    }
</style>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Meu Perfil</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Perfil</li>
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
            <form action="<?= base_url('home/salvar_perfil')?>" method="post" id="formMeuPerfil">
                <div class="row">
                    <div class="col-md-6 top">
                        <label for="first_name">Nome</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" value="<?= $user->first_name ?>" >
                    </div>

                    <div class="col-md-6 top">
                        <label for="last_name">Sobrenome</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" value="<?= $user->last_name ?>" >
                    </div>

                    <div class="col-md-12 top">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?= $user->email ?>" readonly>
                    </div>

                    <div class="col-md-6 top">
                        <label for="password">Senha - (Somente se desejar alterar)</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="col-md-6 top">
                        <label for="check_pass">Confirme a Senha</label>
                        <input type="password" name="check_pass" id="check_pass" class="form-control">
                    </div>

                    <div class="col-md-12 top" id="error_pass" style="display: none;">
                        <div class="alert alert-danger">
                            <strong>As Senhas estão divergentes!</strong>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-end">
                    <div class="col-md-2 top bottom">
                        <input type="submit" value="Atualizar" class="btn btn-info btn-block">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div> <!-- .content -->

<script>
    $(document).ready(function () {
        $('#check_pass').blur(function () {
            const check_pass = $(this).val();
            const pass = $('#password').val();

            if (check_pass !== pass){
                $('#error_pass').show()
                $('input[type="submit"').attr('disabled', true);
            }else{
                $('#error_pass').hide()
                $('input[type="submit"').attr('disabled', false);

            }
        })
    })
</script>
