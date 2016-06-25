<?php
session_start();
if (!$_SESSION){
    session_unset();
    session_destroy();    
    $session=null;
    $name="Nombre de Usuario";
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

<script type="text/javascript" src="https://www.google.com/jsapi"></script> 
<script>
   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(dibujarGrafico);
   function dibujarGrafico() {
     // Tabla de datos: valores y etiquetas de la gráfica
     var data = google.visualization.arrayToDataTable([
       ['Texto', 'Valor numérico'],
       ['Texto1', 20.21],
       ['Texto2', 4.28],
       ['Texto3', 17.26],
       ['Texto4', 10.25]    
     ]);
     var options = {
       title: 'Nuestro primer ejemplo con Google Charts'
     }
     // Dibujar el gráfico
     new google.visualization.ColumnChart( 
     //ColumnChart sería el tipo de gráfico a dibujar
       document.getElementById('GraficoGoogleChart-ejemplo-1')
     ).draw(data, options);
   }
 </script> 
<body>
Comenzando con Google Charts....
<div id="GraficoGoogleChart-ejemplo-1" style="width: 800px; height: 600px">
</div>
</body>
</html>