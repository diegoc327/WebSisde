<?php
session_start();

$host_db = "localhost";
 $user_db = "root";
 $pass_db = "usbw";
 $db_name = "sisde";
 $tbl_name = "tbl_usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['user'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM $tbl_name WHERE id_usuario = '$username' and contra_usuario ='$password'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {     
 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    //$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
    
    header("Location: encuestas.php");
    

 } else { 
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='../web/index.php'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>