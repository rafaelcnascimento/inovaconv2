<?php 

$noticias = Noticia::ultimas();

$i = 0;

include('views/homeView.php');
