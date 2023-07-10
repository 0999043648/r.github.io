<?php
$conexion = mysqli_connect('localhost','root','','dato',"3307");

?>
<!DOCTYPE html>
<html lang="es">
<head>

    <title>MOSTRAR DATOS</title>
</head>
<center>
    <body>
    <h3>MOSTRAR DATOS</h3>
    <body background="bifu.jpg">
    
        <br>
        <table border="1"> 
            <tr>
                
                <td>USUARIO</td>
                <td>NOMBRE</td>
                <td>APELLIDO</td>
                <td>GENERO</td>
                <td>CEDULA</td>
                <td>PASSWORD</td>
    
            </tr>
    <?php
    $sql="SELECT * from clientes";
    $result= mysqli_query($conexion,$sql);
    
    while($mostrar=mysqli_fetch_array($result)){
    ?>
         <tr>
            
            <td><?php echo $mostrar['usuario'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['apellido'] ?></td>
            <td><?php echo $mostrar['genero'] ?></td>
            <td><?php echo $mostrar['cedula'] ?></td>
            <td><?php echo $mostrar['password'] ?></td>
         </tr>
       <?php
       }
       ?>
        </table>
     
    </body>
    </center>
</html>