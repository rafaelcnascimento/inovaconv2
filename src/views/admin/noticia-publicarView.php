<?php include('cabecalhoAdmin.php'); ?>

    <?php if (isset($mensagem)): ?>
        <?=$mensagem?>
    <?php endif ?>

    <form method="POST" action="/admin/noticia-publicar" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Título da notícia:</label>
            <input type="text" class="form-control" name="titulo">
        </div>
        <div class="form-group">
            <label for="capa">Capa da notícia:</label>
            <input type="file" name="capa" accept="image/*">
        </div>
        <div class="form-group">
            <label for="corpo">Corpo da notícia:</label>
                <textarea name="corpo" style="width: 100%; height: 300px;"></textarea><br>
            </div>
        <center>
            <button type="submit" class="btn btn-primary">Publicar</button>
        </center>
    </form>

    <!-- Arquivos javascript com o editor de texto nicEdit http://nicedit.com/index.php -->
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<?php include('rodapeAdmin.php'); ?>
