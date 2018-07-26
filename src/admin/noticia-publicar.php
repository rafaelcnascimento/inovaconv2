<?php 
session_start();

$usuario = $_SESSION['usuario'];

Usuario::controle(1);

$conn = Db::conectar();

// $stmt = $conn->query("SELECT * FROM noticias ORDER BY id DESC LIMIT 1");
// $news = $stmt->fetch();

if (isset($_POST['corpo'])) {
    $corpo = $_POST['corpo'];
    
    $stmt = $conn->prepare("INSERT INTO noticias (titulo,corpo,capa,colaborador_id) VALUES ('teste', :corpo, 'fodasse',1)");
    $stmt->bindParam(':corpo', $corpo);
    
    $stmt->execute();

}

include 'src/views/admin/noticia-publicarView.php';
