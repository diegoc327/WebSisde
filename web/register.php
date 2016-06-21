<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "usbw";
 $db_name = "sisde";
 $tbl_name = "tbl_usuarios";
 
 $form_pass = $_POST["password"];
 $id = $_POST["user"];
 
 //$hash = password_hash($form_pass, PASSWORD_BCRYPT); 

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE id_usuario = '$_POST[user]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";

 echo "<a href='registrar.html'>Por favor escoga otro Nombre</a>";
 }
 else{

 $query = "INSERT INTO tbl_usuarios (id_usuario, nombre_usuario, apellido_usuario, correo_usuario, contra_usuario, tipo_usuario, estado_usuario)
           VALUES ('$_POST[user]','$_POST[name]' ,'$_POST[lastname]', '$_POST[email]',$_POST[password], 1,1)";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='index.html'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>