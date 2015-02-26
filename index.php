
<!DOCTYPE html>

<html lang="es">
   <head>

       <link rel="stylesheet" href="estilos.css"/>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!--[if lt IE 9]-->
       <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<title>Conectar a una BD MySQL</title>
   </head>
    <body>
<?php
  

$link = mysqli_connect('localhost','KS02','Kmadminks02','sian')
 or die('No se pudo conectar: ' . mysqli_error() );
//echo 'Prueba de Php';

//mysqli_select_db($link,'sian') or die('No se pudo seleccionar la base de datos' . mysqli_error());


// Realizar una consulta MySQL
$query = 'SELECT * FROM areas';
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error());

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
    mysql_free_result ($result);

    //cerrar la conexion
    mysql_close($link);
        ?>
        </table>

        
    
    
    </body>

</html>