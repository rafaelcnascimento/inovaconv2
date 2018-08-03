<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="/src/assets/img/favicon.png"">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Inovacon</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="/src/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--Nosso CSS personalizado vai aqui-->
    <link rel="stylesheet" href="/src/assets/css/painel-personalizado.css">

    <!--  Light Bootstrap Table core CSS    -->
    <link href="/src/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/src/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.inovaconjr.com.br/" class="simple-text">
                    <img class="moveimage" src="/src/assets/img/logo.png" width="175" height="40" alt="Logo Cnec">
                </a>
            </div>
            <ul class="nav">
                <li <?php if ($_SERVER['REQUEST_URI'] == '/admin/colaboradores'): ?> class="active" <?php endif ?>>
                    <a href="/admin/colaboradores">
                        <i class="pe-7s-users"></i>
                        <p>Colaboradores</p>
                    </a>
                </li>
                <li <?php if ($_SERVER['REQUEST_URI'] == '/admin/colaboradores-registrar'): ?> class="active" <?php endif ?>>
                    <a href="/admin/colaboradores-registrar">
                        <i class="pe-7s-id"></i>
                        <p>Registrar colaborador</p>
                    </a>
                </li>
                <li <?php if ($_SERVER['REQUEST_URI'] == '/admin/cursos'): ?> class="active" <?php endif ?>>
                    <a href="/admin/cursos">
                        <i class="pe-7s-study"></i>
                        <p>Cursos</p>
                    </a>
                </li>
                <li <?php if ($_SERVER['REQUEST_URI'] == '/admin/cursos-registrar'): ?> class="active" <?php endif ?>>
                    <a href="/admin/cursos-registrar">
                        <i class="pe-7s-note"></i>
                        <p>Registrar Curso</p>
                    </a>
                </li>
                <li <?php if ($_SERVER['REQUEST_URI'] == '/admin/noticia-publicar'): ?> class="active" <?php endif ?>>
                    <a href="/admin/noticia-publicar">
                        <i class="pe-7s-news-paper"></i>
                        <p>Publicar Notícia</p>
                    </a>
                </li>
                <li <?php if ($_SERVER['REQUEST_URI'] == '/admin/noticias'): ?> class="active" <?php endif ?>>
                    <a href="/admin/noticias">
                        <i class="pe-7s-speaker"></i>
                        <p>Notícias Publicadas</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>  
                </div>
                <!-- Dropbown do logout -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <p>
                                            <?=$usuario->nome?>
                                            <b class="caret"></b>
                                        </p>
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Logout</a></li>
                                  </ul>
                            </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">

