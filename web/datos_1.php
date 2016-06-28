<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "usbw";
 $db_name = "sisde";
 $tbl_name = "tbl_usuarios";
 
 $sector = $_POST["sector"];
 $giro = $_POST["giro"];
 $tamaño = $_POST["tamaño"];

 $datos_e=$_POST;

 echo $datos_e["sector"] ;
 //$hash = password_hash($form_pass, PASSWORD_BCRYPT); 

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}


 

 $query = "INSERT INTO tbl_empresa (Sector, Giro)
           VALUES ('$_POST[sector]','$_POST[giro]')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['user'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='../web/index.php'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 
 mysqli_close($conexion);
?>