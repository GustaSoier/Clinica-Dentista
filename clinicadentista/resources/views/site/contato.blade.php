@extends('layout.layout')

@section('title', 'Contato')

@section('conteudo')

<!-- Início da Área do Banner -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Contate-nos
                </h1>
                <p class="text-white link-nav"><a href="{{ url ('/') }}">Início </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ url ('/contato') }}"> Contate-nos</a></p>
            </div>
        </div>
    </div>
</section>
<!-- Fim da Área do Banner -->

<!-- Início da Área da Página de Contato -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <div class="map-wrap" style="width:100%; height: 445px;" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!4v1707162173364!6m8!1m7!1sqTfr43DumECe7E_lnCJX2A!2m2!1d-23.49524643857626!2d-46.43192412545578!3f168.5647316172052!4f16.430815831968715!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>f
                    </div>
                    <div class="contact-details">
                        <h5>São Miguel Paulista, São Paulo</h5>
                        <p>
                            Avenida Marechal Tito, 1500
                        </p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>11 951694143</h5>
                        <p>Seg a Sex 9h às 18h</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5>dentalcare@gmail.com</h5>
                        <p>Envie-nos sua consulta a qualquer momento!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Digite seu nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite seu nome'" class="common-input mb-20 form-control" required="" type="text">

                            <input name="email" placeholder="Digite o endereço de e-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite o endereço de e-mail'" class="common-input mb-20 form-control" required="" type="email">

                            <input name="subject" placeholder="Digite o assunto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite o assunto'" class="common-input mb-20 form-control" required="" type="text">
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Digite a mensagem" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite a mensagem'" required=""></textarea>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button class="genric-btn primary circle" style="float: right;">Enviar Mensagem</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Fim da Área da Página de Contato -->


@endsection
