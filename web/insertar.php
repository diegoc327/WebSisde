<?php
session_start();


echo $_POST['sector'];
header ("Location: encuestas_catalogo_direccion.php");
 ?>