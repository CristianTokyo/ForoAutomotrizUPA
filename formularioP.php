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
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contacto</a></li>
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

		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Información de contacto</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Dirección:</span> Desarrollo Especial Talleres F.F.C.C., 20270 Aguascalientes, Ags.</p>
          </div>
          <div class="col-md-3">
            <p><span>Teléfono:</span> <a href="tel://1234567920">+52 449 442 14 00</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Correo Electrónico:</span> <a href="mailto:foroautomotriz@upa.edu.mx">foroautomotriz@upa.edu.mx</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Sitio WEB:</span> <a href="http://www.foroautomotrizags-upa.com/">www.foroautomotrizags-upa.com</a></p>
          </div>
        </div>
      </div>
    </section>
<!-- Formulario para ellegit el taller  -->
<!-- <input type="radio" name="" id=""> -->
<!--Falta que cuando no haya información no lo muestre  -->

  <section class ="ftco-section">
    <div class = "container">
      <form action="<?php   echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
      <input class="btn btn-primary" type="submit"   name="nov26"    value="26 Noviembre 2019">
      </form>
      <br>
      <form action="<?php   echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
      <input class="btn btn-primary" type="submit"   name="nov27"    value="27 Noviembre 2019">
      </form>

      <?php if(isset($_POST['nov26'])):   ?>
        <form action="<?php   echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"  class="bg-light p-5 contact-form">
        <table class="table table-striped">
          <tr>
            <th> Horario </th>
            <th> Tipo de Actividad</th>
            <th> Actividad </th>
            <th> Expositor </th>
            <th> Asistire </th>
          </tr>
          <tr>
            <td>10:00 -11:00 </td>
            <td>Conferencia magistral</td>
            <td>Tendencias de la industria Automotriz</td>
            <td>Ing. Armando Ávila Moreno</td>
            <td> <input type="checkbox" name="1" id="" value="1"  > </td>
          </tr>
          <tr>
             <td>11:00-12:30</td>
             <td>Panel Magistral</td>
             <td>Tendencias del sector automotriz y la pertinencia del sector educativo</td>
             <td>Dr. Herminio Baltazar Cisneros</td>
             <td><input type="checkbox" name="2" id="" value="2"  ></td>
          </tr>
          <tr>
            <td>12:30-13:00</td>
            <td>Concurso</td>
            <td>Modelado en solid works.Primera etapa</td>
            <td></td>
            <td><input type="checkbox" name="4" value="4" id=""></td>
          </tr>
          <tr>
            <td>13:00-15:00</td>
            <td>Conferencia</td>
            <td>Industria 4.0</td>
            <td>Ina Helena Ringk Seterbakken</td>
            <td><input <input type="checkbox" name="5" value="5" id="" value=""  ></td>
          </tr>
          <tr>
              <th rowspan ="2">13:15-14:15</th>
              <td>Conferencia</td>
              <td>Nuevo Lenguaje de comunicación de la calidad en las empresas</td>
              <td>Ing. Salvador Esparza del Pozo</td>
              <td><input type="radio" name="6" value="6" id=""></td>
          </tr>
          <tr>
              <td>Conferencia</td>
              <td>El impacto y desarrolo de la manufactura automotriz</td>
              <td>Ing. Sergio Luna Flores</td>
              <td><input type="radio" name="7" value="7" id=""></td>
          </tr>
          <tr>
            <th rowspan="2">16:15-18:00</th>
            <td>Taller</td>
            <td>Lean Manufacturing. Identificación y solución de problemas en una cadena de valor</td>
            <td>Dr. Julio Alberto Márquez Landa</td>
            <td><input type="radio" name="8" value="8" id=""></td>
          </tr>
              <td>Taller</td>
              <td>Diseño de componentes automotrices</td>
              <td>MC. Juan Carlos Collazo Barrientos</td>
              <td><input type="radio" name="9" value="9" id=""></td>
          </tr>
          <tr>
            <td>12:00-19:00</td>
            <td>ExpoProyectos</td>
            <td>Inscribirme para participar con mi proyecto</td>
            <td></td>
            <td><input <input type="checkbox" name="10" id="" value="10"></td>
          </tr>
        </table>
        <input type="submit"  name="guardar" value="Guardar"class="btn btn-primary">
        </form>
        <?php endif;   ?>

      <?php if(isset($_POST['nov27'])):   ?>
        <form action="<?php   echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"  class="bg-light p-5 contact-form">
        <table  class="table table-striped">
          <tr>
            <th> Horario </th>
            <th> Tipo de Actividad</th>
            <th> Actividad </th>
            <th> Expositor </th>
            <th> Asistire </th>
          </tr>
          <tr>
            <td>09:00-11:00 </td>
