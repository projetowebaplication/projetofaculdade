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
                        <li><a href="indexlog.pgp">Home</a></li>
                        <li><a href="planoslog.php">Planos</a></li>
                        <li class="active"><a href="serviceslog.php">Serviços</a></li>
                        <li><a href="modallog.php">Modalidades</a></li>
                        <li><a href="contactlog.php">Contato</a></li>                        
                    </ul>
                     <ul class="nav navbar-nav navbar-right">
                         <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                     </ul>
                     <ul class="nav navbar-nav">
                         <li><a href="mypage.php"><span class="nav navbar-navn"></span>Minha Conta</a></li>
                     </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
	
	<section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
               
                <h2>Nossos serviços</h2>
                <p class="lead">Passe o mouse pelas imagens</p>
            </div>

            <div class="row">

                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="media wow fadeInDown">
                        <div class="pull-left">
                            
                            <figure class="service">
                            <img class="img-responsive" src="images/service/nutri.jpg">
                               <figcaption>
                                <h3 class="media-heading">NUTRICIONISTA </h3>
                                <p>Para perder ou ganhar peso com saúde é necessário contar com o auxílio de um profissional especializado, afinal, fazer dietas sem nenhuma orientação nutricional pode acabar causando alterações hormonais e metabólicas, além de falta de nutrientes no organismo.</p>
                                </figcaption>
                            </figure>

                        </div>
                    </div>
                </div>  


                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="media wow fadeInDown">
                        <div class="pull-left">
                            <figure class="service">
                            <img class="img-responsive" src="images/service/personal.jpg">
                                <figcaption>
                                <h3 class="media-heading">PERSONAL TRAINER </h3>
                                <p>Temos um time de educadores físicos excepcional. </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>


               <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="media wow fadeInDown">
                        <div class="pull-left">
                            <figure class="service">
                            <img class="img-responsive" src="images/service/suple.jpg">
                                <figcaption>
                                <h3 class="media-heading">SUPLEMENTOS</h3>
                                <p>Venda de suplementos para todo tipo de nescessidade. </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>

                 <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="media wow fadeInDown">
                        <div class="pull-left">
                            <figure class="service">
                            <img class="img-responsive" src="images/service/entrega.jpg">
                                <figcaption>
                                <h3 class="media-heading">SERVIÇO DE ENTREGA </h3>
                                <p>Nossos produtos e serviços são entregues pessoalmente. </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>                                     
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->


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
    
  
   
  </body>
</html>
