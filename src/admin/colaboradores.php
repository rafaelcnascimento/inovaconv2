<?php 

session_start();

Usuario::controle(1);

$usuario = $_SESSION['usuario'];

$conn = Db::conectar();

if (isset($_POST['delete']))
 {
    $id = $_POST['delete'];

    $mensagem = Usuario::deletarColab($id);
}

if (isset($_POST['promover']))
 {
    $id = $_POST['promover'];

    $mensagem = Usuario::promoverColab($id);
}

$stmt = $conn->prepare("SELECT id,nome,email,telefone,is_admin , IF(`is_admin` = 1, 'Sim', ' ') AS `is_admin` FROM colaboradores ORDER BY nome ASC");

$stmt->execute();

$colaboradores = $stmt->fetchAll();

include('src/views/admin/colaboradoresView.php');


