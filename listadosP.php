<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
  <head>

    <title>FIIA Aguascalientes-UPA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><img src="images/logo_foroAutomotriz_SinFecha.png" width="300" height = "100"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="index.html" class="nav-link">Inicio</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">Nosotros</a></li>
	          <!--<li class="nav-item"><a href="speakers.html" class="nav-link">Conferencistas</a></li>-->
	          <li class="nav-item"><a href="schedule.html" class="nav-link">Programa</a></li>
	          <!--<li class="nav-item"><a href="blog.html" class="nav-link">Aliados</a></li>-->
            <li class="nav-item"><a href="hospitality.html" class="nav-link">Hospitalidad</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contacto</a></li>
	          <li class="nav-item cta mr-md-2"><a href="index.html" class="nav-link">Registro</a></li>
            <li class="nav-item cta mr-md-2"><a href="stands.html" class="nav-link">Stand</a></li>
            <li class="nav-item"><a href="https://vivaaguascalientes.com/" class="nav-link"><img src= "images/VivaAguascalientes.png" width="100" height="50"></a></li>
          </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/portada_foro.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Selección de actividades</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Selección de actividades <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

<!--Boton de selección-->
  <!--Tabla de eventos-->
  <section class ="ftco-section">
    <div class = "container">
      <div class = "heading mb-5 pt-5 pl-md-5">
        <h2>Generador de listados por actividades</h2>
      </div>
      <div class="row">
        <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center py-4 mb-4">
            <form action="listados.php" method="post">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Eventos</label>
                </div>

                <?php if($_SESSION['nombre'] == 'administrador'): ?>
                <select class="custom-select" id="inputGroupSelect01" name = "idevento">
                  <option selected>Choose...</option>
                  <?php listadoEventos($eventos);?>
                </select>
                <?php endif;   ?>
              </div>
               <input class="btn btn-primary" type="submit"   name="listas"    value="Crear listados">
            </form>
      </div>
    </div>
  </div>
    <?php if(isset($_POST['listas'])):   ?>
  <div class = "container">
      <form action="listados.php" method="POST"  class="bg-light p-5 contact-form">

            <?php listadoParticipantes($participantes, $eventoSeleccionado); ?>
          </tbody>
      </table>
      <input type="submit"  name="listado" value="Guardar"class="btn btn-primary" onclick= "test1();">
      <input type="submit"  name="Noguardar" value="Cerrar" class="btn btn-primary">
      </form>
  </div>
        <?php endif;   ?>
  </section>
    <br>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Foro Internacional de la Industria Automotriz.</h2>
              <p>Este foro es una plataforma para la industria regional y nacional que pretende impulsar la calidad de los empresarios mexicanos y el desarrollo en temas de innovación de nuestros jóvenes universitarios y profesionistas.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/Foro_Automotriz"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/pg/Foro-Internacional-de-la-Industria-Automotriz-100322484707922/about/?ref=page_internal"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/forointernacionalautomotriz/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Páginas Amigas</h2>
              <ul class="list-unstyled">
                <li><a href="www.upa.edu.mx" class="py-2 d-block">Universidad Politécnica de Aguascalientes</a></li>
                <li><a href="http://www.aguascalientes.gob.mx/" class="py-2 d-block">Gobierno de Aguascalientes</a></li>
                <li><a href="https://grupomaen.mx/" class="py-2 d-block">Grupo Industrial Automotriz MAEN</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacidad</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Políticas</a></li>
                <li><a href="about.html" class="py-2 d-block">Acerca de nosotros </a></li>
                <li><a href="contact.html" class="py-2 d-block">Contáctanos</a></li>
                <li><a href="hospitality.html" class="py-2 d-block">Hospitalidad</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">¿Tienes una pregunta?</h2>
              <div class="block-23 mb-3">
                <ul>

                  <li><span class="icon icon-map-marker"></span><span class="text">Desarrollo Especial Talleres F.F.C.C., 20270 Aguascalientes, Ags.</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">4421400</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">foroautomotriz@upa.edu.mx</span></a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/formulario.js"></script>
  <?php require("validate.php");?>
  </body>
</html>
