@extends('layout.layout')

@section('title', 'Home')

@section('conteudo')

    <!-- Início da Área do Banner -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex justify-content-center align-items-center">
                <div class="banner-content col-lg-9 col-md-12 justify-content-center">
                    <h6 class="text-uppercase">Não procure mais, Este é o seu Dentista</h6>
                    <h1>
                        Serviço Odontológico Autêntico
                    </h1>
                    <p class="text-white mx-auto">
                        Uma clínica odontológica é mais do que um espaço de cuidado bucal; é um lugar onde sorrisos são restaurados e confiança é reconstruída.
                    </p>
                    <a href="#" class="primary-btn header-btn text-uppercase mt-10">Começar</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim da Área do Banner -->

    <!-- Início da Área de Horário de Funcionamento -->
    <section class="open-hour-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 open-hour-wrap">
                    <h1>Horário de Funcionamento</h1>
                    <p>
                        Prepare-se para votar e selecionar o certo
                    </p>
                    <a class="open-btn" href="#"> <span class="circle"></span>Nós estamos abertos agora</a>
                    <div class="date-list d-flex flex-row justify-content-center">
                        <ul class="colm-1">
                            <li>Segunda-feira - Sexta-feira</li>
                            <li>Sábado</li>
                            <li>Domingo</li>
                        </ul>
                        <ul class="colm-2">
                            <li><span>:</span> 10:00h às 17:00h</li>
                            <li><span>:</span> 12:00h às 15:00h</li>
                            <li><span>:</span> fechado</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim da Área de Horário de Funcionamento -->



    <!-- Início da Área de Serviços -->
    <section class="service-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 pb-40 header-text text-center">
                    <h1 class="pb-10">O que Oferecemos aos Nossos Clientes</h1>
                    <p>
                        Para aqueles que estão extremamente apaixonados pelo sistema eco-friendly.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <img class="img-fluid" src="img/s1.jpg" alt="">
                        <a href="#">
                            <h4>Uso Popular da Internet</h4>
                        </a>
                        <p>
                            Comportamento inapropriado muitas vezes é ignorado como "coisas de meninos", as mulheres
                            enfrentam um padrão de conduta mais elevado.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <img class="img-fluid" src="img/s2.jpg" alt="">
                        <a href="#">
                            <h4>Preventivo Protetor</h4>
                        </a>
                        <p>
                            Comportamento inapropriado muitas vezes é ignorado como "coisas de meninos", as mulheres
                            enfrentam um padrão de conduta mais elevado.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <img class="img-fluid" src="img/s3.jpg" alt="">
                        <a href="#">
                            <h4>Baixar Músicas Gratuitas</h4>
                        </a>
                        <p>
                            Comportamento inapropriado muitas vezes é ignorado como "coisas de meninos", as mulheres
                            enfrentam um padrão de conduta mais elevado.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <img class="img-fluid" src="img/s4.jpg" alt="">
                        <a href="#">
                            <h4>Cartucho de Toner com Desconto</h4>
                        </a>
                        <p>
                            Comportamento inapropriado muitas vezes é ignorado como "coisas de meninos", as mulheres
                            enfrentam um padrão de conduta mais elevado.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim da Área de Serviços -->

    <!-- Start home-about Area -->
    <section class="home-about-area section-gap relative">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6 no-padding home-about-right">
                    <h1 class="text-white">
                        Quem somos <br>
                        para Servir a nação
                    </h1>
                    <p>
                        Comportamento inapropriado muitas vezes é ignorado como "coisas de meninos", as mulheres enfrentam um padrão de conduta mais elevado, especialmente no local de trabalho. Por isso, é crucial que, como mulheres, nosso comportamento no trabalho esteja além de qualquer crítica.
                    </p>
                    <div class="row no-gutters">
                        <div class="single-services col">
                            <span class="lnr lnr-diamond"></span>
                            <a href="#">
                                <h4 class="text-white">Serviços Especializados</h4>
                            </a>
                            <p>
                                O uso da Internet está se tornando mais comum devido ao rápido avanço da tecnologia.
                            </p>
                        </div>
                        <div class="single-services col">
                            <span class="lnr lnr-phone"></span>
                            <a href="#">
                                <h4 class="text-white">Ótimo Suporte</h4>
                            </a>
                            <p>
                                O uso da Internet está se tornando mais comum devido ao rápido avanço da tecnologia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End home-about Area -->

    <!-- Start testomial Area -->
    <section class="testomial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Feedback de nossos clientes reais</h1>
                        <p>Não será um grande problema encontrar um amante de videogame em seu bairro. Desde a introdução do Jogo Virtual.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial-carusel">
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor, impressora,
                            scanner, alto-falante, projetor, hardware e muito mais. Acessório para laptop.
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO do Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor, impressora,
                            scanner, alto-falante, projetor, hardware e muito mais. Acessório para laptop.
                        </p>
                        <h4>Gustavo Sampaio Soier</h4>
                        <p>
                            CEO do Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor, impressora,
                            scanner, alto-falante, projetor, hardware e muito mais. Acessório para laptop.
                        </p>
                        <h4>Gustavo Sampaio Soier</h4>
                        <p>
                            CEO do Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor, impressora,
                            scanner, alto-falante, projetor, hardware e muito mais. Acessório para laptop.
                        </p>
                        <h4>Gustavo Sampaio Soier</h4>
                        <p>
                            CEO do Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor, impressora,
                            scanner, alto-falante, projetor, hardware e muito mais. Acessório para laptop.
                        </p>
                        <h4>Gustavo Sampaio Soier</h4>
                        <p>
                            CEO do Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor, impressora,
                            scanner, alto-falante, projetor, hardware e muito mais. Acessório para laptop.
                        </p>
                        <h4>Gustavo Sampaio Soier</h4>
                        <p>
                            CEO do Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor, impressora,
                            scanner, alto-falante, projetor, hardware e muito mais. Acessório para laptop.
                        </p>
                        <h4>Gustavo Sampaio Soier</h4>
                        <p>
                            CEO do Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor, impressora,
                            scanner, alto-falante, projetor, hardware e muito mais. Acessório para laptop.
                        </p>
                        <h4>Gustavo Sampaio Soier</h4>
                        <p>
                            CEO do Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor, impressora,
                            scanner, alto-falante, projetor, hardware e muito mais. Acessório para laptop.
                        </p>
                        <h4>Gustavo Sampaio Soier</h4>
                        <p>
                            CEO do Google
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testomial Area -->

    <!-- Start team Area -->

    <section class="team-area section-gap" id="team">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Nossos Doutores</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">
                <div class="col-lg-3 col-md-6 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t1.jpg" alt="">
                        <div class="align-items-end justify-content-center d-flex">
                            <p>
                                Ortodontia - (UFRJ)
                            </p>
                            <h4>Gustavo Sampaio Soier</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t2.jpg" alt="">
                        <div class="align-items-end justify-content-center d-flex">
                            <p>
                                Implantodontia - (UFMG)
                            </p>
                            <h4>Gustavo Sampaio Soier</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t3.jpg" alt="">
                        <div class="align-items-end justify-content-center d-flex">
                            <p>
                                Endodontia - (UNICAMP)
                            </p>
                            <h4>Gustavo Sampaio Soier</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t4.jpg" alt="">
                        <div class="align-items-end justify-content-center d-flex">
                            <p>
                                Periodontia - (USP)
                            </p>
                            <h4>Gustavo Sampaio Soier</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End team Area -->

    <!-- Start feature Area -->

