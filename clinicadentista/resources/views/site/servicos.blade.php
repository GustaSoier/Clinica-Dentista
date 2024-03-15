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
                            <h4>Manutenção de Aparelho</h4>
                        </a>
                        <p>
                            A manutenção de aparelho ortodôntico é fundamental para garantir a saúde bucal do paciente. Envolve práticas como higienização adequada, consultas regulares ao ortodontista, reposição de peças danificadas.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <img class="img-fluid" src="img/s2.jpg" alt="">
                        <a href="#">
                            <h4>Clareamento</h4>
                        </a>
                        <p>
                            O clareamento dental é um procedimento estético popular que visa melhorar a aparência dos dentes, proporcionando um sorriso mais branco e radiante.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <img class="img-fluid" src="img/s3.jpg" alt="">
                        <a href="#">
                            <h4>Lente de Contato Dental</h4>
                        </a>
                        <p>
                            As lentes de contato dental são finas camadas de porcelana aplicadas sobre a superfície dos dentes para corrigir imperfeições estéticas, como manchas, irregularidades e espaços.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <img class="img-fluid" src="img/s4.jpg" alt="">
                        <a href="#">
                            <h4>Canal Dental</h4>
                        </a>
                        <p>
                            O tratamento de canal dental é realizado para remover a polpa infectada, aliviar a dor e preservar o dente. Envolve a remoção do tecido infectado, limpeza dos canais e preenchimento com material obturador.
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
                        Quem Somos: Compromisso com sua Saúde Bucal
                    </h1>
                    <p>
                        Na nossa clínica, priorizamos a excelência no cuidado odontológico. Estamos aqui para oferecer tratamentos de qualidade, atendimento personalizado e resultados que transformam sorrisos e vidas.
                    </p>
                    <div class="row no-gutters">
                        <div class="single-services col">
                            <span class="lnr lnr-diamond"></span>
                            <a href="#">
                                <h4 class="text-white">Nossos Tratamentos Especializados</h4>
                            </a>
                            <p>
                                Na nossa clínica, oferecemos uma ampla gama de tratamentos especializados para cuidar da sua saúde bucal.
                            </p>
                        </div>
                        <div class="single-services col">
                            <span class="lnr lnr-phone"></span>
                            <a href="#">
                                <h4 class="text-white">Atendimento de Qualidade</h4>
                            </a>
                            <p>
                                Na nossa clínica, estamos comprometidos em oferecer um atendimento de qualidade excepcional.
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
                        <p>Nossos pacientes compartilham suas experiências reais conosco, destacando o compromisso da nossa equipe em proporcionar um cuidado odontológico excepcional e resultados que fazem a diferença em suas vidas.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial-carusel">
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Excelente atendimento! A equipe da clínica foi extremamente profissional e atenciosa durante todo o processo. Recomendo muito!
                        </p>
                        <h4>Maria Silva</h4>
                        <p>
                            Gerente de Inovação em Tecnologia
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            Fiquei muito satisfeita com o resultado do meu tratamento. O dentista foi muito cuidadoso e explicou tudo detalhadamente. Obrigada!
                        </p>
                        <h4>Carla Fernandes</h4>
                        <p>
                            Consultora de Sustentabilidade Ambiental
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            Minha experiência na clínica foi ótima! O ambiente é acolhedor e os profissionais são muito competentes. Voltarei com certeza!
                        </p>
                        <h4>Ana Santos</h4>
                        <p>
                            Coordenadora de Eventos Culturais
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Estou muito feliz com o resultado do clareamento dental que fiz na clínica. Meu sorriso está mais brilhante do que nunca! Recomendo a todos!
                        </p>
                        <h4>Luísa Pereira</h4>
                        <p>
                            Analista de Mercado Financeiro
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            O atendimento na clínica foi impecável. Desde a recepção até o tratamento, fui tratado com gentileza e profissionalismo. Parabéns à equipe!
                        </p>
                        <h4>Sofia Carvalho</h4>
                        <p>
                            Instrutora de Dança de Salão
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            Fui muito bem atendido na clínica. O dentista foi muito paciente e cuidadoso durante todo o procedimento. Recomendo!
                        </p>
                        <h4>Ana Julia</h4>
                        <p>
                            Chef de Cozinha Internacional
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t1.png" alt="">
                        <p class="desc">
                            Gostaria de agradecer à equipe da clínica pelo excelente atendimento e pelo resultado incrível do meu tratamento ortodôntico.
                        </p>
                        <h4>Gabriela Santana</h4>
                        <p>
                            Desenvolvedor de Jogos Digitais
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t2.png" alt="">
                        <p class="desc">
                            Meu filho teve uma experiência muito positiva na clínica. O dentista pediátrico foi muito gentil e conseguiu deixá-lo à vontade durante o tratamento. Obrigado!
                        </p>
                        <h4>Nicole Lima</h4>
                        <p>
                            Consultora de Marketing Esportivo
                        </p>
                    </div>
                    <div class="single-testimonial item">
                        <img class="mx-auto" src="img/t3.png" alt="">
                        <p class="desc">
                            Fiz uma restauração na clínica e o resultado ficou perfeito! O dentista foi muito habilidoso e o procedimento foi rápido e sem dor. Recomendo a todos!
                        </p>
                        <h4>Rafaela Costa</h4>
                        <p>
                            Curadora de Arte Contemporânea
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testomial Area -->

@endsection
