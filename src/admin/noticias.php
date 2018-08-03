<?php 
session_start();

Usuario::controle(1);

$usuario = $_SESSION['usuario'];

if (isset($_POST['deletar']))
{
    $id = $_POST['deletar'];
    $capa = $_POST['capa'];

    $mensagem = Noticia::deletar($id,$capa);
}

$noticias = Noticia::todas();

include 'src/views/admin/noticiasView.php';
