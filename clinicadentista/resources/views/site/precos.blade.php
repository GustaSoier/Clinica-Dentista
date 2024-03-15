@extends('layout.layout')

@section('title', 'Preços')

@section('conteudo')

			<!-- start banner Area -->
            <section class="banner-area relative about-banner" id="home">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="about-content col-lg-12">
                            <h1 class="text-white">
                                Plano de Preços
                            </h1>
                            <p class="text-white link-nav"><a href="{{ url ('/') }}">Início </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ url ('/precos') }}"> Plano de Preços</a></p>
                        </div>
                    </div>
                </div>
            </section>

			<!-- End banner Area -->

			<!-- Start price Area -->
            <section class="price-area section-gap" id="price">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-60 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Escolha o melhor plano para você</h1>
                                <p>Conheça nossos planos odontológicos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-price no-padding">
                                <div class="price-top">
                                    <h4>Plano Básico</h4>
                                </div>
                                <ul class="lists">
                                    <li>Limpeza profissional anual</li>
                                    <li>Consultas de rotina</li>
                                    <li>Raios-X diagnósticos</li>
                                    <li>Descontos em procedimentos adicionais</li>
                                </ul>
                                <div class="price-bottom">
                                    <div class="price-wrap d-flex flex-row justify-content-center">
                                        <span class="price">R$</span><h1> 59 </h1><span class="time">Por <br> Mês</span>
                                    </div>
                                    <a href="#" class="primary-btn header-btn">Contratar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-price no-padding">
                                <div class="price-top">
                                    <h4>Plano Padrão</h4>
                                </div>
                                <ul class="lists">
                                    <li>Limpeza profissional semestral</li>
                                    <li>Consultas de rotina</li>
                                    <li>Raios-X diagnósticos</li>
                                    <li>Tratamentos de cáries</li>
                                </ul>
                                <div class="price-bottom">
                                    <div class="price-wrap d-flex flex-row justify-content-center">
                                        <span class="price">R$</span><h1> 89 </h1><span class="time">Por <br> Mês</span>
                                    </div>
                                    <a href="#" class="primary-btn header-btn">Contratar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-price no-padding">
                                <div class="price-top">
                                    <h4>Plano Premium</h4>
                                </div>
                                <ul class="lists">
                                    <li>Limpeza profissional trimestral</li>
                                    <li>Consultas de rotina</li>
                                    <li>Tratamentos de canal</li>
                                    <li>Clareamento dental anual</li>
                                </ul>
                                <div class="price-bottom">
                                    <div class="price-wrap d-flex flex-row justify-content-center">
                                        <span class="price">R$</span><h1> 129 </h1><span class="time">Por <br> Mês</span>
                                    </div>
                                    <a href="#" class="primary-btn header-btn">Contratar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<!-- End price Area -->

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

@endsection
