<?php 

$noticias = Noticia::ultimas();

$servicos = Config::getServicos();

$i = 0;

include('views/homeView.php');
