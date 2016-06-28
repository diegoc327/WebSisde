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
$_SESSION['datos_8']=$_POST;

$_puntaje_direccion=0;
$_puntaje_humano=0;
$_puntaje_mercado=0;
$_puntaje_finanzas=0;
$_puntaje_economico=0;
$_puntaje_contable=0;
$_puntaje_impuestos=0;

foreach ($_SESSION['datos_2'] as $value) {
  $_puntaje_direccion=$_puntaje_direccion+$value;
}

foreach ($_SESSION['datos_3'] as $value) {
  $_puntaje_humano=$_puntaje_humano+$value;
}

foreach ($_SESSION['datos_4'] as $value) {
  $_puntaje_mercado=$_puntaje_mercado+$value;
}

foreach ($_SESSION['datos_5'] as $value) {
  $_puntaje_finanzas=$_puntaje_finanzas+$value;
}

foreach ($_SESSION['datos_6'] as $value) {
  $_puntaje_economico=$_puntaje_economico+$value;
}

foreach ($_SESSION['datos_7'] as $value) {
  $_puntaje_contable=$_puntaje_contable+$value;
}
foreach ($_SESSION['datos_8'] as $value) {
  $_puntaje_impuestos=$_puntaje_impuestos+$value;
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
                <li ><a href="../web/index.php">Home</a></li>
                <li class="active"><a href="encuestas.html" class="hvr-bounce-to-bottom">Encuestas</a></li>
                <li><a href="acerca.html" class="hvr-bounce-to-bottom">Acerca de..</a></li>
                <?php
                echo "<li><a href='acerca.html' class='hvr-bounce-to-bottom'>".$name.$_puntaje_direccion."</a></li>";
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
   var puntaje_direccion_s = '<?php echo $_puntaje_direccion; ?>';
   var puntaje_direccion_n = parseInt(puntaje_direccion_s);

   var puntaje_humano_s = '<?php echo $_puntaje_humano; ?>';
   var puntaje_humano_n = parseInt(puntaje_humano_s);

   var puntaje_mercado_s = '<?php echo $_puntaje_mercado; ?>';
   var puntaje_mercado_n = parseInt(puntaje_mercado_s);

   var puntaje_finanzas_s = '<?php echo $_puntaje_finanzas; ?>';
   var puntaje_finanzas_n = parseInt(puntaje_finanzas_s);

   var puntaje_economico_s = '<?php echo $_puntaje_economico; ?>';
   var puntaje_economico_n = parseInt(puntaje_economico_s);

   var puntaje_contable_s = '<?php echo $_puntaje_contable; ?>';
   var puntaje_contable_n = parseInt(puntaje_contable_s);

   var puntaje_impuestos_s = '<?php echo $_puntaje_impuestos; ?>';
   var puntaje_impuestos_n = parseInt(puntaje_impuestos_s);

   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(dibujarGrafico);
   function dibujarGrafico() {
     // Tabla de datos: valores y etiquetas de la gráfica
     var data = google.visualization.arrayToDataTable([
       ['Texto', 'Puntaje'],
       ['Modulo Direccion Corporativa', puntaje_direccion_n],
       ['Modulo de Capital Humano', puntaje_humano_n],
       ['Modulo de Mercadotecnia', puntaje_mercado_n],
       ['Modulo de Finanzas', puntaje_finanzas_n],
       ['Modulo Económico', puntaje_economico_n],
       ['Modulo Contable', puntaje_contable_n],
       ['Modulo de Impuestos', puntaje_impuestos_n]    
     ]);
     var options = {
       title: 'Resultados'
     }
     // Dibujar el gráfico
     new google.visualization.ColumnChart( 
     //ColumnChart sería el tipo de gráfico a dibujar
       document.getElementById('GraficoGoogleChart-ejemplo-1')
     ).draw(data, options);
   }
 </script> 
<body>

<div id="GraficoGoogleChart-ejemplo-1" style="width: 800px; height: 600px">
</div>
</body>
</html>