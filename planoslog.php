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
                        <li><a href="indexlog.php">Home</a></li>
                        <li class="active"><a href="planoslog.php">Planos</a></li>
                        <li><a href="serviceslog.php">Serviços</a></li>
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
		
		<section id="planos">
	       <div class="container-fluid">
	       	<div class="center wow fadeInDown">
			  <div class="text-center">
			    <h2>Planos</h2>
			    <h4>Escolha seu plano e matricule-se</h4>
			  </div><br><br>
			  <div class="row">
			    <div class="col-sm-4">
			      <div class="panel panel-default text-center">
			        <div class="panel-heading">
			          <h1>Basico</h1>
			        </div>
			        <div class="panel-body">
			          <p>Musculação</p>
			          <p>Zumba</p>
                                  <p>Jump</p>
			        </div>
			        <div class="panel-footer">
			          <h3>$19</h3>
			          <h4>per month</h4>
			          <a href="matric.php"><button class="btn btn-lg"> Matricule-se</button></a>
			        </div>
			      </div> 
			    </div> 
			    <div class="col-sm-4">
			      <div class="panel panel-default text-center">
			        <div class="panel-heading">
			          <h1>Pro</h1>
			        </div>
			        <div class="panel-body">
		                    <p>Musculação</p>
			            <p>Zumba</p>
                                    <p>Jump</p>
			            <p>Luta</p>
                                    <p>Avaliação</p>
			        </div>
			        <div class="panel-footer">
			          <h3>$29</h3>
			          <h4>per month</h4>
			          <a href="matric.php"><button class="btn btn-lg"> Matricule-se</button></a>
			        </div>
			      </div> 
			    </div> 
			   <div class="col-sm-4">
			      <div class="panel panel-default text-center">
			        <div class="panel-heading">
			          <h1>Premium</h1>
			        </div>
			        <div class="panel-body">
		                    <p>Musculação</p>
			            <p>Zumba</p>
                                    <p>Jump</p>
			            <p>Luta</p>
                                    <p>Avaliação</p>
                                    <p>Nutricionista</p>
			            <p>Personal Trainer</p>
			        </div>
			        <div class="panel-footer">
			          <h3>$39</h3>
			          <h4>per month</h4>
			          <a href="matric.php"><button class="btn btn-lg"> Matricule-se</button></a>
			        </div>
			      </div> 
			    </div> 
			  </div>
			</div>
		</div>
	    </section><!--/about-us-->
		
	
	
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
