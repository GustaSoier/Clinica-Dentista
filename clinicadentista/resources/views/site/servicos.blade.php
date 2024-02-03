@extends('layout.layout')

@section('title', 'Serviços')

@section('conteudo')

    <!-- Início da Área do Banner -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Serviços
                    </h1>
                    <p class="text-white link-nav"><a href="{{ URL ('/') }}">Início </a> <span class="lnr lnr-arrow-right"></span>
                        <a href="{{ url ('/servicos') }}"> Serviços</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim da Área do Banner -->

    <!-- Início da Área de Serviços -->
    <section class="service-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 pb-40 header-text text-center">
                    <h1 class="pb-10">O que Oferecemos aos Nossos Clientes</h1>
                    <p>
                        Quem ama extremamente o sistema ecológico.
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
                            Comportamento inadequado é frequentemente tolerado como "coisa de menino", mulheres enfrentam um
                            comportamento mais elevado.
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
                            Comportamento inadequado é frequentemente tolerado como "coisa de menino", mulheres enfrentam um
                            comportamento mais elevado.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <img class="img-fluid" src="img/s3.jpg" alt="">
                        <a href="#">
                            <h4>Baixe Músicas Gratuitas</h4>
                        </a>
                        <p>
                            Comportamento inadequado é frequentemente tolerado como "coisa de menino", mulheres enfrentam um
                            comportamento mais elevado.
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
                            Comportamento inadequado é frequentemente tolerado como "coisa de menino", mulheres enfrentam um
                            comportamento mais elevado.
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
                        Comportamentos inadequados frequentemente são tolerados como "coisas de meninos", mulheres enfrentam
                        padrões de conduta mais elevados, especialmente no local de trabalho. Por isso, é crucial que, como
                        mulheres, nosso comportamento no trabalho esteja além de qualquer reprovação.
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
                        <h1 class="mb-10">Feedback dos nossos clientes reais</h1>
                        <p>Não será um grande problema encontrar um amante de jogos de vídeo game em seu vizinho. Desde a
                            introdução do Jogo Virtual.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial-carusel">
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor,
                            impressora, scanner, alto-falante, projetor, hardware e muito mais. acessório de laptop
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO na Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor,
                            impressora, scanner, alto-falante, projetor, hardware e muito mais. acessório de laptop
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO na Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor,
                            impressora, scanner, alto-falante, projetor, hardware e muito mais. acessório de laptop
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO na Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor,
                            impressora, scanner, alto-falante, projetor, hardware e muito mais. acessório de laptop
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO na Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor,
                            impressora, scanner, alto-falante, projetor, hardware e muito mais. acessório de laptop
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO na Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor,
                            impressora, scanner, alto-falante, projetor, hardware e muito mais. acessório de laptop
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO na Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor,
                            impressora, scanner, alto-falante, projetor, hardware e muito mais. acessório de laptop
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO na Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor,
                            impressora, scanner, alto-falante, projetor, hardware e muito mais. acessório de laptop
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO na Google
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            Acessórios Aqui você pode encontrar o melhor acessório de computador para o seu laptop, monitor,
                            impressora, scanner, alto-falante, projetor, hardware e muito mais. acessório de laptop
                        </p>
                        <h4>Mark Alviro Wiens</h4>
                        <p>
                            CEO na Google
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testomial Area -->

@endsection
