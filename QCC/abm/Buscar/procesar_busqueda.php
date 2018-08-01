<!--
Fuente: http://codigofuente-de.blogspot.com/
Unete a https://www.facebook.com/pages/Código-Fuente-de-Diseño-y-Programaciòn/876534622374945

y sigue visistane nuestra web:
http://codigofuente-de.blogspot.com/
-->

<!DOCTYPE html>
<html lang="es">
<head>
  <title></title>
	<meta charset="utf-8">
</head>
<body>
<?php

$variable=trim($_REQUEST['nombre']);

if(empty($variable)){

   echo "Debe especificar un valor";

}else{
	 include("./Datos/conexion.php");
     $con=conectar();

     /*La busqueda se ha realizado por nombre*/

     //la siguiente consulta permite buscar datos que inicien con la palabra ingresada
     //$query="select id, nombre, descripcion from ejemplo where nombre like '$variable%'";
     //la siguiente consulta permite buscar datos que incluyan la palabra ingresada
     $query="select nombre, apellido, fecha_nac from abm where nombre like '%$variable%'";

     $res=mysql_query($query,$con);
     $cantidad=mysql_num_rows($res);

     if($cantidad>0){

     	            echo "<table id='tabla'><tr><th>Organización</th><th>ROC</th><th>Norma de referencia</th><th>Estatus</th></tr>";

                    while($rowb=mysql_fetch_array($res)){
                    echo "<tr>";
                    echo "<td id='t1'>".$rowb["nombre"]."</td>";
                    echo "<td id='t2'>".$rowb["apellido"]."</td>";
                    echo "<td id='t3'>".$rowb["fecha_nac"]."</td>";
					echo "<td id='t3'>".$rowb["peso"]."</td>";
                    echo "</tr>";
                    }

                    echo "</table>";

     }else{
          echo "No se encontraron coincidencias";
     }

     mysql_close();
}

?>

</body>
</html>

<!--
Fuente: http://codigofuente-de.blogspot.com/
Fuente: http://codigofuente-de.blogspot.com/
Unete a https://www.facebook.com/pages/Código-Fuente-de-Diseño-y-Programaciòn/876534622374945

y sigue visistane nuestra web:
http://codigofuente-de.blogspot.com/
-->