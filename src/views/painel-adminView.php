<?php include('cabecalhoAdmin.php'); ?>

<div class="pos-header">
    <center>
        <table class="table table-striped table-hover table-bordered tabela">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Administrador</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($colaboradores as $colab): ?>
                    <tr>
                        <td><?=$colab->nome?></td>
                        <td><?=$colab->email?></td>
                        <td><?=$colab->telefone?></td>
                        <td><?=$colab->is_admin?></td>
                    </tr>    
                <?php endforeach ?>
            </tbody>
        </table>
    </center>
</div>    

<?php include('rodapeAdmin.php'); ?>
