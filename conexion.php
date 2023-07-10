
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";
$dbport = "3307";



$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport );
if (!$conn)
{
    die("no existe conexion: ".mysqli_connect_error());
}

$usuario = $_POST["txtusuario"];
$password = $_POST["txtpassword"];

$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '".$usuario."' and password = '".$password."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
    echo '<script>alert("Inicio de sesión correcto"); window.location.href = "sesion.html";</script>';
}

else if($nr ==0)
{
    echo '<script>alert("Datos Incorrectos, intente nuevamente"); window.location.href = "login.html";</script>';
}
 ?>