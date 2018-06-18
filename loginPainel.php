<?php 

session_start();

session_destroy();

require 'vendor/autoload.php';

include('views/loginPainelView.php');

if (isset($_POST['email']))
{
    $email = $_POST['email']; 
    $senha = $_POST['senha']; 

    usuario::login($email,$senha);
}
