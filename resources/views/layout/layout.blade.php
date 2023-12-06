<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') - Clínica DentalCare</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.css" integrity="sha512-GL7EM8Lf8kU23I3kTio2kRWt8YRDVIQcSZjRVtVRfk05kB/QvkyafuTC94Ev0X6qk7Z0r5s06c1lsP1p/ezDYw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>

    <header>
        <div class="interface site">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo do Dentista">
                </a>
            </div>

            <nav class="menu-desktop">
                <ul>
                    <li><a href="{{ url('/') }}">Início</a></li>
                    <li><a href="{{ url('/servicos') }}">Serviços e Planos</a></li>
                    <li><a href="{{ url('/dentistas') }}">Dentistas</a></li>
                    <li><a href="{{ url('/contato') }}">Contato</a></li>
                </ul>
            </nav>

            <div class="btn-login">
                <a href="#">
                <button>Login</button>
                </a>
            </div>

            <div class="btn-abrir-menu" id="btn-menu"><i class="bi bi-list"></i></div>

            <div class="menu-mobile" id="menu-mobile">
                <div class="btn-fechar"><i class="bi bi-x-lg"></i></div>

                    <nav>
                        <ul>
                            <li><a href="{{ url('/') }}">início</a></li>
                            <li><a href="{{ url('/servicos') }}">Serviços e Planos</a></li>
                            <li><a href="{{ url('/dentistas') }}">Dentistas</a></li>
                            <li><a href="{{ url('/contato') }}">Contato</a></li>
                        </ul>
                        <div class="btn-login-mobile">
                            <a href="#">
                            <button>Login</button>
                            </a>
                        </div>
                    </nav>
            </div>

                <div class="overlay-menu" id="overlay-menu"></div>
        </div>
    </header>

    <main class="container">
        @yield('conteudo')
    </main>


<script src="{{ asset('js/script.js') }}"></script>


</body>
</html>
