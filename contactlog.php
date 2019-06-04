<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ARENA</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" >

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
    <link href="css/main.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
 <?php 
        session_start();
        if((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true))
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
                echo "<script>
                    alert('Acesso permitido somente a usuário logado');
                    window.location.href='login.php';
                    </script>";
        }
        $logado=$_SESSION['email'];
    ?>
  </head>
  <body class="homepage">   
    <header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html"><img src="images/logo3.png"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="indexlog.php">Home</a></li>
                        <li><a href="planoslog.php">Planos</a></li>
                        <li><a href="serviceslog.php">Serviços</a></li>
                        <li><a href="modallog.php">Modalidades</a></li>
                        <li class="active"><a href="contactlog.php">Contato</a></li>                        
                    </ul>
                     <ul class="nav navbar-nav navbar-right">
                         <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                     </ul>
                    <ul class="nav navbar-nav">
                         <li><a href="mypage.php"><span class="nav navbar-navn"></span>Minha Conta</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
		

	
	<section id="content">
    <div class="container_12">
      <div class="grid_12">
        <div class="box-shadow">
          <div class="wrap block-2">
            <div class="col-3">
              <h2>Nos encontre</h2>
              
                    <div class="map">
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA6q-cRZe8Y6WSDaZeLBXldp1RBcSAbmR4' ></script><div style='overflow:hidden;height:265px;width:375px;'><div id='gmap_canvas' style='height:265px;width:375px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-generator.com/pt'>Maps-Generator</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=3910f0a8ff6bf05c08e8670e23847db618747270'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(-15.656189,-47.804723999999965),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-15.656189,-47.804723999999965)});infowindow = new google.maps.InfoWindow({content:'<strong>Faculdade Projeção</strong><br>Quadra 4, Área Reservada 1 Q 4<br>73025040 sobradinho df<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>


    </div>
              
              <dl>
                <dt class="color-1"><strong>Brasilia, DF<br>
                  Sobradinho.</strong></dt>
                <dd><span>Telefone:</span>00 0000-0000</dd>
                <dd><span>E-mail:</span><a href="#" class="link">mail@email.com</a></dd>
              </dl>
            </div>
            <div class="col-4">
              <h2>Contato</h2>
              <form id="form" method="post" action="#">
                <fieldset>
                  <label>
                    <input type="text" value="Nome" onBlur="if(this.value=='') this.value='Name'" onFocus="if(this.value =='Name' ) this.value=''">
                  </label>
                  <label>
                    <input type="text" value="Email" onBlur="if(this.value=='') this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''">
                  </label>
                  <label>
                    <textarea onBlur="if(this.value==''){this.value='Message'}" onFocus="if(this.value=='Message'){this.value=''}">Mensagem</textarea>
                  </label>
                  <div class="btns"><a href="#" class="button">Limpar</a><a href="#" class="button">Enviar</a></div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>

    <div id="bottom"></div>
        
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   <div class="social">
                        <ul class="social-share">
                            <li><a href="https://pt-br.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>      
                            <li><a href="https://www.skype.com/pt-br/new/" target="_blank"><i class="fa fa-skype"></i></a></li>
                            <li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                   </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->
    
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2019  by: Karina Neri dos Santos - SI - 201811998
                </div>
                
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="contact.html">Contato</a></li>
                        <li><a href="#">Parceiros</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

