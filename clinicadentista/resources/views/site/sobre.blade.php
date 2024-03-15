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
                        <p>Nossa clínica oferece uma variedade de recursos exclusivos que nos diferenciam no cuidado odontológico, proporcionando aos nossos pacientes experiências únicas e resultados excepcionais em cada visita.</p>
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
                                Estamos aqui para você a qualquer hora do dia ou da noite. Nossa equipe está pronta para lidar com emergências odontológicas, garantindo que você receba o cuidado necessário quando mais precisa, sem importar o momento.
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
                                Oferecemos consultas especializadas para abordar suas necessidades odontológicas específicas. Nossa equipe está comprometida em proporcionar um ambiente acolhedor e profissional.
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
                                Nossa clínica oferece serviços de radiografia odontológica para auxiliar no diagnóstico preciso e no planejamento adequado do tratamento.
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
                            <h4>Ciência Dentária</h4>
                            <p>
                                Nossa abordagem baseia-se na mais recente ciência odontológica, utilizando técnicas e tecnologias avançadas para fornecer os melhores cuidados possíveis aos nossos pacientes.
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
                                Na nossa clínica, oferecemos cuidados odontológicos intensivos para casos que requerem atenção especial e acompanhamento contínuo.
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
                                Oferecemos serviços de planejamento familiar para garantir que toda a sua família receba o cuidado odontológico de que precisa.
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

    <!-- Start team Area -->
    <section class="team-area section-gap" id="team">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Nossos Doutores</h1>
                        <p>Nossa equipe de profissionais altamente qualificados está comprometida em oferecer o melhor cuidado odontológico possível, dedicando-se a proporcionar sorrisos saudáveis e felizes a cada paciente que atendemos.</p>
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
                            <h4>Dr. Rodrigo Lima</h4>
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
                            <h4>Dra. Camila Martins</h4>
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
                            <h4>Dr. Marcelo Silva</h4>
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
                            <h4>Dra. Ana Torres</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End team Area -->


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
