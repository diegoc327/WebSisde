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
<?php
	include 'header.php'

?>
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