<?php 
session_start();

$usuario = $_SESSION['usuario'];

Usuario::controle(1);

// $stmt = $conn->query("SELECT * FROM noticias ORDER BY id DESC LIMIT 1");
// $news = $stmt->fetch();

if (isset($_POST['corpo'])) 
{
    $titulo = $_POST['titulo'];
    $corpo = $_POST['corpo'];
    
    $colaborador_id =$usuario->id;

    $_FILES['capa']['name'] = time().'.jpg';

    $arquivo = $_FILES['capa']['name'];
    
    $url_capa = 'src/assets/img/noticias/'.$arquivo;

    if (move_uploaded_file($_FILES['capa']['tmp_name'], $url_capa)) 
    {
        Noticia::publicar($titulo,$corpo,$url_capa,$colaborador_id);

        $mensagem = ' <br><div class="alert alert-success">
                        <center>
                            Notícia publicada com sucesso
                        </center>
                    </div>';
    } 
    else 
    {
        $mensagem = ' <br><div class="alert alert-danger">
                        <center>
                            Erro no upload do arquivo
                        </center>
                    </div>';
    }
}

include 'src/views/admin/noticia-publicarView.php';
