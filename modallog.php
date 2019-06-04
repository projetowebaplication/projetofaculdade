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
    <link href="css/modal.css" rel="stylesheet">
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
                        <li class="active"><a href="modallog.php">Modalidades</a></li>
                        <li><a href="contactlog.php">Contato</a></li>                        
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
		
	<section id="portfolio" >
        <div class="container  wow fadeInDown">
            <div class="center">
               <h2>Modalidades</h2>
               <h1 class="lead">Conheça nossas modalidades</h1>

            </div>
        

           
            <div class="row ">
                <div class="portfolio-items ">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/yoga.jpg" alt="yoga">
                            </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/full/yoga.jpg" rel="prettyPhoto">Yoga</a></h3>
                                    
                                    <a class="preview" href="images/portfolio/full/yoga.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3"><br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/ABS.jpg" alt="abs">
                        </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/ABS.jpg" rel="prettyPhoto">Abdominal</a></h3>
                                    
                                    <a class="preview" href="images/portfolio/full/ABS.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3"><br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/along.jpg" alt="along">
                        </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/along.jpg" rel="prettyPhoto">Alongamento</a></h3>
                                
                                    <a class="preview" href="images/portfolio/full/along.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3"><br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/bike.jpg" alt="bike">
                        </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/bike.jpg" rel="prettyPhoto">Bike</a></h3>
                                    
                                    <a class="preview" href="images/portfolio/full/bike.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
          
                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3"><br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/boxe.jpg" alt="boxe">
                        </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/boxe.jpg" rel="prettyPhoto">Boxe</a></h3>
                                    
                                    <a class="preview" href="images/portfolio/full/boxe.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3"><br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/dancas.jpg" alt="danças">
                        </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/dancas.jpg" rel="prettyPhoto">Danças</a></h3>
                                    
                                    <a class="preview" href="images/portfolio/full/dancas.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3"><br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/func.jpg" alt="funcional">
                        </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/func.jpg" rel="prettyPhoto">TRAINNING</a></h3>
                                    
                                    <a class="preview" href="images/portfolio/full/func.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3"><br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/gluteos.jpg" alt="gluteos">
                        </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/gluteos.jpg" rel="prettyPhoto">Glúteos</a></h3>
                                  
                                    <a class="preview" href="images/portfolio/full/gluteos.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                      <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3"><br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/jiu.jpg" alt="jiu-jitsu">
                        </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/jiu.jpg" rel="prettyPhoto">Jiu-jitsu</a></h3>
                                    
                                    <a class="preview" href="images/portfolio/full/jiu.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                      <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3"><br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/jump.jpg" alt="jump">
                        </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/jump.jpg" rel="prettyPhoto">Jump</a></h3>
                                   
                                    <a class="preview" href="images/portfolio/full/jump.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                      <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3"><br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/local.jpg" alt="localizada">
                        </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/local.jpg" rel="prettyPhoto">Localizada</a></h3>
                                   
                                    <a class="preview" href="images/portfolio/full/local.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                      <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3"><br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/muay.jpg" alt="muay-tay">
                        </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/muay.jpg" rel="prettyPhoto">Muay-thai</a></h3>
                                   
                                    <a class="preview" href="images/portfolio/full/muay.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                      <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3"><br>
                        <div class="recent-work-wrap">
                            <figure>
                            <img class="img-responsive" src="images/portfolio/step.jpg" alt="step">
                        </figure>
                            <div class="overlay2">
                                <div class="recent-work-inner">
                                    <h3><a href="images/portfolio/step.jpg" rel="prettyPhoto">Step</a></h3>
                                   
                                    <a class="preview" href="images/portfolio/full/step.jpg" rel="prettyPhoto" ><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                  


                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
	
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
                        <li><a href="contato.html">Contato</a></li>
                        <li><a href="#">Parceiros</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    
   
  </body>
</html>


