<?php include('cabecalhoAdmin.php'); ?>

<div class="container pos-header">
    <center>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="colaborador.php">
                <div class="form-group">
                    <label class="control-label col-sm-8" for="email">E-mail do colaborador</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" required autofocus>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </center>
</div>    

<?php include('rodapeAdmin.php'); ?>
