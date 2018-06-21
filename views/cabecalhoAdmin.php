<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../views/assets/img/favicon.png">
    <!-- Author Meta -->
    <meta name="author" content="ADS">
    <!-- Idioma -->
    <meta http-equiv="Content-Language" content="pt-br">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Inovacon</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="../views/assets/css/linearicons.css">
        <link rel="stylesheet" href="../views/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="../views/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="../views/assets/css/nice-select.css">                          
        <link rel="stylesheet" href="../views/assets/css/animate.min.css">
        <link rel="stylesheet" href="../views/assets/css/owl.carousel.css">
        <link rel="stylesheet" href="../views/assets/css/main.css">
        <!--Nosso CSS personalizado vai aqui-->
        <link rel="stylesheet" href="../views/assets/css/personalizado.css">
    </head>
        <body>  
            <header id="header" id="home">
              <div class="container main-menu">
                  <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo" style="margin-left: -60px;">
                      <a href="../painel-admin.php"><img src="../views/assets/img/logo.png" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                      <ul class="nav-menu">
                        <li><a href="admin/curso.php">Cadastrar Curso</a></li>
                        <li><a href="admin/colaborador.php">Cadastrar Colaborador</a></li>
                        <li><?=strtok($usuario->nome,  ' ');?></li>
                      </ul>
                    </nav><!-- #nav-menu-container -->                    
                  </div>
              </div>
            </header><!-- #header -->
            <!--IMPORTANTE: a classe pos-header deve ser usada em todos os primeiros elementos apos o cabecalho ou ele irá fica por cima do elemento--> 
