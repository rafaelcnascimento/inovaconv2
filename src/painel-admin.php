<?php 

require 'vendor/autoload.php';

session_start();

Usuario::controle(1);

$usuario = $_SESSION['usuario'];

$conn = Db::conectar();

$stmt = $conn->prepare("SELECT nome,email,telefone,is_admin , IF(`is_admin` = 1, 'Sim', ' ') AS `is_admin` FROM colaboradores");

$stmt->execute();

$colaboradores = $stmt->fetchAll();



include('views/painel-adminView.php');

// INSERT INTO inovacon.colaboradores (nome, email, senha)
// SELECT nome, email, senha
// FROM wifitable.sis_cliente
// WHERE id = 8977
