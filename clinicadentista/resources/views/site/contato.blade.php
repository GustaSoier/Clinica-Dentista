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
                    <p class="text-white link-nav"><a href="{{ url('/') }}">Início </a> <span
                            class="lnr lnr-arrow-right"></span> <a href="{{ url('/contato') }}"> Contate-nos</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim da Área do Banner -->

    <!-- Início da Área da Página de Contato -->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <div class="mapadentista1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7318.157863237048!2d-46.4448698!3d-23.4936663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616491b50329%3A0xbf9ea041248320ba!2sS%C3%A3o%20Miguel%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1709140344235!5m2!1spt-BR!2sbr"
                        width="1140" height="445" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
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
                    <form class="form-area " id="formContato" action="{{ route('contato.enviar') }}" method="post"
                        class="contact-form text-right">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 form-group">

                                <input name="nomeContato" placeholder="Digite seu nome" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Digite seu nome'" class="common-input mb-20 form-control"
                                    required type="text" id="nomeContato" value="{{ old('nomeContato') }}">
                                <div id="nomeContatoError" class="error-mensagem"></div>


                                <input name="emailContato" placeholder="Digite o endereço de e-mail"
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Digite o endereço de e-mail'"
                                    class="common-input mb-20 form-control" required type="email" id="emailContato"
                                    value="{{ old('emailContato') }}">
                                <div id="emailContatoError" class="error-mensagem"></div>


                                <input type="text" class="common-input mb-20 form-control" name="foneContato"
                                    id="foneContato" required onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Digite seu telefone'" value="{{ old('foneContato') }}">
                                <div id="foneContatoError" class="error-mensagem"></div>


                                <select name="assuntoContato" id="assuntoContato" class="common-input mb-20 form-control"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite o assunto'"
                                    required>
                                    <option value="{{ old('assuntoContato') }}" disabled="" selected=""
                                        hidden="">Selecione o assunto</option>
                                    <option value="Aparelho">Aparelho</option>
                                    <option value="Clareamento">Clareamento</option>
                                    <option value="LentesDeContatoDental">Lentes de Contato Dental</option>
                                    <option value="Outros">Outros...</option>
                                </select>
                                <div id="assuntoContatoError" class="error-mensagem"></div>
                            </div>


                            <div class="col-lg-6 form-group div-textArea-contato">
                                <textarea class="common-textarea form-control" name="mensContato" placeholder="Digite a mensagem"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite a mensagem'" required id="mensContato"
                                    value={{ old('mensContato') }}></textarea>
                                <div id="mensContatoError" class="error-mensagem"></div>
                            </div>
                            <div class="col-lg-12 btn-email">
                                <input type="submit" value="Enviar via e-mail" class="btn-enviar"
                                    onclick="formContato(event)">
                                <div id="contatoMensagem" class="msgContato"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim da Área da Página de Contato -->


@endsection
