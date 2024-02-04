@extends('layout.layout')

@section('title', 'Horário de Atendimento')

@section('conteudo')

    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Horário de Funcionamento
                    </h1>
                    <p class="text-white link-nav"><a href="{{ url('/') }}">Início </a> <span
                            class="lnr lnr-arrow-right"></span> <a href="{{ url('/horarioAtendimento') }}"> Horário de
                            Funcionamento</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start open-hour Area -->
    <section class="open-hour-area openhour-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 open-hour-wrap">
                    <h1>Horário de Funcionamento</h1>
                    <p>
                        Prepare-se para votar e selecionar o candidato certo
                    </p>
                    <a class="open-btn" href="#"> <span class="circle"></span>Estamos abertos agora</a>
                    <div class="date-list d-flex flex-row justify-content-center">
                        <ul class="colm-1">
                            <li>Segunda-feira - Sexta-feira</li>
                            <li>Sábado</li>
                            <li>Domingo</li>
                        </ul>
                        <ul class="colm-2">
                            <li><span>:</span> 10:00 às 17:00</li>
                            <li><span>:</span> 12:00 às 15:00</li>
                            <li><span>:</span> fechado</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End open-hour Area -->

    <!-- Start service Area -->
    <section class="service-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 pb-40 header-text text-center">
                    <h1 class="pb-10">O Que Oferecemos aos Nossos Clientes</h1>
                    <p>
                        Para aqueles que amam extremamente o sistema ecológico.
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
                            Comportamento inadequado é frequentemente tolerado como "coisas de meninos", mulheres enfrentam padrões de conduta mais elevados.
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
                            Comportamento inadequado é frequentemente tolerado como "coisas de meninos", mulheres enfrentam padrões de conduta mais elevados.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <img class="img-fluid" src="img/s3.jpg" alt="">
                        <a href="#">
                            <h4>Baixe Músicas Grátis</h4>
                        </a>
                        <p>
                            Comportamento inadequado é frequentemente tolerado como "coisas de meninos", mulheres enfrentam padrões de conduta mais elevados.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <img class="img-fluid" src="img/s4.jpg" alt="">
                        <a href="#">
                            <h4>Um Cartucho de Toner com Desconto</h4>
                        </a>
                        <p>
                            Comportamento inadequado é frequentemente tolerado como "coisas de meninos", mulheres enfrentam padrões de conduta mais elevados.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End service Area -->

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
                        O comportamento inadequado muitas vezes é ignorado como "coisas de meninos", as mulheres enfrentam padrões de conduta mais elevados, especialmente no local de trabalho. Por isso, é crucial que, como mulheres, nosso comportamento no trabalho esteja além de qualquer reprovação.
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
                        <h1 class="mb-10">Feedback from our real clients</h1>
                        <p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial-carusel">
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO at Google
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testomial Area -->

@endsection
