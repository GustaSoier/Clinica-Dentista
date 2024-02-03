@extends('layout.layout')

@section('title', 'Sobre')

@section('conteudo')

    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Sobre Nós
                    </h1>
                    <p class="text-white link-nav"><a href="{{ url('/') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span> <a href="{{ url ('/sobre') }}"> Sobre Nós</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Recursos que nos tornam únicos</h1>
                        <p>Quem está extremamente apaixonado pelo sistema ecológico.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-feature d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-rocket"></span>
                        </div>
                        <div class="details">
                            <h4>Emergência 24/7</h4>
                            <p>
                                O comportamento inadequado muitas vezes é ignorado como "meninos serão meninos", mas as
                                mulheres enfrentam padrões de conduta mais elevados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-feature d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-heart-pulse"></span>
                        </div>
                        <div class="details">
                            <h4>Consulta Especializada</h4>
                            <p>
                                O comportamento inadequado muitas vezes é ignorado como "meninos serão meninos", mas as
                                mulheres enfrentam padrões de conduta mais elevados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-feature d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-chart-bars"></span>
                        </div>
                        <div class="details">
                            <h4>Serviço de Raio-X</h4>
                            <p>
                                O comportamento inadequado muitas vezes é ignorado como "meninos serão meninos", mas as
                                mulheres enfrentam padrões de conduta mais elevados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-feature d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-paw"></span>
                        </div>
                        <div class="details">
                            <h4>Ciência Dental</h4>
                            <p>
                                O comportamento inadequado muitas vezes é ignorado como "meninos serão meninos", mas as
                                mulheres enfrentam padrões de conduta mais elevados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-feature d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-bug"></span>
                        </div>
                        <div class="details">
                            <h4>Cuidados Intensivos</h4>
                            <p>
                                O comportamento inadequado muitas vezes é ignorado como "meninos serão meninos", mas as
                                mulheres enfrentam padrões de conduta mais elevados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-feature d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-users"></span>
                        </div>
                        <div class="details">
                            <h4>Planejamento Familiar</h4>
                            <p>
                                O comportamento inadequado muitas vezes é ignorado como "meninos serão meninos", mas as
                                mulheres enfrentam padrões de conduta mais elevados.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

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
                        Comportamentos inadequados muitas vezes são tratados com risadas, como "meninos serão meninos", mas
                        as mulheres enfrentam padrões de conduta mais elevados, especialmente no ambiente de trabalho. Por
                        isso, é crucial que, como mulheres, nosso comportamento no trabalho seja irrepreensível.
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
                                <h4 class="text-white">Suporte Excelente</h4>
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

    <!-- Start team Area -->
    <section class="team-area section-gap" id="team">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Nossos Consultores</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">
                <div class="col-lg-3 col-md-6 single-team">
                    <div class="thumb">
                        <img class="img-fluid" src="img/t1.jpg" alt="">
                        <div class="align-items-end justify-content-center d-flex">
                            <p>
                                Comportamento inadequado
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
                                Comportamento inadequado
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
                                Comportamento inadequado
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
                                Comportamento inadequado
                            </p>
                            <h4>Gustavo Sampaio Soier</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End team Area -->

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
                                <button class="genric-btn primary mt-20 text-uppercase ">Confirmar agendamento</button>
                            </div>

                            <div class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End appoinment Area -->

    <!-- Start testomial Area -->
    <section class="testomial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Feedback de nossos clientes reais</h1>
                        <p>Não será um grande problema encontrar um amante de videogame em seu bairro. Desde a
                            introdução do Jogo Virtual.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial-carusel">
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor, impressora,
                            scanner, alto-falante, projetor, hardware e mais. Acessório para laptop
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
                            scanner, alto-falante, projetor, hardware e mais. Acessório para laptop
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
                            scanner, alto-falante, projetor, hardware e mais. Acessório para laptop
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
                            scanner, alto-falante, projetor, hardware e mais. Acessório para laptop
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
                            scanner, alto-falante, projetor, hardware e mais. Acessório para laptop
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
                            scanner, alto-falante, projetor, hardware e mais. Acessório para laptop
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
                            scanner, alto-falante, projetor, hardware e mais. Acessório para laptop
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
                            scanner, alto-falante, projetor, hardware e mais. Acessório para laptop
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
                            scanner, alto-falante, projetor, hardware e mais. Acessório para laptop
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

@endsection
