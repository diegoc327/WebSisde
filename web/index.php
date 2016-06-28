<?php
session_start();
if (!$_SESSION){
    session_unset();
    session_destroy();    
    $session=null;
}
else{
    $session=true;
    $name =  $_SESSION['username'];    
}
?>
<!DOCTYPE html>
<html>
<head>
<title>SISDE</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Plottage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="icon" href="images/favicon(1).ico" type="image/x-icon">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

</head>
	
<body>
<!-- header -->
<div class="header">	
		
		<div class="header-bottom">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					
						<div class="logo">
							<img src="../web/images/sisde.png" with=75 height=75>
							<img src="../web/images/itsnew.png" with=100 height=50>
							<img src="../web/images/tec.png" with=100 height=70>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="encuestas.php" class="hvr-bounce-to-bottom">Encuestas</a></li>
								<li><a href="acerca.html" class="hvr-bounce-to-bottom">Acerca de...</a></li>
							</ul>
						</nav>
				
						
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-right">
				<h3><span>Iniciar Sesion</span></h3>
				<div class="reservation">
					<div class="keywords">


						<form action="checklogin.php" method="post">
							<span class="glyphicon glyphicon-list-alty" aria-hidden="true"></span>
							<input type="text" name="user" placeholder="Usuario" required=" ">
						
					
						
							<span class="glyphicon glyphicon-list-alts" aria-hidden="true"></span>
							<input type="password" name="password" placeholder="Contraseña" required=" ">
							<p align="center">¿Olvidaste tu <a href="">contrseña</a>?</p>
							<p align="center"><a href="registrar.html">Registrate</a></p>
							<input type="submit" value="Entrar">
						</form>
					


					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner -->

</body>
</html>