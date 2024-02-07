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
                                <p>Quem ama sistemas ecologicamente amigáveis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-price no-padding">
                                <div class="price-top">
                                    <h4>Básico Real</h4>
                                </div>
                                <ul class="lists">
                                    <li>2.5 GB de espaço</li>
                                    <li>Transferência online segura</li>
                                    <li>Estilos ilimitados</li>
                                    <li>Serviço ao cliente</li>
                                </ul>
                                <div class="price-bottom">
                                    <div class="price-wrap d-flex flex-row justify-content-center">
                                        <span class="price">$</span><h1> 39 </h1><span class="time">Por <br> Mês</span>
                                    </div>
                                    <a href="#" class="primary-btn header-btn">Começar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-price no-padding">
                                <div class="price-top">
                                    <h4>Padrão Real</h4>
                                </div>
                                <ul class="lists">
                                    <li>10.0 GB de espaço</li>
                                    <li>Transferência online segura</li>
                                    <li>Estilos ilimitados</li>
                                    <li>Serviço ao cliente</li>
                                </ul>
                                <div class="price-bottom">
                                    <div class="price-wrap d-flex flex-row justify-content-center">
                                        <span class="price">$</span><h1> 69 </h1><span class="time">Por <br> Mês</span>
                                    </div>
                                    <a href="#" class="primary-btn header-btn">Começar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-price no-padding">
                                <div class="price-top">
                                    <h4>Real Ultimate</h4>
                                </div>
                                <ul class="lists">
                                    <li>Espaço ilimitado</li>
                                    <li>Transferência online segura</li>
                                    <li>Estilos ilimitados</li>
                                    <li>Serviço ao cliente</li>
                                </ul>
                                <div class="price-bottom">
                                    <div class="price-wrap d-flex flex-row justify-content-center">
                                        <span class="price">$</span><h1> 99 </h1><span class="time">Por <br> Mês</span>
                                    </div>
                                    <a href="#" class="primary-btn header-btn">Começar</a>
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

			<!-- Start feature Area -->
            <section class="feature-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-60 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Recursos que nos tornam únicos</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
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
                                        O comportamento inadequado muitas vezes é ignorado como "coisa de menino", as mulheres enfrentam um comportamento mais elevado.
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
                                    <h4>Consultoria Especializada</h4>
                                    <p>
                                        O comportamento inadequado muitas vezes é ignorado como "coisa de menino", as mulheres enfrentam um comportamento mais elevado.
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
                                        O comportamento inadequado muitas vezes é ignorado como "coisa de menino", as mulheres enfrentam um comportamento mais elevado.
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
                                    <h4>Ciência Odontológica</h4>
                                    <p>
                                        O comportamento inadequado muitas vezes é ignorado como "coisa de menino", as mulheres enfrentam um comportamento mais elevado.
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
                                        O comportamento inadequado muitas vezes é ignorado como "coisa de menino", as mulheres enfrentam um comportamento mais elevado.
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
                                        O comportamento inadequado muitas vezes é ignorado como "coisa de menino", as mulheres enfrentam um comportamento mais elevado.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			<!-- End feature Area -->

@endsection
