<?php 

require 'vendor/autoload.php';

session_start();

usuario::controle(2);

include('views/painel-adminView.php');

// INSERT INTO inovacon.colaboradores (nome, email, senha)
// SELECT nome, email, senha
// FROM wifitable.sis_cliente
// WHERE id = 8977
