<?php
    
    setcookie('ALogado');
    setcookie('MLogado');
    setcookie('NLogado');

    if (isset($_GET['sair'])) {
        setcookie('PLogado');

        ?>
            <script type="text/javascript">
                window.location.href = 'index.php';
            </script>
        <?php
    }

    if (isset($_COOKIE['ALogado'])) {
         ?>
            <script type="text/javascript">
                window.location.href = 'index.php';
            </script>
        <?php
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Biblioteca Salaberga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php" style=" text-shadow: black 0.1em 0.1em 0.2em;">Salaberga</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span style=" text-shadow: black 0.1em 0.1em 0.2em;">Home</span></a></li>
	          <li class="nav-item"><a href="gerarqrcode.php" class="nav-link"><span style=" text-shadow: black 0.1em 0.1em 0.2em;">Gerar QRS</span></a></li>
            <li class="nav-item"><a href="#emps" class="nav-link"><span style=" text-shadow: black 0.1em 0.1em 0.2em;">Empréstimos</span></a></li>
	          <li class="nav-item"><a href="cadastro/" class="nav-link"><span style=" text-shadow: black 0.1em 0.1em 0.2em;">Cadastro Obras</span></a></li>
            <li class="nav-item"><a href="ProfLogado.php?sair=1" class="nav-link"><span style=" text-shadow: black 0.1em 0.1em 0.2em;">Sair</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	 
     <section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background-image:url(images/a.jpg); ">
        <div class="overlay"></div>
            <div class="container">
              <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
              <div class="col-md-8 text-center ftco-animate mt-5">
                <div class="text">
                    <h1 class="mb-4">Bem vindo <span>Professor</span></h1>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="emps">
        <div class="container">
        <div class="row justify-content-center mb-1 pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <span class="subheading">Empréstimo</span>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex">
            <form action="empdev.php" method="GET" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="number" class="form-control" placeholder="Id do livro" name='qr'>
              </div>
              <div class="form-group">
                <center>
                <input type="submit" value="Realizar Empréstimo" class="btn btn-primary py-3 px-5">
                </center>
              </div>
            </form>
          
          </div>

        </d iv>
      </div>
    </section> 
    
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><span>Biblioteca</span> Salaberga</h2>
              
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Horas disponiveis</h2>
              <div class="opening-hours">
                <p>Intervalos: <span class="mb-3">9:10 às 9:30 e 15:00 à 15:20</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
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