<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="/img/logo1.svg" />
  <title>@yield('title')</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/overwrite.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <style>

  </style>
</head>

<body>
  <nav id="menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="/"><!--<span style="font-family: 'Roboto', sans-serif;color:#cd2e27;">IPS</span><span style="font-family: 'Raleway', sans-serif;color:#1189ca;"> BIOSAlUD</span>-->
      <div><img src="img/logo1.svg" alt="" width="170px" style="margin-top:-10px;"></div></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="/">Home</a></li>
            <li role="presentation"><a href="/Citas">Citas</a></li>
            <li role="presentation"><li>
                <a href="/Servicios">Servicios</a>
              <ul class="nav nav-tabs" role="tablist">                
                <li role="presentation"><a href="/Quimica">Quimica</a></li>
                <li role="presentation"><a href="#">Microbiologia</a></li>
                <li role="presentation"><a href="#">Hematologia</a></li>
              </ul>
            </li>
            <li role="presentation"><a href="/Resultados">Resultados</a></li>
            <li role="presentation"><a href="/Contacto">Contacto</a></li>
            <li role="presentation"><a href="/login"><i class="fas fa-user"></i></a></li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>

  @yield('content')

  @show

  <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-about">
            <a href="/Servicios"><h1><span></span>Servicios</h1></a>
            <p>Contamos con atención ambulatoria. Nuestros servicios incluyen: Laboratorio clínico especializado, electrocardiogramas, electroencefalogramas, estudios por imágenes, audiometrías, oftalmologías, optometrías, otorrinolaringología, panorámicas dentales, medicina general y del trabajo, consultas por especialistas, odontología, ortodoncias, cirugías ambulatorias, y procedimientos médicos especializados, entre otros.
            </p>
          </div>
          <div class="col-md-4 l-posts">
            <h3 class="widgetheading">Nosotros</h3>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Servicios</a></li>
              <li><a href="#">Contacto</a></li>
              <li><a href="#">Iniciar Sesion </a></li>
            </ul>
          </div>
          <div class="col-md-4 f-contact">
            <h3 class="widgetheading">Contacto</h3>
            <a href="mailto:examenesingreso.19@gmail.com">
              <p><i class="fa fa-envelope"></i> examenesingreso.19@gmail.com</p>
            </a>
            <p><i class="fa fa-phone"></i> +57 305 237 3430</p>
            <p><i class="fa fa-home"></i> Estamos ubicados en la Cr 22 #18-06 Barrio Ford en Sincelejo, Sucre. <br> </p>
          </div>
        </div>
      </div>
    </div>


    <div class="last-div">
      <div class="container">
        <div class="row">
          <div class="copyright">
            &copy; SASM. All Rights Reserved
            
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
          </ul>
        </div>
      </div>

      <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>


    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>

</body>

</html>