<<<<<<< HEAD
            <td>Conferencia Magistral</td>
            <td>El desafío de la excelencia en la cadena de suministro</td>
            <td>Frank Nalepa</td>
            <td><input type="checkbox" name="1" id="" value="1"  ></td>
          </tr>
          <tr>
             <th rowspan="2">11:00-12:30</th>
             <td>Panel</td>
             <td>Jóvenes emprendedores en la proveeduria automotriz de autopartes</td>
             <td>Ing. Abraham Eduardo Pinedo Martínez</td>
             <td><input type="radio" name="2" value="2" id=""></td>
          </tr>
          <tr>
             <td>Conferencia</td>
             <td>Importancia del factor humano  en  el sector automotriz</td>
             <td>Ma. de Lourdes Quijas Jiménez</td>
             <td><input type="radio" name="2" value="2" id=""></td>
=======
            <td>
                Supplier development fot the OEM
                <input type="checkbox" name="1" id="" value="1"  >
            </td>
            <td></td>
>>>>>>> 1cfdaf1b2a40b7f64bcd090a29a83655b9ba47c7
          </tr>
          <tr>
            <th rowspan="2">12:45-14:30</th>
            <td>Conferencia</td>
            <td>Desarrollo de la PYMES para la proveeduria automotriz</td>
            <td>Ing. Armando Gómez de la Torre</td>
            <td><input type="radio" name="3" value="3" id=""></td>
          </tr>
          <tr>
            <td>Conferencia</td>
            <td>Innovacion y creatividad</td>
            <td>MDA. Juan Camilo Mesa Jaramillo</td>
            <td><input type="radio" name="4" value="4" id=""></td>
          </tr>
          <tr>
            <td>16:00-19:00</td>
            <td>Concurso</td>
            <td>Moldelado en Solid Works</td>
            <td></td>
            <td><input <input type="checkbox" name="5" value="5" id="" value=""  ></td>
          </tr>
          <tr>
              <th rowspan="2">16:00-18:30</th>
              <td>Taller</td>
              <td>Logística</td>
              <td>Álvaro Dávila</td>
              <td><input type="radio" name="6" value="6" id=""></td>
          </tr>
          <tr>
              <td>Conferencia</td>
              <td>Es tiempo de crear</td>
              <td>Ing. Cuitláhuac Pérez Cerros</td>
              <td><input type="radio" name="7" value="7" id=""></td>
          </tr>
        </table>
<<<<<<< HEAD
        <input type="submit"  name="guardar" value="Guardar" class="btn btn-primary">
=======
        <input type="submit" class="btn btn-primary"  name="guardar" value="Guardar">
>>>>>>> 1cfdaf1b2a40b7f64bcd090a29a83655b9ba47c7
        </form>
        <?php endif;   ?>
    </div>
  </section>


    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Información de contacto</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Dirección:</span> Desarrollo Especial Talleres F.F.C.C., 20270 Aguascalientes, Ags.</p>
          </div>
          <div class="col-md-3">
            <p><span>Teléfono:</span> <a href="tel://1234567920">+52 444 00</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Correo Electrónico:</span> <a href="mailto:foroautomotriz@upa.edu.mx">foroautomotriz@upa.edu.mx</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Sitio WEB:</span> <a href="http://www.foroautomotrizags-upa.com/">www.foroautomotrizags-upa.com</a></p>
          </div>
        </div>
    </section>

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
                <li><a href="#" class="py-2 d-block">Póliticas</a></li>
                <li><a href="about.html" class="py-2 d-block">Acerca de nosotros </a></li>
                <li><a href="contact.html" class="py-2 d-block">Contactanos</a></li>
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

  </body>
</html>
