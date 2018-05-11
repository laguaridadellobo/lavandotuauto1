<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Real estate web template by webthemez.com">
    <meta name="author" content="webthemez">
    <title>Lavando Tu Auto</title>
	<!-- core CSS -->

    <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ url('css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{ url('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{ url('css/styles.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ url('images/ico/favicon.ico') }}">
</head>

<body id="home">

    <header id="header">
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="{{ url('/images/logo.png') }}" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">

                        <li class="scroll active"><a href="#home">Inicio</a></li>
                        <li class="scroll"><a href="#services">Beneficios</a></li>
                        <li class="scroll"><a href="#about">Quienes somos</a></li>
                        <li class="scroll"><a href="#pricing">Precios</a></li>
                        <li class="scroll"><a href="#portfolio">Galeria</a></li>
                        <li class="scroll"><a href="#our-team">Equipo</a></li>
                        <li class="scroll"><a href="#contact-us">Contacto</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content">

                                    <h2>Lavando <span>Tu </span> Auto</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                    <h2>Mejor <span>Servicio </span> de Lavado</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="hero-text" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Tu auto limpio a un solo click</h2>
                    <p>Disfruta tu día. Nosotros nos encargamos de tu auto.
                    </p>
                </div>
            </div>
        </div>
    </section><!--/#hero-text-->

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Beneficios</h2>
                <p class="text-center wow fadeInDown">Inicia tu propio negocio o expande los servicios de tu actual empresa de auto lavado. <br> Con Lavando tu Auto es muy fácil aumentar tus ingresos.</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Comodidad</h4>
                                <p>En tu casa o en tu oficina. Llegamos a donde te encuentres. </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-shield"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Seguridad</h4>
                                <p>Personal capacitado. Conoce quién lavará tu auto. </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Reservar</h4>
                                <p>Al momento o reservado para la hora en que lo necesites. </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-cube"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Comodo</h4>
                                <p>Limpiamos tu auto donde quiera que se encuentre. (Revisa nuestras zonas de cobertura).</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                  <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-history"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Inmediato</h4>
                                <p>Menor tiempo de espera y sin tener que moverte.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Cargo Automatico</h4>
                                <p>No necesitas efectivo, nuestros servicios se cargan directamente a tu Tarjeta de Crédito o Débito..</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->


 <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nosotros</h2>
                <p class="text-center wow fadeInDown">Objetivo<br> Reinventar y consolidar el sistema de autolavados de la ciudad convirtiéndonos en los líderes en este ramo.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                  <img class="img-responsive" src="images/about.png" alt="">
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <p><strong>Justificación</Strong> Con este autolavado se busca ofrecer una solución integral a nuestros clientes, basado en un modelo de calidad que permite economizar dinero y ahorrar tiempo en la obtención del servicio, con una visión de negocio a largo plazo bajo un esquema de todos ganamos (ganar-ganar).
<p>

                    <p><strong>Misíon</strong>Mediante su personal, altamente capacitado y profesionalizado, el autolavado “El Rapidito” ofrece servicio de lavado de auto y camioneta, en todos sus aspectos: lavado, aspirado interno y de cajuela, encerado, lavado de asientos y vestiduras, lavado y aspirado del motor durante todo el año, en corto tiempo y a un bajo costo. </p>

					<p><strong>Visión</strong>Ser el primer centro de Lavado de gran renombre en la Ciudad de Santa Ana de Coro, por la calidad del servicio, del producto y del tiempo de respuesta, asumiendo así el compromiso con nuestra clientela, poniendo a prueba el alto nivel de nuestro equipo de trabajo profesional, innovador y actualizado.</p>


                </div>
            </div>
        </div>
    </section><!--/#about-->


<section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Promociones</h2>
                <p class="text-center wow fadeInDown">Conoce nuestras promociones primero que nadie.<br></p>
            </div>

            <div class="row">
			<div class="col-md-4">
                        <ul class="price" style="width:100%">
						<li class="header">Basico</li>
						<li class="grey">Precio Especial $60</li>
						<li>Lavado Exterior</li>
						<li>Lavado Interior</li>
						<li>Almorol en llantas</li>
						<li class="grey"><a href="javascript:void(0)" class="button w3-hover-green">Pedir Ahora</a></li>
						</ul>
                        </div>
						<div class="col-md-4">
                             <ul class="price" style="width:100%">
						<li class="header">Avanzado</li>
						<li class="grey">Precio Especial $250</li>
						<li>Lavado Exterior</li>
						<li>Lavado Interior</li>
						<li>Almorol en llantas</li>
						<li>Encerado y Pulido</li>
						<li>Lavado de Motor</li>
						<li>Brillo en puertas y cabina</li>
						<li class="grey"><a href="javascript:void(0)" class="button w3-hover-green">Pedir Ahora</a></li>
						</ul>
                        </div>
						<div class="col-md-4">
						   <ul class="price" style="width:100%">
						<li class="header">Premium</li>
						<li class="grey">Precio Especial $650</li>
						<li>Lavado Exterior</li>
						<li>Lavado Interior</li>
						<li>Almorol en llantas</li>
						<li>Encerado y Pulido</li>
						<li>Descontaminacion de pintura y vidrios</li>
						<li>Lavado de asientos</li>
						<li>Lavado de Motor</li>
						<li>Brillo en puertas y cabina</li>
						<li class="grey"><a href="javascript:void(0)" class="button w3-hover-green">Pedir Ahora</a></li>
						</ul>
                        </div>
			</div>
        </div>
    </section><!--/#pricing-->




  <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nuestro Equipo</h2>
                <p class="text-center wow fadeInDown"></p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">Mostrar todo</a></li>
                    <li><a href="#" data-filter=".designing">Exterior</a></li>
                    <li><a href="#" data-filter=".mobile">Interior</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item designing">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/13.jpg" alt="">
                        <div class="portfolio-info">

                            <a class="preview" href="images/portfolio/13.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/16.jpg" alt="">
                        <div class="portfolio-info">

                            <a class="preview" href="images/portfolio/16.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item designing">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/14.jpg" alt="">
                        <div class="portfolio-info">

                            <a class="preview" href="images/portfolio/14.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/17.jpg" alt="">
                        <div class="portfolio-info">

                            <a class="preview" href="images/portfolio/17.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item designing development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/15.jpg" alt="">
                        <div class="portfolio-info">

                            <a class="preview" href="images/portfolio/15.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/19.jpg" alt="">
                        <div class="portfolio-info">

                            <a class="preview" href="images/portfolio/19.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item designing development">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/21.jpg" alt="">
                        <div class="portfolio-info">

                            <a class="preview" href="images/portfolio/21.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item mobile">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/20.jpg" alt="">
                        <div class="portfolio-info">

                            <a class="preview" href="images/portfolio/20.jpg" rel="prettyPhoto"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->



    <section id="our-team">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Socios y Empresas</h2>
                <p class="text-center wow fadeInDown">Lava con nosotros y conviértete en tu propio jefe. <br> Ó <BR>Une tu empresa de autolavado con nosotros y expande tu negocio.</p>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/01.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Autolavado Spyder</h3>
                            <span>Toluca de lerdo, colonia morelos</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/02.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Alejandro Rojas</h3>
                            <span>Socio</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/03.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Autolavado Walmarth</h3>
                            <span>Frente a chedrauii, Alfredo del Mazo</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="team-img">
                            <img class="img-responsive" src="images/team/04.jpg" alt="">
                        </div>
                        <div class="team-info">
                            <h3>Jorge Gomez</h3>
                            <span>Socio</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!--/#our-team-->


    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
								<h1 style="color:white">Asóciate con nosotros<br><h4>Tenemos una opción para todos</h1></h4>
                            <div class="item active">
                                <p><img class="img-thumbnail" src="images/team/04.jpg" alt=""></p>
                                <h4>Socio</h4>
                                <p>Lava con nosotros y conviértete en tu propio jefe. Lo único que necesitas es una motocicleta para
								comenzar a generar ingresos. Recibe ingresos desde el día 1. Serás tu propio jefe. Puedes tener tu propia flotilla de Lavadores.
								</p>
                            </div>
                            <div class="item">
                                <p><img class="img-responsive" src="images/team/01.jpg" alt=""></p>
                                <h4>Compañia Autolavado</h4>
                                <p>Une tu empresa de autolavado con nosotros y expande tu negocio.
Expande tu negocio de un modelo tradicional a uno digital.
La ubicación de tu negocio ya no es un obstáculo.
Llega a nuevos clientes.
Más comodidad a tus clientes ofreciendo un servicio a domicilio. </p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->


    <section id="contact-us">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Contacto.</h2>
                <p class="text-center wow fadeInDown">Estamos muy contentos que seas parte de nosotros</p>
            </div>
        </div>
    </section><!--/#contact-us-->


    <section id="contact">

        <div class="container-wrapper">
            <div class="container contact-info">
                <div class="row">

                    <div class="col-sm-12 col-md-12">
						<div class="contact-form">

		<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->

		<form action="mail" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
      <div class="container-fluid">
		<div class="control-group col-sm-3">
		<div class="controls">
		<input type="text" class="form-control pull-center" align="center"
		placeholder="Nombre" name="name" required
		data-validation-required-message="Porfavor Ingrese su Nombre" />
		<p class="help-block"></p>
		</div>
		</div>

		<div class="control-group col-sm-3">
		<div class="controls">
		<input type="email" class="form-control pull-center" placeholder="Mail" align="center"
		name="mail" required
		data-validation-required-message="Porfavor Ingrese su Contraseña" />
    <p class="help-block"></p>
		</div>
		</div>
    @if(Session::has('flash_message'))
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  {{ Session::get('flash_message') }}
              </div>
    @endif


    <div class="row">

    </div>
    <div class="control-group col-xs-12 col-sm-5"  >
		<input type="text" class="form-control pull-center" placeholder="Mensaje" align="center"
		name="mensaje" required
		data-validation-required-message="Mensaje" />
    <p class="help-block"></p>
    </div>

</div>
		<div id="success"> </div> <!-- For success/fail messages -->
		<br>
		  <div class="control-group col-sm-8">
		<button type="submit" class="btn btn-primary ">Enviar</button>
      </div>


		</form>


						</div>
                    </div>
                </div>
            </div>
        </div>
   </section><!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    Desarollo Escobar <a target="_blank" href="http://utvtol.org/" title="Free Bootstrap Themes and HTML Templates">UTVT</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="contact/jqBootstrapValidation.js"></script>
    <script src="contact/contact_me.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/custom-scripts.js"></script>
</body>
</html>
