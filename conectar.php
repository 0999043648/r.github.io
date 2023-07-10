<?php
// Configuracion para acceder ala base de datos
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passwordb = "";
    $dbname = "dato";
    $dbport = "3307";
    //Conexion con la BD
    $conectar = mysqli_connect( $hostname,$usuariodb,$passwordb, $dbname,$dbport);
    return$conectar;

}
?>