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

require_once("dompdf/dompdf_config.inc.php");
}



$html ='<div class="contact">
  <div class="container">     
      <h3><span>Resultados</span></h3>
      <p class="autem">Tabla y Gráfica</p>
      ';


$navegador = new COM("InternetExplorer.Application");
$gestor = $navegador->HWND;
$navegador->Visible = true;
$im = imagegrabwindow($gestor);
$navegador->Quit();
imagepng($im, "iesnap.png");
imagedestroy($im);

require_once("dompdf/dompdf_config.inc.php");
//Creamos la instancia
$dompdf = new DOMPDF();

//Cargamos nuestro código HTML
$dompdf->load_html($html);

//Hacemos la conversion de HTML a PDF
$dompdf->render();

//$f;
//$l;
//if(headers_sent($f,$l))
//{
//    echo $f,'<br/>',$l,'<br/>';
//    die('now detect line');
//}
//El nombre con el que deseamos guardar el archivo generado
$dompdf->stream("nombre.pdf");




?>