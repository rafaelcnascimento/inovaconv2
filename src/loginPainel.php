<?php 

session_start();

session_destroy();

include('views/loginPainelView.php');

if (isset($_POST['email']))
{
    $email = $_POST['email']; 
    $senha = $_POST['senha']; 

    Usuario::login($email,$senha);
}
