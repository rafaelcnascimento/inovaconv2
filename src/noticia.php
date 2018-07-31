<?php 

$id = $_GET['id'];

$noticia = Noticia::get($id);

include 'views/noticiaView.php';
