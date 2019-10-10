<?php
    require('funcCad.class.php');

    $funcG  = new Func();

    if (isset($_POST['btnLog'])) {
        $funcG -> login($_POST['matLog'], $_POST['senLog']);
    }

    if (isset($_COOKIE['ALogado'])) {
        ?>
            <script type="text/javascript">
                window.location.href = "AlunoLogado.php";
            </script>
        <?php
    }elseif(isset($_COOKIE['PLogado'])){
        ?>
            <script type="text/javascript">
                window.location.href = "ProfLogado.php";
            </script>
        <?php
    }

    if (isset($_POST['btn_cad'])) {
        $funcG -> cadAlu($_GET['mat'], $_POST['sen'], $_POST['tel1'], $_POST['tel2'], $_POST['ema'], $_POST['wha']);
    }

    setcookie('op');
    setcookie('mat');
    setcookie('adm');

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

    <script type="text/javascript">
        function lul(){
            window.location.href = 'index.php';
        }

        function maskP(a){
            if (a.value.length == 0) {
                a.value = "(" + a.value;
            }
            if (a.value.length == 3) {
                a.value = a.value + ") ";
            }
            if (a.value.length == 10) {
                a.value = a.value + "-";
            }
        }
    </script>
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php" style=" text-shadow: black 0.1em 0.1em 0.2em;"></span>Salaberga</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span style=" text-shadow: black 0.1em 0.1em 0.2em;">Home</span></a></li>
	          <li class="nav-item"><a href="#emp-section" class="nav-link"><span style=" text-shadow: black 0.1em 0.1em 0.2em;">Empréstimo/Devolução</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span style=" text-shadow: black 0.1em 0.1em 0.2em;">Login</span></a></li>
              <li class="nav-item"><a href="#con-section" class="nav-link"><span style=" text-shadow: black 0.1em 0.1em 0.2em;">Cadastro Aluno</span></a></li>
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
		            <h1 class="mb-4">Biblioteca Salaberga</h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section" id="emp-section">
    	<div class="container-fluid px-0">
    		<div class="row d-md-flex text-wrapper">
					<div class="one-half img" style="background-image: url('images/qr.jpg');"></div>
					<div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
						<div class="text-inner pl-md-5">
              <h3 class="heading">Bem vindo a <span>Biblioteca</span> Salaberga</h3>
              <p>Feito para facilitar a sua vida.</p>
              <p>Para realizar um empréstimo, basta seguir os passos abaixo.</p>
              <ul class="my-4">
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Use a câmera do seu celular para ler o QR do livro desejado</li>
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Informe a ação desejada</li>
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Informe a matrícula do aluno</li>
                <li><span class="ion-ios-checkmark-circle mr-2"></span> Informar senha de Admin</li>
                <li><span class="ion-ios-checkmark-circle mr-2"></span> Confirmar o empréstimo ou a devolução</li>

              </ul>
            </div>
					</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-1 pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <span class="subheading">Login</span>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex">
            <form action="" method="POST" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="number" class="form-control" placeholder="Matrícula" name='matLog'>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha" name='senLog'>
              </div>
              <div class="form-group">
                <center>
                <input type="submit" value="Login" class="btn btn-primary py-3 px-5" name='btnLog'>
                </center>
              </div>
            </form>
          
          </div>

        </div>
      </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="con-section">
      <div class="container">
        <div class="row justify-content-center mb-1 pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <span class="subheading">Cadastro Aluno</span>
          </div>
        </div>

        <?php
            if (!isset($_GET['mat'])) {
                ?>
                    <div class="row block-9">
                      <div class="col-md-12 order-md-last d-flex">
                        <form action="#con-section" method="GET" class="bg-light p-4 p-md-5 contact-form">
                          <div class="form-group">
                            <input type="number" class="form-control" placeholder="Matrícula" name='mat'>
                          </div>
                          <div class="form-group">
                            <center>
                            <input type="submit" value="Validar" class="btn btn-primary py-3 px-5" name='btnLog'>
                            </center>
                          </div>
                        </form>
                      
                      </div>

                    </div>
                <?php
            }else{
                $funcG -> val($_GET['mat']);
            }
        ?>
            
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