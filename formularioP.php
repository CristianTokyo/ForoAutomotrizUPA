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
	      <a class="navbar-brand" href="index.html"><img src="images/logo_foroAutomotriz_SinFecha.png" width="300" height = "200"></a>
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

<!-- Formulario para ellegit el taller  -->
<!-- <input type="radio" name="" id=""> -->
<!--Falta que cuando no haya información no lo muestre  -->
  <section class ="ftco-section">
    <div class = "container">
      <div class = "heading mb-5 pt-5 pl-md-5">
        <h2>Selección de actividades por día</h2>
        <h3>La disponibilidad de las actividades o visitas industriales está sujeta al cupo de las mismas.</h3>
        <h3>Una vez guardadas las actividades no se podrán hacer cambios.</h3>
      </div>
      <div class="row">
        <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
          <!--<div class="block-18 text-center py-4 mb-4">
            <form action="<?php  // echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input class="btn btn-primary" type="submit"   name="nov27"    value="Selecciona las Visitas Industriales">
            </form>
          </div>-->
        </div>
        <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center py-4 mb-4">
            <form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input class="btn btn-primary" type="submit"   name="nov26"    value="Selecciona tus actividades">
            </form>
        </div>
      </div>

    </div>
  </section>

    <div class = "container">
      <?php if(isset($_POST['nov26'])):   ?>
        <form action="<?php   echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"  class="bg-light p-5 contact-form">
        <h1> 26 de Noviembre de 2019</h1>
        <table  class="table table-bordered table-responsive table-hover">
          <thead class = "thead-dark">
            <tr style="text-align: center" >
              <th> Horario </th>
              <th> Tipo de Actividad</th>
              <th> Actividad </th>
              <th> Expositor </th>
              <th> Asistiré </th>
            </tr>
          </thead>
          <tbody>
            <tr>
               <th rowspan="2">11:00-12:30</th>
               <td rowspan="2">Panel Magistral<br><br><br>Conferencia</td>
               <td rowspan="2">Tendencias del sector automotriz y la pertinencia del sector educativo
               <br><br><br></td>
               <td rowspan="2">Dr. Herminio Baltazar Cisneros<br><br>Dr. Eduardo Solis Sánchez</td>
               <td rowspan="2"><input type="radio" name="tag_2" id="" value="2"
                 <?php if($_SESSION['tags'][2] === 1) echo 'checked disabled';?>
                 <?php if($_SESSION['tags'][3] === 1) echo 'disabled';?>><br><br><br>
                 <input type="radio" name="tag_2" id="" value="3"
                   <?php if($_SESSION['tags'][3] === 1) echo 'checked disabled';?>
                   <?php if($_SESSION['tags'][2] === 1) echo 'disabled';?>></td>
            </tr>
            <tr></tr>
            <tr>
              <th>12:30-13:00</th>
              <td>Concurso</td>
              <td>Modelado en SolidWorks.Primera etapa</td>
              <td></td>
              <td>
                <input type="checkbox" name="tag_3" value="4" id=""
                <?php if($_SESSION['tags'][4] === 1) echo 'checked disabled';?>>
              </td>
            </tr>
            <tr>
              <th>13:00-15:00</th>
              <td>Conferencia</td>
              <td>Industria 4.0</td>
              <td>Ina Helena Ringk Seterbakken</td>
              <td><input <input type="checkbox" name="tag_4" value="5" id=""
                <?php if($_SESSION['tags'][5] === 1) echo 'checked disabled';?>></td>
            </tr>
            <tr>
                <th rowspan ="2">13:15-14:15</th>
                <td rowspan="2">Conferencia
                <br><br><br>Conferencia</td>
                <td rowspan="2">Nuevo Lenguaje de comunicación de la calidad en las empresas
                <br><br><br>El impacto y desarrolo de la manufactura automotriz</td>
                <td rowspan="2">Ing. Salvador Esparza del Pozo
                <br><br>Ing. Sergio Luna Flores</td>
                <th rowspan="2"><input type="radio" name="tag_5" value="6" id=""
                  <?php if($_SESSION['tags'][6] === 1) echo 'checked disabled';?>
                  <?php if($_SESSION['tags'][7] === 1) echo 'disabled';?>>
                <br><br><br><input type="radio" name="tag_5" value="7" id=""
                <?php if($_SESSION['tags'][7] === 1) echo 'checked disabled';?>
                <?php if($_SESSION['tags'][6] === 1) echo 'disabled';?>></th>
            </tr>
            <tr>
            </tr>
            <tr>
              <th rowspan="3">16:15-18:00</th>
              <td rowspan="3">Taller
              <br><br><br>Taller<br><br>Conferencia<br><br><br>Conferencia</td>
              <td rowspan="3">Lean Manufacturing. Identificación y solución de problemas en una cadena de valor
              <br><br>Oportunidades y retos de la industria de las TI en México y en el mundo
            <br><br>Es tiempo de crear</td>
              <td rowspan="3">Dr. Julio Alberto Márquez Landa
                  <br><br>Ing. Guillermo Ortega
                  <br><br>Ing. Cuitláhuac Pérez Cerros
                </td>
                  <td rowspan="3"><input type="radio" name="tag_6" value="8" id=""
                    <?php if($_SESSION['tags'][8] === 1) echo 'checked disabled';?>
                    <?php if($_SESSION['tags'][19] === 1) echo 'disabled';?>
                    <?php if($_SESSION['tags'][10] === 1) echo 'disabled';?>>

                  <br><br><br><input type="radio" name="tag_6" value="10" id=""
                  <?php if($_SESSION['tags'][10] === 1) echo 'checked disabled';?>
                  <?php if($_SESSION['tags'][19] === 1) echo 'disabled';?>
                <?php if($_SESSION['tags'][8] === 1) echo 'disabled';?>>

                <br><br><br><input type="radio" name="tag_6" value="19" id=""
                <?php if($_SESSION['tags'][19] === 1) echo 'checked disabled';?>
                <?php if($_SESSION['tags'][10] === 1) echo 'disabled';?>
              <?php if($_SESSION['tags'][8] === 1) echo 'disabled';?>></td>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
              <th>12:00-19:00</th>
              <td>ExpoProyectos</td>
              <td>Inscribirme para participar con mi proyecto</td>
              <td></td>
              <td><input <input type="checkbox" name="tag_7" id="" value="11"
                <?php if($_SESSION['tags'][11] === 1) echo 'checked disabled';?>
                <?php if($_SESSION['tags'][21] === 1) echo 'disabled';?>
                <?php if($_SESSION['tags'][22] === 1) echo 'disabled';?>></td>
            </tr>
        </tbody>
        </table>
        <table  class="table table-bordered table-responsive table-hover">
            <h1> 27 de Noviembre de 2019</h1>
            <thead class = "thead-dark">
              <tr style="text-align: center">
                <th> Horario </th>
                <th> Tipo de Actividad</th>
                <th> Actividad </th>
                <th> Expositor </th>
                <th> Asistiré </th>
              </tr>
            </thead>
            <tbody>
              <tr >
                <th>09:00-11:00 </th>
                <td>Conferencia Magistral</td>
                <td>The challenging, amazing and incredible expedition to Business-Excellence</td>
                <td>Frank Nalepa</td>
                <td><input type="checkbox" name="tag_8" id="" value="12"
                  <?php if($_SESSION['tags'][12] === 1) echo 'checked disabled';?>
                  <?php if($_SESSION['tags'][20] === 1) echo 'disabled';?>></td>
              </tr>
              <tr>
                <th>09:00-12:30</th>
                <td>Concurso</td>
                <td>Moldelado en SolidWorks. Final (debe inscribirse en el día 26)</td>
                <td></td>
                <td><input <input type="checkbox" name="tag_9" value="17" id="" value="" disabled
                  <?php if($_SESSION['tags'][4] === 1) echo 'checked';?>
                <?php if($_SESSION['tags'][20] === 1) echo 'disabled';?>></td>
              </tr>
              <tr>
                 <th rowspan="2">11:00-12:30</th>
                 <td rowspan="2">Panel
                 <br><br><br>Conferencia</td>
                 <td rowspan="2">Jóvenes emprendedores en la proveeduria automotriz de autopartes
                 <br><br>Importancia del factor humano  en  el sector automotriz</td>
                 <td rowspan="2">Ing. Abraham Eduardo Pinedo Martínez
                 <br><br>Ma. de Lourdes Quijas Jiménez</td>
                 <td rowspan="2"><input type="radio" name="tag_10" value="13" id=""
                   <?php if($_SESSION['tags'][13] === 1) echo 'checked disabled';?>
                   <?php if($_SESSION['tags'][14] === 1) echo 'disabled';?>
                   <?php if($_SESSION['tags'][20] === 1) echo 'disabled';?>>
                   <br><br><br><input type="radio" name="tag_10" value="14" id=""
                   <?php if($_SESSION['tags'][14] === 1) echo 'checked disabled';?>
                   <?php if($_SESSION['tags'][13] === 1) echo 'disabled';?>
                   <?php if($_SESSION['tags'][20] === 1) echo 'disabled';?>></td>
              </tr>
              <tr>
              </tr>
              <tr>
                <th rowspan="3">12:45-14:30</th>
                <td rowspan="3">Conferencia
                <br><br><br>Conferencia
                <br><br><br>Taller</td>
                <td rowspan="3">Desarrollo de la PYMES para la proveeduria automotriz
                <br><br><br>Un México emprendedor
                <br><br><br>Inventarios estratégicos en la industria automotriz
                </td>
                <td rowspan="3">Ing. Armando Gómez de la Torre
                <br><br>MDA. Juan Camilo Mesa Jaramillo
                <br><br>Álvaro Salinas Figueroa
                </td>
                <td rowspan="3"><input type="radio" name="tag_11" value="15" id=""
                  <?php if($_SESSION['tags'][15] === 1) echo 'checked disabled';?>
                  <?php if($_SESSION['tags'][16] === 1) echo 'disabled';?>
                  <?php if($_SESSION['tags'][18] === 1) echo 'disabled';?>>
                <br><br><br><input type="radio" name="tag_11" value="16" id=""
                <?php if($_SESSION['tags'][16] === 1) echo 'checked disabled';?>
                <?php if($_SESSION['tags'][15] === 1) echo 'disabled';?>
                <?php if($_SESSION['tags'][18] === 1) echo 'disabled';?>>
                <br><br><br><input type="radio" name="tag_11" value="18" id=""
                <?php if($_SESSION['tags'][18] === 1) echo 'checked disabled';?>
                <?php if($_SESSION['tags'][15] === 1) echo 'disabled';?>
                <?php if($_SESSION['tags'][16] === 1) echo 'disabled';?>></td>
              </tr>
              <tr></tr>
              <tr></tr>

              <tr>
                <th>15:00-16:00 </th>
                <td>Conferencia magistral</td>
                <td>Tendencias de la industria Automotriz</td>
                <td>Ing. Armando Ávila Moreno</td>
                <td>
                  <input type="checkbox" name="tag_1" id="" value="1"
                  <?php if($_SESSION['tags'][1] === 1) echo 'checked disabled';?>></td>
              </tr>
          </tbody>
        </table>
        <input type="submit"  name="guardar" value="Guardar"class="btn btn-primary">
        <input type="submit"  name="Noguardar" value="Cerrar" class="btn btn-primary">
        </form>
        <?php endif;   ?>
    </div>

    <!--Formulario Visitas Industriales-->
    <!--<div class = "container">
      <?php //if(isset($_POST['nov27'])):   ?>
        <form action="<?php   //echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST"  class="bg-light p-5 contact-form">
        <h1> 26 de Noviembre de 2019</h1>
        <table  class="table table-bordered table-responsive table-hover">
          <thead class = "thead-dark">
            <tr style="text-align: center" >
              <th> Horario </th>
              <th> Tipo de Actividad</th>
              <th> Actividad </th>
              <th> Asistiré </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>07:30-12:00</th>
              <td>Visita Industrial</td>
              <td>NISSAN A1</td>
              <td>
                <input type="checkbox" name="tag_13" id="" value="21" checked disabled></td>
            </tr>
            <tr>
              <th>08:30-12:00 </th>
              <td>Visita Industrial</td>
              <td>Gestamp</td>
              <td>
                <input type="checkbox" name="tag_13" id="" value="22"
                <?php //if($_SESSION['tags'][22] === 1) echo 'checked disabled';?>
                <?php //if($_SESSION['tags'][21] === 1) echo 'disabled';?>></td>
            </tr>
        </tbody>
      </table>-->
        <!--<table  class="table table-bordered table-responsive table-hover">
            <h1> 27 de Noviembre de 2019</h1>
            <thead class = "thead-dark">
              <tr style="text-align: center">
                <th> Horario </th>
                <th> Tipo de Actividad</th>
                <th> Actividad </th>
                <th> Asistiré </th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <th>09:00-13:00</th>
              <td>Visita Industrial</td>
              <td>Cooper Standard</td>
              <td><input <input type="checkbox" name="tag_12" value="20" id=""
                <?//php if($_SESSION['tags'][20] === 1) echo 'checked disabled';?></td>
            </tr>
          </tbody>
        </table>
        <input type="submit"  name="guardarVisita" value="Guardar"class="btn btn-primary">
        <input type="submit"  name="Noguardar" value="Cerrar" class="btn btn-primary">
        </form>
        <?php //endif;   ?>
    </div>-->
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
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">449 333 11 00</span></a></li>
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
