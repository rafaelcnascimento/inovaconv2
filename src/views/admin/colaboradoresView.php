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