<section class="feature-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Recursos que nos tornam únicos</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-feature d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-rocket"></span>
                    </div>
                    <div class="details">
                        <h4>Emergência 24/7</h4>
                        <p>
                            O comportamento inapropriado muitas vezes é desprezado como "meninos serão meninos", as mulheres enfrentam um comportamento mais elevado.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-feature d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-heart-pulse"></span>
                    </div>
                    <div class="details">
                        <h4>Consulta Especializada</h4>
                        <p>
                            O comportamento inapropriado muitas vezes é desprezado como "meninos serão meninos", as mulheres enfrentam um comportamento mais elevado.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-feature d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-chart-bars"></span>
                    </div>
                    <div class="details">
                        <h4>Serviço de Raio-X</h4>
                        <p>
                            O comportamento inapropriado muitas vezes é desprezado como "meninos serão meninos", as mulheres enfrentam um comportamento mais elevado.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-feature d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-paw"></span>
                    </div>
                    <div class="details">
                        <h4>Ciência Dentária</h4>
                        <p>
                            O comportamento inapropriado muitas vezes é desprezado como "meninos serão meninos", as mulheres enfrentam um comportamento mais elevado.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-feature d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-bug"></span>
                    </div>
                    <div class="details">
                        <h4>Cuidados Intensivos</h4>
                        <p>
                            O comportamento inapropriado muitas vezes é desprezado como "meninos serão meninos", as mulheres enfrentam um comportamento mais elevado.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-feature d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-users"></span>
                    </div>
                    <div class="details">
                        <h4>Planejamento Familiar</h4>
                        <p>
                            O comportamento inapropriado muitas vezes é desprezado como "meninos serão meninos", as mulheres enfrentam um comportamento mais elevado.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- End feature Area -->

    <!-- Start appoinment Area -->
    <section class="appoinment-area section-gap relative">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6 no-padding appoinment-right">
                    <h1 class="text-white">
                        Agende um <br>
                        Compromisso
                    </h1>
                    <form class="appoinment-form" id="myForm" action="#">
                        <div class="row">
                            <div class="col-lg-12 d-flex flex-column">
                                <input name="patient-name" placeholder="Nome do Paciente" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Nome do Paciente'" class="form-control mt-20" required=""
                                    type="text">
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <input name="phone" placeholder="Telefone" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Telefone'" class="form-control mt-20" required=""
                                    type="text">
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <input name="email" placeholder="Endereço de E-mail" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Endereço de E-mail'" class="form-control mt-20" required=""
                                    type="email">
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <input name="dob" placeholder="Data de Nascimento" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Data de Nascimento'" class="form-control mt-20" required=""
                                    type="text" id="datepicker">
                            </div>
                            <div class="col-lg-6 d-flex flex-column">
                                <input name="appoinment-date" placeholder="Data do Compromisso"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Data do Compromisso'"
                                    class="form-control mt-20" required="" type="text" id="datepicker2">
                            </div>
                            <div class="col-lg-12 flex-column">
                                <textarea rows="5" class="form-control mt-20" name="message" placeholder="Mensagem"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'" required=""></textarea>
                            </div>
                              <div class="col-lg-12 d-flex justify-content-end send-btn">
                                <button class="primary-btn primary mt-20 text-uppercase ">Confirmar agendamento</button>
                            </div>

                            <div class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End appoinment Area -->

    <!-- Start blog Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Últimas do Nosso Blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b1.jpg" alt="">
                    </div>
                    <p class="date">18 Jan 2023</p>
                    <a href="blog-single.html">
                        <h4>Desvendando Mitos: Verdades Sobre os Tratamentos Dentários</h4>
                    </a>
                    <p>
                        Neste espaço, desmistificamos conceitos comuns sobre tratamentos odontológicos. Exploramos desde procedimentos básicos de prevenção até tratamentos estéticos avançados, oferecendo informações claras e precisas para ajudá-lo a tomar decisões informadas sobre sua saúde bucal.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 43 Curtidas</p>
                        <p><span class="lnr lnr-bubble"></span> 14 Comentários</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b2.jpg" alt="">
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <a href="blog-single.html">
                        <h4>Inovações em Odontologia: Conheça as Últimas Tendências</h4>
                    </a>
                    <p>
                        Comportamento inapropriado ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Curtidas</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comentários</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b3.jpg" alt="">
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <a href="blog-single.html">
                        <h4>Vício: Quando o Jogo
                            se Torna um Problema</h4>
                    </a>
                    <p>
                        Comportamento inapropriado ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Curtidas</p>
                        <p><span class="lnr lnr-bubble"></span> 19 Comentários</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b4.jpg" alt="">
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <a href="blog-single.html">
                        <h4>Vício: Quando o Jogo
                            se Torna um Problema</h4>
                    </a>
                    <p>
                        Comportamento inapropriado ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Curtidas</p>
                        <p><span class="lnr lnr-bubble"></span> 18 Comentários</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog Area -->

@endsection
