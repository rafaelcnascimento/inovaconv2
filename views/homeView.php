<?php include('cabecalhoHome.php'); ?>

    <!--Banner Area--> 
    <!--IMPORTANTE: a classe pos-header deve ser usada em todos os primeiros elementos apos o cabecalho ou ele irá fica por cima do elemento--> 
    <section class="pos-header carousel-vitrine" id="inicio" >
        <div class="col-md-12 pb-50 header-text text-center">
            <h1 class="mb-10">Últimas Notícias</h1>
        </div>    
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100 altura-vitrine" src="../assets/img/slider/bg-1.jpg" alt="First slide"> 
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 altura-vitrine" src="../assets/img/slider/bg-2.jpg" alt="Second slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
    </section>
    <!-- End banner Area -->
    
    <!-- Start service Area -->
    <section class="service-area section-gap" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 pb-50 header-text text-center">
                    <h1 class="mb-10">Quem Somos</h1>
                    <p>
                        A Empresa Júnior é uma associação civil, sem fins lucrativos, constituída exclusivamente por alunos da graduação, dos cursos de administração, ciências contábeis e analise e desenvolvimento de sistemas que desenvolve estudos para empresas, entidades e sociedade em geral, nas suas áreas de atuação, sob a supervisão de professores.
                    </p>
                </div>
            </div>                      
            <div class="row">
                <div class="col-lg-4 col-md-6">
                        <div class="thumb">
                            <img src="../assets/img/xads.png" alt=""> 
                        </div>
                </div>
                <div class="col-lg-4 col-md-6" style="margin-left: 50px;">
                        <div class="thumb">
                            <img src="../assets/img/logo-adm.png" alt=""> 
                        </div>
                </div>
                <div class="col-lg-3 col-md-6" style="margin-left: -10px;">
                        <div class="thumb">
                            <img src="../assets/img/logo-contabeis.png" alt="">   
                        </div>
                </div>
        </div>  
    </div>
    </section>
    <!-- End service Area -->
    
    <!-- Carrossel com os parceiros -->
    <section class="service-area section-gap" id="servicos" style="margin-bottom: 10px;">
        <div class="container" style="margin-top: -10%;">
            <div class="row justify-content-center">
                <div class="col-md-12 pb-50 header-text text-center">
                    <h1 class="mb-10">Serviços Prestados</h1>
                </div>
                <div class="whatever">
                    <p><li>Planejamento de marketing</li></p>
                    <p><li>Planejamento estratégico</li></p>
                    <p><li>Estudo de viabilidade financeira</li></p>
                    <p><li>Planejamento tributário</li></p>
                    <p><li>Gestão de custos</li></p>
                    <p><li>Projeto de reestruturação empresarial</li></p>
                    <p><li>Sugestão de ferramentas de gestão</li></p>
                </div>
            </div>   
        </div>                       
    </section>
    <!-- End home-about Area -->


    <!-- Carrossel com os parceiros -->
    <section class="service-area section-gap" id="parceiros" style="margin-bottom: -220px;">
                    <div class="container" style="margin-top: -10%;">
                        <div class="row justify-content-center">
                            <div class="col-md-12 pb-50 header-text text-center">
                                <h1 class="mb-10">Nossos Parceiros</h1>
                            </div>
                            <div class="whatever">
                                <img src="../assets/img/parceiros/cnec.png">
                            </div>
                        </div>                      
                </section>
    <!-- End home-about Area -->

    <!-- Contato-->
    <section class="work-process-area pt-120" id="contato">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-7">
                    <div class="title text-center">
                        <h1 class="mb-10">Entre em Contato Conosco</h1>
                        <form class="booking-form" id="myForm" action="#">
                            <div class="row">
                                <div class="col-lg-6 d-flex flex-column">
                                    <input name="nome" placeholder="Seu nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu nome'" class="form-control mt-20" required="" type="text">
                                </div>
                                <div class="col-lg-6 d-flex flex-column">
                                    <input name="nome_empresa" placeholder="Empresa" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Empresa'" class="form-control mt-20" required="" type="text">
                                </div>
                                <div class="col-lg-6 d-flex flex-column">
                                    <input name="telefone" placeholder="Telefone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefone'" class="form-control mt-20" required="" type="text">
                                </div>
                                <div class="col-lg-6 d-flex flex-column">
                                    <input name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" class="form-control mt-20" required="" type="email">
                                </div>
                                <div class="col-lg-12 flex-column">
                                    <textarea rows="5" class="form-control mt-20" name="mensagem" placeholder="Mensagem" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'" required=""></textarea>
                                </div>
                                <div class="col-lg-12 d-flex justify-content-center send-btn">
                                    <button class="genric-btn primary mt-20 text-uppercase">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <!-- Contato ends aqui -->

    <!-- Start work-process Area -->
    <section class="work-process-area pt-120" id="onde-estamos" style="margin-top: -70px;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-7">
                    <div class="title text-center">
                        <h1 class="mb-10">Onde Estamos</h1>
                        <p>Faculdade CNEC Santo Ângelo Prédio 2, Segundo andar</p>
                        <p>Sala 2202 ao lado do Salão Vermelho</p>
                    </div>
                </div>
            </div>  
        </div>
        <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Rua%20Dr.%20Jo%C3%A3o%20Augusto%20Rodrigues%2C%20471&key=AIzaSyDiGLkK3y2K4TYxb1HHUQcCCPbAso6gnwE" allowfullscreen></iframe>
    </section>

    <!-- End work-process Area -->
                
            
    
    <!-- Reutilizar pros cursos sepa 
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Latest posts from our blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>                  
            <div class="row">
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="../assets/img/b1.jpg" alt="">                             
                    </div>
                    <p class="meta">25 October, 2017  |  By <a href="#">Mark Wiens</a></p>
                    <a href="blog-single.html">
                        <h5>Addiction When Gambling Becomes A Problem</h5>
                    </a>
                    <p>
                        Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their.
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>      
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="../assets/img/b2.jpg" alt="">                             
                    </div>
                    <p class="meta">25 October, 2017  |  By <a href="#">Mark Wiens</a></p>
                    <a href="blog-single.html">
                        <h5>Computer Hardware Desktops And Notebooks</h5>
                    </a>
                    <p>
                        Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes anxiety for several different reasons. 
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>                      
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="../assets/img/b3.jpg" alt="">                             
                    </div>
                    <p class="meta">25 October, 2017  |  By <a href="#">Mark Wiens</a></p>
                    <a href="blog-single.html">
                        <h5>Make Myspace Your Best Designed Space</h5>
                    </a>
                    <p>
                        Plantronics with its GN Netcom wireless headset creates the next generation of wireless headset and other products such as wireless.
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>                                  
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="../assets/img/b4.jpg" alt="">                             
                    </div>
                    <p class="meta">25 October, 2017  |  By <a href="#">Mark Wiens</a></p>
                    <a href="blog-single.html">
                        <h5>Video Games Playing With Imagination</h5>
                    </a>
                    <p>
                        About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet 
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>                          
                </div>                          
            </div>
        </div>  
    </section>
    <-- End blog Area -->
    <?php include('rodapeHome.php'); ?>
