<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="src/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Faculdade CNEC Santo Ângelo</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="/src/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="/src/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project    
    <link href="src/assets/css/demo.css" rel="stylesheet" /> -->

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="src/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="src/assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://cnecsan.cnec.br/" class="simple-text">
                    <img class="moveimage" src="src/assets/img/cnec-logo.png" width="34" height="40" alt="Logo Cnec">
                </a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="/admin/funcionarios">
                        <i class="pe-7s-id"></i>
                        <p>Funcionarios</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/alunos">
                        <i class="pe-7s-study"></i>
                        <p>Alunos</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/professores">
                        <i class="pe-7s-user"></i>
                        <p>Professores</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/adicionar-funcionario">
                        <i class="pe-7s-bookmarks"></i>
                        <p>Adicionar funcionario</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/adicionar-aluno">
                        <i class="pe-7s-users"></i>
                        <p>Adicionar aluno</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/adicionar-professor">
                        <i class="pe-7s-add-user"></i>
                        <p>Adicionar professor</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/memorandos">
                        <i class="pe-7s-note"></i>
                        <p>Memorandos</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/telefones">
                        <i class="pe-7s-phone"></i>
                        <p>Telefones</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/relatorios">
                        <i class="pe-7s-note2"></i>
                        <p>Relatórios</p>
                    </a>
                </li>
            <!--     <li>
                    <a href="/admin/contato">
                        <i class="pe-7s-mail"></i>
                        <p>E-mail dos professores</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/.com/SGCE/certificados/#/">
                        <i class="pe-7s-news-paper"></i>
                        <p>Certificados</p>
                    </a>
                </li> -->       
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
                                            FULADO BEUTRANO
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
            <div class="container-fluid">
               <!-- Conteudo -->
            </div>
        </div>


      <!--   <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer> -->

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="src/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="src/assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="src/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="src/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="src/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="src/assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            

        });
    </script>

</html>
