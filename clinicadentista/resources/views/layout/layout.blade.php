<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
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

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/jquery-ui.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
      </head>
<body>

    <header id="header" id="home">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                      <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
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
                <li class="menu-has-children"><a href="">Blog</a>
                  <ul>
                    <li><a href="blog-home.html">Blog Home</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                    <li class="menu-has-children"><a href="">Level 2</a>
                      <ul>
                        <li><a href="#">Item One</a></li>
                        <li><a href="#">Item Two</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="{{ url('/precos') }}">Preços</a></li>
                <li><a href="{{ url('/elementos') }}">Elementos</a></li>
                <li><a href="{{ ('/contato') }}">Contato</a></li>
              </ul>
            </nav><!-- #nav-menu-container -->
            <div class="menu-social-icons">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
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
							<li><a href="#">Website Gerenciado</a></li>
							<li><a href="#">Gerenciar Reputação</a></li>
							<li><a href="#">Ferramentas de Potência</a></li>
							<li><a href="#">Serviço de Marketing</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Contate-nos</h6>
						<p>
							56/8, bir uttam qazi nuruzzaman road, west panthapath, kalabagan, Dhanmondi, Dhaka - 1205
						</p>
						<h3>012-6532-568-9746</h3>
						<h3>012-6532-568-97468</h3>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="single-footer-widget newsletter">
						<h6>Boletim Informativo</h6>
						<p>Você pode confiar em nós. Nós apenas enviamos ofertas promocionais, nenhum spam.</p>
						<div id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
								<div class="form-group row" style="width: 100%">
									<div class="col-lg-8 col-md-12">
										<input name="EMAIL" placeholder="Seu Endereço de Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu Endereço de Email'" required="" type="email">
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>
									</div>
									<div class="col-lg-4 col-md-12">
										<button class="nw-btn primary-btn">Inscreva<span class="lnr lnr-arrow-right"></span></button>
									</div>
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- O link de volta ao Colorlib não pode ser removido. O modelo é licenciado sob CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Este modelo é feito com <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">Colorlib</a>
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

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
 			<script src="js/jquery-ui.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>


</body>
</html>
