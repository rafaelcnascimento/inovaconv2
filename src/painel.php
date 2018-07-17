<?php 

session_start();

if (!isset($_SESSION['usuario']))
{
    header("location:loginPainel");
} 
else 
{
    if ($_SESSION['usuario']->is_admin)
    {
        $_SESSION['admin'] = $_SESSION['usuario'];
        header("location:painel-admin");
    } 
    else 
    {
        $_SESSION['colab'] = $_SESSION['usuario'];
        header("location:painel-colaborador");
    }
}   
