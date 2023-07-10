<?php
include_once('conectar.php');
//Recibir datos del formulario
$usuario=$_POST['usuario'];
$nombre=$_POST['name'];
$apellido=$_POST['apellido'];
$genero=$_POST['genero'];
$password=$_POST['password'];
$cedula=$_POST['cedula'];

$conectar=conn();

$validar="SELECT * FROM clientes WHERE  cedula='$cedula'|| usuario='$usuario'";
$r = mysqli_query($conectar,$validar);
if(mysqli_num_rows($r)<=0){
 //Consulta SQL
 $conectar=conn();

$sql="INSERT INTO clientes(usuario,nombre,apellido,genero,password,cedula)
values('$usuario','$nombre','$apellido','$genero','$password','$cedula')";
$result=mysqli_query($conectar,$sql)or trigger_error("Error en el query".mysqli_error($conectar),E_USER_ERROR);

if($result){
    echo '<script language="javascript">';
    echo 'alert("Registro correcto!.");';
    echo 'window.location="datos.php";';
    echo '</script>';
  
     }
  }else{
    echo '<script language="javascript">';
            echo 'alert("Cedula y Usuario ya estan registrados");';
            echo 'window.location="datos.php";';
            echo '</script>';
  }
  

?>