<?php include('cabecalhoAdmin.php'); ?>

    <form method="POST" action="/admin/noticia-publicar">
        <h3>Corpo da notícia:</h3>    
        <textarea name="corpo" style="width: 100%; height: 300px;"></textarea><br>
        <center>
            <button type="submit" class="btn btn-primary">Publicar</button>
        </center>
    </form>

    <!-- Arquivos javascript com o editor de texto nicEdit http://nicedit.com/index.php -->
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<?php include('rodapeAdmin.php'); ?>
