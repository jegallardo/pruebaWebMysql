
<!DOCTYPE html>

<html lang="es">
   <head>
       <link rel="stylesheet" href="estilos.css"/>
<title>Conectar a una BD MySQL</title>
   </head>
    <body>
<?php
  

$link =mysqli_connect('localhost','KS02','Kmadminks02')
 or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysqli_select_db('sian') or die('No se pudo seleccionar la base de datos');


// Realizar una consulta MySQL
$query = 'SELECT * FROM areas';
$result = mysqli_query($query) or die('Consulta fallida: ' . mysqli_error());

//Imprimir los resultados en HTML

?>
        
 <table border="1">
     <?php 
while ($line=mysqli_fetch_array($result)){  ?>
      
       <tr>
       <td><?php echo $line["ID_CLIENTE"];?></td>
       <td><?php echo $line["ID_AREA"];?></td>
       <td><?php echo $line["NOMBRE_AREA"];?></td>
       <td><?php echo $line["JERARQUIA_AREA"];?></td>
       </tr>
      <?php
}
 //liberar resultados
    mysqli_free_result ($result);

    //cerrar la conexion
    mysqli_close($link);
        ?>
        </table>

        
    
    </body>

</html>