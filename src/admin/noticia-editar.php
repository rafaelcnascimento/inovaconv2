<?php 

session_start();

Usuario::controle(1);

$usuario = $_SESSION['usuario'];

$id = $_GET['id'];

$noticia = Noticia::get($id);

if (isset($_POST['titulo'])) 
{
    $titulo = $_POST['titulo'];
    $corpo = $_POST['corpo'];
    
    if (isset($_POST['capa']))
    {
        
        echo "efjoeifjioe";
        die();

        $_FILES['capa']['name'] = time().'.jpg';

        $arquivo = $_FILES['capa']['name'];
        
        $url_capa = 'src/assets/img/noticias/'.$arquivo;

        if (move_uploaded_file($_FILES['capa']['tmp_name'], $url_capa)) 
        {
            unlink($noticia->capa);
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

    else 
    {
        $url_capa = $noticia->capa;
    }
    
    $mensagem = Noticia::editar($noticia->id,$titulo,$corpo,$url_capa);

    $noticia = Noticia::get($id);
}

include 'src/views/admin/noticia-editarView.php';
