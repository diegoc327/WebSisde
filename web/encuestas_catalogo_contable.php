<?php
session_start();
if (!$_SESSION){
    session_unset();
    session_destroy();    
    $session=null;
    $name="Diego";
}
else{
    $session=true;
    $name =  $_SESSION['username'];    
}
$_SESSION['datos_6']=$_POST;



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
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/main.css" rel="stylesheet"/>
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
							<img src="images/sisde.png" with=75 height=75>
							<img src="images/itsnew.png" with=100 height=50>
							<img src="images/tec.png" with=100 height=70>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li ><a href="index.php">Home</a></li>
								<li class="active"><a href="encuestas.php" class="hvr-bounce-to-bottom">Encuestas</a></li>
								<li><a href="acerca.html" class="hvr-bounce-to-bottom">Acerca de..</a></li>
								<?php
								echo "<li><a href='acerca.php' class='hvr-bounce-to-bottom'>".$name."</a></li>";
								?>
							</ul>
						</nav>
				
						
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- mail -->
	<div class="contact">
		<div class="container">
			<h3><span>Módulo Siete: Contable</span></h3>
			<div class="contact-grids">
				<div class="contact-grid">
					<div class="col-md-6 contact-grid-left">
						<form action="encuestas_catalogo_impuestos.php" id="Myform" method="post">
						<div class="col-xs-6">
							<p class="autem">1.	¿Registra los ingresos de ventas?</p>
							<div class="section_room">
								<select id="country" name ="pre_1" onchange="change_country(this.value)" class="frm-field required">
									<option value="11.11">Si</option>
									<option value="0">No</option>
								</select>
							</div>
							<p class="autem">2.	¿Que formas de pago recibe la empresa?</p><br>
							<div class="section_room">
								<select id="country" name ="pre_2" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Efectivo</option>
									<option value="null">Débito o Crédito</option>
									<option value="null">Cheque</option>
									<option value="null">Transferencia Bancaria</option>
								</select>
							</div>
							<p class="autem">4.	¿Cuenta con una persona encargada de la contabilidad de la empresa?</p>
							<div class="section_room">
								<select id="country" name ="pre_3" onchange="change_country(this.value)" class="frm-field required">
									<option value="11.11">Si</option>
									<option value="0">No</option>
								</select>
							</div>
							<p class="autem">5.	¿Conoce el punto de equilibrio?</p><br>
							<div class="section_room">
								<select id="country" name ="pre_5" onchange="change_country(this.value)" class="frm-field required">
									<option value="11.11">Si</option>
									<option value="0">No</option>
								</select>
							</div>
							<p class="autem">7. ¿Se ejerce control de los inventarios?</p>
							<div class="section_room">
								<select id="country" name ="pre_7" onchange="change_country(this.value)" class="frm-field required">
									<option value="11.11">Si</option>
									<option value="0">No</option>
								</select>
							</div>
							
							</div>
							<div class="col-xs-6">
							<p class="autem">1.1 ¿De qué forma es realizado el registro?</p>
							<div class="section_room">
								<select id="country" name ="pre_1.1" onchange="change_country(this.value)" class="frm-field required">
									<option value="11.11">Físico (libreta, libro diario, etc.)</option>
									<option value="0">Electrónico (software, excel, etc.)</option>
								</select>
							</div>
							<p class="autem">3.	¿Realiza prorrateo de costos de materia prima?</p>
							<div class="section_room">
								<select id="country" name ="pre_3" onchange="change_country(this.value)" class="frm-field required">
									<option value="11.11">Si</option>
									<option value="0">No</option>
								</select>
							</div>

							<p class="autem">4.1 Si la respuesta anterior fue SÍ, ¿Es interna o externa?</p>
							<div class="section_room">
								<select id="country" name ="pre_1.1" onchange="change_country(this.value)" class="frm-field required">
									<option value="11.11">Interna</option>
									<option value="0">Externa</option>
								</select>
							</div>
							<p class="autem">6.	¿Conoce el costo marginal de fabricación del producto o servicio que ofrece?</p>
							<div class="section_room">
								<select id="country" name ="pre_6" onchange="change_country(this.value)" class="frm-field required">
									<option value="11.11">Si</option>
									<option value="0">No</option>
								</select>
							</div>

							
							
							<p class="autem">8.	¿Conoce el margen de utilidad?</p>
							<div class="section_room">
								<select id="country" name ="pre_8" onchange="change_country(this.value)" class="frm-field required">
									<option value="11.11">Si</option>
									<option value="0">No</option>
								</select>
							</div>
							</div>

						</form>
					</div>
					
					<div class="clearfix"> </div>
						<input type="submit" value="Siguiente Modulo" form="Myform">
					
				</div>
			</div>
		</div>
	</div>
<!-- //mail -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-copy">
				<p>© 2016. All rights reserved | Design by </p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</body>
</html>