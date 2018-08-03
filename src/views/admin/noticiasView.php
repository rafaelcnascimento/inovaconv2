<?php include('cabecalhoAdmin.php'); ?>

<div class="container">
        <center>
            <table class="table">
                <thead>
                    <tr >
                        <th style="color: black;" scope="col">Titulo</th>
                        <th style="color: black;" scope="col">Publicada por</th>
                        <th style="color: black;" scope="col">Publicada em</th>
                        <th style="color: black;" scope="col">Editar</th>
                        <th style="color: black;" scope="col">Remover</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($noticias as $noticia): ?>
                        <?php $publicacao = new DateTime($noticia->publicada_em); ?>
                        <tr>
                            <td><?=$noticia->titulo?></td>
                            <td><?=$noticia->colaborador?></td>
                            <td><?=date_format($publicacao,"d/m/Y");?></td>
                            <form method="POST" action="/admin/noticia-editar?id=<?=$noticia->id?>">
                                <td><button type="submit" class="btn btn-success">Editar</button></td>
                            </form>
                            <form method="POST" action="/admin/noticias">
                                <input type="hidden" name="deletar" value="<?=$noticia->id?>">
                                <input type="hidden" name="capa" value="<?=$noticia->capa?>">
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
