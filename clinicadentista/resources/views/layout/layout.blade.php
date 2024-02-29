<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{ asset ('img/fav.png') }}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>@yield('title') - DentalCare</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

			<!--CSS
			============================================= -->
			<link rel="stylesheet" href="{{ asset ('css/linearicons.css') }}">
			<link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ asset ('css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{ asset ('css/nice-select.css') }}">
			<link rel="stylesheet" href="{{ asset ('css/animate.min.css') }}">
			<link rel="stylesheet" href="{{ asset ('css/jquery-ui.css') }}">
			<link rel="stylesheet" href="{{ asset ('css/owl.carousel.css') }}">
			<link rel="stylesheet" href="{{ asset ('css/main.css') }}">
            <link rel="stylesheet" href="{{ asset ('css/style.css') }}">


      </head>
<body>

    <header id="header" id="home">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                      <a href="{{ url ('/') }}"><img src="{{ asset ('img/logo-dentalcare.jpg') }}" alt="" title="" /></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                      <a class="btns" href="tel:11 951694143">11 951694143</a>
                        <a class="btns" href="mailto:dentalcare@gmail.com">dentalcare@gmail.com</a>
                        <a class="icons" href="tel:11 951694143">
                            <span class="lnr lnr-phone-handset"></span>
                        </a>
                        <a class="icons" href="mailto:dentalcare@gmail.com">
                            <span class="lnr lnr-envelope"></span>
                        </a>
                    </div>
                </div>
            </div>
      </div>
      <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/sobre') }}">Sobre</a></li>
                <li><a href="{{ url('/servicos') }}">Serviços</a></li>
                <li><a href="{{ url('/horarioAtendimento') }}">Horário de Atendimento </a></li>

                <li><a href="{{ url('/precos') }}">Preços</a></li>
                <li><a href="{{ url ('/contato') }}">Contato</a></li>
              </ul>
            </nav><!-- #nav-menu-container -->

            <div class="header-btn-login">
                <i class="fa fa-user"></i>
                <a href="{{ url ('/login') }}" class="primary-btn-login text-uppercase">Login</a>
            </div>

          </div>
      </div>
    </header><!-- #header -->

    <main>
        @yield('conteudo')
    </main>

    <!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6">
					<div class="single-footer-widget">
						<h6>Melhores Produtos</h6>
						<ul class="footer-nav">
							<li><a href="#">Manutenção de Aparelhos</a></li>
							<li><a href="#">Lente de Contato Dental</a></li>
							<li><a href="#">Clareamento</a></li>
							<li><a href="#">Canal Dental</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Contate-nos</h6>
						<p>
							Avenida Marechal Tito, 1500 - São Paulo, Brasil
						</p>
						<h3>11 95169-4143</h3>
                        <h3>dentalcare@gmail.com</h3>
					</div>
				</div>


                <div class="iframe-rodape">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1708543859095!6m8!1m7!1so4hCE3WdfT9UhjYw_JQ6KA!2m2!1d-23.49526007439035!2d-46.43168714458266!3f211.28012953375514!4f24.383846072478747!5f0.5790141625933043" width="550" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

			</div>
			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- O link de volta ao Colorlib não pode ser removido. O modelo é licenciado sob CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Este modelo é feito por <a href="https://github.com/GustaSoier" target="_blank">Gustavo Sampaio Soier</a>
	<!-- O link de volta ao Colorlib não pode ser removido. O modelo é licenciado sob CC BY 3.0. --></p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
			<!-- End footer Area -->

			<script src="{{ asset ('js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{ asset ('js/vendor/bootstrap.min.js') }}"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{ asset ('js/easing.min.js') }}"></script>
			<script src="{{ asset('js/hoverIntent.js') }}"></script>
			<script src="{{ asset ('js/superfish.min.js') }}"></script>
			<script src="{{ asset ('js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{ asset ('js/jquery.magnific-popup.min.js') }}"></script>
 			<script src="{{ asset ('js/jquery-ui.js') }}"></script>
			<script src="{{ asset ('js/owl.carousel.min.js') }}"></script>
			<script src="{{ asset ('js/jquery.nice-select.min.js') }}"></script>
			<script src="{{ asset ('js/mail-script.js') }}"></script>
			<script src="{{ asset ('js/main.js') }}"></script>


</body>
</html>
