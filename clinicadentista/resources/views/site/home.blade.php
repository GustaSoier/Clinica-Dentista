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
                        Fique atento para nossos horários de atendimento!
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
                        Comprometemo-nos a oferecer serviços odontológicos de excelência, combinando cuidado personalizado, tecnologia de ponta e resultados que transformam sorrisos e vidas.
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
            <div class="col-lg-6 col-md-6">
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
            <div class="col-lg-6 col-md-6">
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
            <div class="col-lg-6 col-md-6">
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
            <div class="col-lg-6 col-md-6">
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
            <div class="col-lg-6 col-md-6">
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
            <div class="col-lg-6 col-md-6">
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

    <!-- Start appoinment Area -->
    {{-- <section class="appoinment-area section-gap relative">
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
    </section> --}}
    <!-- End appoinment Area -->

    <!-- Start blog Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Últimas do Nosso Blog</h1>
                        <p>Seu sorriso merece o melhor cuidado! Acompanhe nosso blog e descubra dicas e informações para uma saúde bucal impecável e um sorriso radiante</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset ('img/b1.jpg') }}" alt="">
                    </div>
                    <p class="date">18 Jan 2021</p>
                    <a href="blog-single.html">
                        <h4>Desvendando Mitos: Verdades Sobre os Tratamentos Dentários</h4>
                    </a>
                    <p>
                        Desmistificamos conceitos comuns sobre tratamentos odontológicos. Exploramos desde procedimentos básicos de prevenção até tratamentos estéticos avançados, oferecendo informações claras e precisas para ajudá-lo a tomar decisões informadas sobre sua saúde bucal.
                    </p>
                    {{-- <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 43 Curtidas</p>
                        <p><span class="lnr lnr-bubble"></span> 14 Comentários</p>
                    </div> --}}
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset ('img/b2.jpg') }}" alt="">
                    </div>
                    <p class="date">24 Jul 2022</p>
                    <a href="blog-single.html">
                        <h4>Inovações em Odontologia: Conheça as Últimas Tendências</h4>
                    </a>
                    <p>
                        Mantenha-se atualizado com as últimas novidades e avanços na área odontológica. Este blog destaca inovações em tecnologia, técnicas de tratamento e pesquisas científicas que estão moldando o futuro da odontologia, proporcionando insights valiosos para profissionais e pacientes.
                    </p>
                    {{-- <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 19 Curtidas</p>
                        <p><span class="lnr lnr-bubble"></span> 07 Comentários</p>
                    </div> --}}
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset ('img/b3.jpg') }}" alt="">
                    </div>
                    <p class="date">06 Ago 2023</p>
                    <a href="blog-single.html">
                        <h4>O Sorriso dos Seus Sonhos: Transforme sua Estética Dental</h4>
                    </a>
                    <p>
                        Explore o mundo da estética dental e descubra como alcançar o sorriso dos seus sonhos. Este blog oferece informações sobre clareamento dental, lentes de contato dental, alinhadores transparentes e outros tratamentos estéticos que podem melhorar sua autoconfiança e qualidade de vida.
                    </p>
                    {{-- <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 33 Curtidas</p>
                        <p><span class="lnr lnr-bubble"></span> 11 Comentários</p>
                    </div> --}}
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset ('img/b4.jpg') }}" alt="">
                    </div>
                    <p class="date">17 Set 2023</p>
                    <a href="blog-single.html">
                        <h4>Dicas de Higiene Bucal: Mantenha seu Sorriso Radiantev</h4>
                    </a>
                    <p>
                        Descubra dicas práticas e informações úteis para manter sua saúde bucal em dia. Neste blog, compartilhamos orientações sobre escovação, uso de fio dental, escolha de produtos odontológicos e muito mais para ajudá-lo a conquistar um sorriso saudável e radiante.
                    </p>
                    {{-- <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 26 Curtidas</p>
                        <p><span class="lnr lnr-bubble"></span> 14 Comentários</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- End blog Area -->

@endsection
