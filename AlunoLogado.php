<?php
    require('funcCad.class.php');

    $funcG  = new Func();

    if (!isset($_COOKIE['ALogado'])) {
        ?>
            <script type="text/javascript">
                window.location.href = "index.php";
            </script>
        <?php
    }

    if (isset($_GET['sair'])) {
        setcookie("ALogado");
        ?>
            <script type="text/javascript">
                window.location.href = "index.php";
            </script>
        <?php

    }

    if (!isset($_GET['page'])) {
        ?>
            <script type="text/javascript">
                window.location.href = 'AlunoLogado.php?page=1';
            </script>
        <?php
    }

    if (isset($_POST['btnSenUpt'])) {
        $yip = "senha";

        $funcG -> edit($yip ,$_POST['senUpt'], $_COOKIE['MLogado']);
    }

    if (isset($_POST['btnTel1Upt'])) {
        $yip = "telefone1";

        $funcG -> edit($yip ,$_POST['Tel1Upt'], $_COOKIE['MLogado']);
    }

    if (isset($_POST['btnTel2Upt'])) {
        $yip = "telefone2";

        $funcG -> edit($yip ,$_POST['Tel2Upt'], $_COOKIE['MLogado']);
    }

    if (isset($_POST['btnEmaUpt'])) {
        $yip = "email";

        $funcG -> edit($yip ,$_POST['emaUpt'], $_COOKIE['MLogado']);
    }

    if (isset($_POST['btnWhaUpt'])) {
        $yip = "whats";

        $funcG -> edit($yip ,$_POST['whaUpt'], $_COOKIE['MLogado']);
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

    <script type="text/javascript"> 
        function maskP(ai){
            if (ai.value.length == 0) {
                ai.value = "(" + ai.value;
            }

            if (ai.value.length == 3) {
                ai.value = ai.value + ") ";
            }

            if (ai.value.length == 10) {
                ai.value = ai.value + "-";
            }
        }

        function att(a){
            if(a.value == "a"){
                form_1 = "<form action='' method='POST'>";
                text = "<label>Senha: <?php echo $_COOKIE['PSLogado']; ?></label>";
                box = "<input type='text' class='form-control' name='upt_sen'>";
                btn_back = "<button value='b' class='btn btn-outline-dark mt-3' onclick='att(this)'>Voltar</button>";
                btn_form = "<input type='submit' class='btn btn-outline-dark ml-2 mt-3' name='btn_uptSen' value='Alterar'>";
                form_2 = "</form>";

                document.getElementById('senha').innerHTML = form_1+text+box+btn_back+btn_form+form_2;
            }else{
                text = "<label>Senha: <?php echo $_COOKIE['PSLogado']; ?></label>";
                btn = "<button value='a' class='btn btn-outline-dark ml-3' onclick='att(this)'>Alterar</button>";

                document.getElementById('senha').innerHTML = text+btn;
            }
        }

        function att(a){
            if(a.value == "a"){
                form_1 = "<form action='' method='POST'>";
                text = "<label>Senha: <?php echo $_COOKIE['PSLogado']; ?></label>";
                box = "<input type='text' class='form-control' name='upt_sen'>";
                btn_back = "<button value='b' class='btn btn-outline-dark mt-3' onclick='att(this)'>Voltar</button>";
                btn_form = "<input type='submit' class='btn btn-outline-dark ml-2 mt-3' name='btn_uptSen' value='Alterar'>";
                form_2 = "</form>";

                document.getElementById('senha').innerHTML = form_1+text+box+btn_back+btn_form+form_2;
            }else{
                text = "<label>Senha: <?php echo $_COOKIE['PSLogado']; ?></label>";
                btn = "<button value='a' class='btn btn-outline-dark ml-3' onclick='att(this)'>Alterar</button>";

                document.getElementById('senha').innerHTML = text+btn;
            }
        }

    </script>

    <script>
        jQuery.fn.filterByText = function(textbox, selectSingleMatch) {
        return this.each(function() {
            var select = this;
            var options = [];
            $(select).find('option').each(function() {
                options.push({value: $(this).val(), text: $(this).text()});
            });
            $(select).data('options', options);
            $(textbox).bind('change keyup', function() {
                var options = $(select).empty().data('options');
                var search = $(this).val().trim();
                var regex = new RegExp(search,"gi");
              
                $.each(options, function(i) {
                    var option = options[i];
                    if(option.text.match(regex) !== null) {
                        $(select).append(
                           $('<option>').text(option.text).val(option.value)
                        );
                    }
                });
                if (selectSingleMatch === true && $(select).children().length === 1) {
                    $(select).children().get(0).selected = true;
                }
            });            
        });
    };

    $(function() {
        $('#select1').filterByText($('#textbox1'), false);
        $("select option").click(function(){
            alert(1);
        });
    });

    $(function() {
        $('#select2').filterByText($('#textbox2'), false);
        $("select option").click(function(){
            alert(1);
        });
    });

    $(function() {
        $('#select3').filterByText($('#textbox3'), false);
        $("select option").click(function(){
            alert(1);
        });
    });

    $(function() {
        $('#select4').filterByText($('#textbox4'), false);
        $("select option").click(function(){
            alert(1);
        });
    });

    $(function() {
        $('#select5').filterByText($('#textbox5'), false);
        $("select option").click(function(){
            alert(1);
        });
    });

    $(function() {
        $('#select6').filterByText($('#textbox6'), false);
        $("select option").click(function(){
            alert(1);
        });
    });

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
	          <li class="nav-item"><a href="#about-section" class="nav-link" data-toggle="modal" data-target=".bd-example-modal-lg"><span style=" text-shadow: black 0.1em 0.1em 0.2em;">Perfil</span></a></li>
	          <li class="nav-item"><a href="#sermons-section" class="nav-link"><span style=" text-shadow: black 0.1em 0.1em 0.2em;">Livros</span></a></li>
              <li class="nav-item"><a href="AlunoLogado.php?sair=1" class="nav-link" style=" text-shadow: black 0.1em 0.1em 0.2em;"><span>Sair</span></a></li>
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
		            <h1 class="mb-4">Bem vindo <span><?php echo $_COOKIE['NLogado']; ?></span></h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
    </section>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <h3 style="margin: 0 auto;">Perfil</h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="cow ml-3 mr-3 w-100" id="nome_usu">
                            <h5>
                                Matrícula: <?php echo $_COOKIE['MLogado'];?>
                                <br>
                                Nome: <?php echo $_COOKIE['NLogado'];?>
                                <br>
                                Status: <?php echo $_COOKIE['STLogado'];?> 
                            
                                <hr>
                                
                                <div id='senha' class='ml-3 mr-3'>
                                    <label>Senha: <?php echo $_COOKIE['PSLogado']; ?></label>
                                    <button value='a' class="btn btn-outline-dark ml-3" onclick="att(this)">Alterar</button>
                                </div>

                                <hr>

                                <div id='senha' class='ml-3 mr-3'>
                                    <label>Telefone: <?php echo $_COOKIE['T1Logado']; ?></label>
                                    <button value='a' class="btn btn-outline-dark ml-3" onclick="att2(this)">Alterar</button>
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

		<section class="ftco-section bg-light" id="sermons-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Livros</span>
            <span>
                <form action="AlunoLogado.php" method="GET" class="form-inline mt-3">
                        <input type="text" class="form-control" name="text_pesq" style="width: 60%;">
                        <input type="hidden" name="page" value="1">
                        <input type="submit" class="btn btn-primary ml-3 py-3" value="Pesquisa" style="width: 35%;">
                 
                </form>
                <form action="AlunoLogado.php" method="GET" class="form-inline mt-3">
                   
                        <select name="gen_pesq" class="form-control" style="width: 60%;">
                            <option></option>
                            <?php
                                $funcG -> gens();
                            ?>
                        </selec t>
                        <input type="submit" class="btn btn-primary py-3 ml-3" style="width: 35%;" value="Por Gênero">
                        <input type="hidden" name="page" value="1">
                    
                </form>
                <form action="AlunoLogado.php" method="GET" class="form-inline mt-3">
                   
                        <select name="aut_pesq" class="form-control" style="width: 60%;">
                            <option></option>
                            <?php
                                $funcG -> auts();
                            ?>
                        </select>
                        <input type="submit" class="btn btn-primary py-3 ml-3" style="width: 35%;" value="Por Autor">  
                        <input type="hidden" name="page" value="1">
                    
                </form>
            </span>  
          </div>
        </div>
        <?php
            if(isset($_GET['text_pesq']) && $_GET['text_pesq'] == ""){
                echo "
                    <script>
                        window.location.href = 'AlunoLogado.php';
                    </script>
                ";
            }elseif(isset($_GET['text_pesq'])){
                $funcG -> pagina(24, "pesquisa", $_GET['text_pesq']);
            }elseif(isset($_GET['gen_pesq'])){
                $funcG -> pagina(24, "genero", $_GET['gen_pesq']);
            }elseif(isset($_GET['aut_pesq'])){
                $funcG -> pagina(24, "autor", $_GET['aut_pesq']);
            }else{
                $funcG -> pagina(24, "", "");    

            }
        ?>
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