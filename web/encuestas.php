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
							<img src="../web/images/sisde.png" with=75 height=75>
							<img src="../web/images/itsnew.png" with=100 height=50>
							<img src="../web/images/tec.png" with=100 height=70>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li ><a href="index.html">Home</a></li>
								<li class="active"><a href="encuestas.html" class="hvr-bounce-to-bottom">Encuestas</a></li>
								<li ><a href="encuestas.html" class="hvr-bounce-to-bottom">Administración</a></li>
								<li><a href="acerca.html" class="hvr-bounce-to-bottom">Acerca de..</a></li>
								<?php
								echo "<li><a href='acerca.html' class='hvr-bounce-to-bottom'>".$name."</a></li>";
								?>
							</ul>
						</nav>
				
						
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- gallery -->
	<div class="gallery">
	<h3 align="center"><span>Encuestas</span></h3>
			<p class="autem">Tu empresa es importante asi que cuida de ella</p>
		<div class="container1">
			
			<div class="gallery-grids carouselGallery-grid hidden-xs">
				<div class="col-md-4 gallery-grid">
					<div class="carouselGallery-col-1 carouselGallery-carousel" data-likes="3144" data-index="0" data-username=" " data-imagetext="At vero eos et accusamus et iusto odio 
						 dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
						 et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						 officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio." 
						data-location="Temporibus" data-imagepath="images/7.jpg" data-posturl="#" 
						style="background-image:url(images/empresas.png);" >
						<div class="carouselGallery-item">
							<div class="carouselGallery-item-meta">
								<span class="carouselGallery-item-meta-user">
									<a href="encuestas_catalogo_empresas.php">Empresas</a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="carouselGallery-col-1 carouselGallery-carousel" data-likes="3144" data-index="2" data-username=" " data-imagetext="At vero eos et accusamus et iusto odio 
						 dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
						 et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						 officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio." 
						data-location="Temporibus" data-imagepath="images/8.jpg" data-posturl="#" 
						style="background-image:url(images/dc.png);">
						<div class="carouselGallery-item">
							<div class="carouselGallery-item-meta">
								<span class="carouselGallery-item-meta-user">
									<a href="encuestas_catalogo_direccion.php">Direccion Corporativa</a>
								</span>
							</div>
						</div>
					</div>
				</div>			
				<div class="col-md-4 gallery-grid">
					<div class="carouselGallery-col-1 carouselGallery-carousel" data-likes="3144" data-index="2" data-username=" " data-imagetext="At vero eos et accusamus et iusto odio 
						 dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
						 et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						 officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio." 
						data-location="Temporibus" data-imagepath="images/8.jpg" data-posturl="#" 
						style="background-image:url(images/rh.png);">
						<div class="carouselGallery-item">
							<div class="carouselGallery-item-meta">
								<span class="carouselGallery-item-meta-user">
									<a href="encuestas_catalogo_rh.php">Recursos Humanos
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="carouselGallery-col-1 carouselGallery-carousel" data-likes="3144" data-index="3" data-username=" " data-imagetext="At vero eos et accusamus et iusto odio 
						 dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
						 et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						 officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio." 
						data-location="Temporibus" data-imagepath="images/6.jpg" data-posturl="#" 
						style="background-image:url(images/merca.png);">
						<div class="carouselGallery-item">
							<div class="carouselGallery-item-meta">
								<span class="carouselGallery-item-meta-user">
									<a href="encuestas_catalogo_mercadologica.php">Mercadologia
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="carouselGallery-col-1 carouselGallery-carousel" data-likes="3144" data-index="4" data-username=" " data-imagetext="At vero eos et accusamus et iusto odio 
						 dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
						 et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						 officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio." 
						data-location="Temporibus" data-imagepath="images/10.jpg" data-posturl="#" 
						style="background-image:url(images/finan.png);">
						<div class="carouselGallery-item">
							<div class="carouselGallery-item-meta">
								<span class="carouselGallery-item-meta-user">
									<a href="encuestas_catalogo_financiero.php">Financiero
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="carouselGallery-col-1 carouselGallery-carousel" data-likes="3144" data-index="5" data-username=" " data-imagetext="At vero eos et accusamus et iusto odio 
						 dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
						 et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						 officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio." 
						data-location="Temporibus" data-imagepath="images/12.jpg" data-posturl="#" 
						style="background-image:url(images/eco.png);">
						<div class="carouselGallery-item">
							<div class="carouselGallery-item-meta">
								<span class="carouselGallery-item-meta-user">
									<a href="encuestas_catalogo_economico.php">Economica
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="carouselGallery-col-1 carouselGallery-carousel" data-likes="3144" data-index="6" data-username=" " data-imagetext="At vero eos et accusamus et iusto odio 
						 dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
						 et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						 officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio." 
						data-location="Temporibus" data-imagepath="images/8.jpg" data-posturl="#" 
						style="background-image:url(images/cont.png);">
						<div class="carouselGallery-item">
							<div class="carouselGallery-item-meta">
								<span class="carouselGallery-item-meta-user">
									<a href="encuestas_catalogo_contable.php">Contable
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 gallery-grid">
					<div class="carouselGallery-col-1 carouselGallery-carousel" data-likes="3144" data-index="7" data-username=" " data-imagetext="At vero eos et accusamus et iusto odio 
						 dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
						 et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
						 officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio." 
						data-location="Temporibus" data-imagepath="images/7.jpg" data-posturl="#" 
						style="background-image:url(images/tri.png);">
						<div class="carouselGallery-item">
							<div class="carouselGallery-item-meta">
								<span class="carouselGallery-item-meta-user">
									<a href="encuestas_catalogo_impuestos.php">Tributacion o Impuestos
								</span>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
<!-- //gallery -->

</body>
</html>