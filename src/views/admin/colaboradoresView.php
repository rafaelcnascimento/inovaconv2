<?php include('cabecalhoAdmin.php'); ?>

    <div class="container">
        <center>
            <table class="table">
                <thead>
                    <tr >
                        <th style="color: black;" scope="col">Nome</th>
                        <th style="color: black;" scope="col">Email</th>
                        <th style="color: black;" scope="col">Telefone</th>
                        <th style="color: black;" scope="col">Administrador</th>
                        <th style="color: black;" scope="col">Promover para Admin</th>
                        <th style="color: black;" scope="col">Remover</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($colaboradores as $colab): ?>
                        <tr>
                            <td><?=$colab->nome?></td>
                            <td><?=$colab->email?></td>
                            <td><?=$colab->telefone?></td>
                            <td><?=$colab->is_admin?></td>
                            <form method="POST" action="/admin/colaboradores">
                                <input type="hidden" name="promover" value="<?=$colab->id?>">
                                <td><button type="submit" class="btn btn-primary">Promover</button></td>
                            </form>
                            <form method="POST" action="/admin/colaboradores">
                                <input type="hidden" name="delete" value="<?=$colab->id?>">
                                <td><button type="submit" class="btn btn-danger">Remover</button></td>
                            </form>
                        </tr>    
                    <?php endforeach ?>
                </tbody>
            </table>
            <?php if (isset($mensagem)): ?>
                <?=$mensagem?>
            <?php endif ?>
        </center>
    </div>    

<?php include('rodapeAdmin.php'); ?>
