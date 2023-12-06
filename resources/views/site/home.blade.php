@extends('layout.layout'){{-- para extender da página layout--}}

@section('title', 'Home')


@section('conteudo')

<section class="banner">
    <div>
        <div class="slogan">
            <h2>
                Seu Sorriso, Nosso Compromisso - Transformando Vidas, Cuidando de Sorrisos.
            </h2>

            <p>Excelência em Saúde Bucal. Nossa clínica oferece atendimento especializado e tecnologia de ponta para garantir sorrisos saudáveis e confiantes. Profissionais dedicados e ambiente acolhedor para cuidar da sua saúde oral com o máximo conforto.</p>

            <a href="#">Marque uma consulta</a>
        </div>
    </div>

        <span class="seta-abaixo">
            <a href="#sobre">
                <i class="ri-arrow-down-double-line"></i>
            </a>
        </span>
</section>

    <section id="sobre" class="sobre site">
        <div>

            <div>
                <h2>Sobre nossa <span> Clínica Dentista</span></h2>
                <img src="{{ asset('img/img-sobre.webp') }}" alt="Imagem do Sobre">
                <p>Bem-vindo à Clínica Dentária DentalCare, onde transformamos sorrisos e vidas. Nossa missão é ir além do convencional, proporcionando um ambiente acolhedor e tratamento personalizado. Contamos com uma equipe apaixonada, unindo perícia técnica com empatia. Oferecemos serviços odontológicos abrangentes, do preventivo ao estético. Nosso compromisso é garantir transparência, educação e conforto em cada etapa do tratamento. Junte-se a nós nessa jornada por um sorriso saudável e radiante na Clínica Dentária DentalCare. Cada sorriso conta uma história única, e nós valorizamos todas. Agende sua consulta e permita-nos transformar seu sorriso. Seja bem-vindo à Clínica Dentária DentalCare, onde cada sorriso é prioridade.</p>
                <a href="#">Saiba mais</a>
            </div>

            <div>

            </div>

        </div>
    </section>

        <div class="especialidades site">
            <div class="item-especialidades"><i class="ri-wallet-line"></i></div>
            <div class="item-especialidades"></div>
            <div class="item-especialidades"></div>
            <div class="item-especialidades"></div>
        </div>

@endsection
