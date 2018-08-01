<!doctype html>
<html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de Quejas</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head> 
  
<body>
   
              
    <div id="formulario">
    <h2>Solicitud para validar certificados</h2>
    <p>Ingrese el nombre de la empresa a consultar:</p>
    <center><form name="form1" method="post" action="buscador.php" id="cdr">
  <h3 align="center">&nbsp;</h3>
      <p>
     <input name="busca"  type="text" id="busqueda" rows="30" cols="40">
        <input type="submit" name="Submit" value="buscar"/>
        </p>
      </p>
</form></center>
 <p>
  <style type="text/css">
input{ wborder:0px;}
#busqueda{background:#FFFFFF;color:#000; text-align:center;}
</style>
   
  <?php

if (isset($_POST['busca'])) {
$busca = $_POST['busca'];
} else {
$busca = "";
}

mysql_connect("localhost","qcccommx_myapp","123my123");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysql_select_db("qcccommx_myapp");//nombre de la base de datos
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM clientes WHERE nombre LIKE '%".$busca."%' LIMIT 1" );//cambiar nombre de la tabla de busqueda
?>
<center>
<table width="600px" border="1" id="tab">
   <tr>
     <th>Organización                           </th>
     <th>ROC                </th>
     <th>Norma de referencia</th>
     <th>Estatus            </th>
   </tr>
 
<?php

while($f=mysql_fetch_array($busqueda)){
echo '<tr>';
echo '<td>'.$f['nombre'].'</td>';
echo '<td>'.$f['apellido'].'</td>';
echo '<td>'.$f['fecha_nac'].'</td>';
echo '<td>'.$f['peso'].'</td>';

//onclick="return confirm('¿Realmente deseas eliminar este articulo?')";
//cambiar los nombres de los campos de busqueda
}

}
?>
</table></center>
     <h4>En caso de que no aparezca  alguna información sobre los clientes certificados, suspendidas o cancelados;les solicitamos llenar el siguiente formulario, con la información que a continuación se le solicita:</h4>
      <form class="form-inline" role="form" action="php/contacto.php" method="POST" id="contacto" title="Nombre">
		
        
        <br>
        <label for="nombre">Nombre Completo</label><br>
        <input class="form-control name=" name="nombre" type="text" required id="nombre" placeholder="Nombre / Organización" tabindex="1" title="Nombre">
        <br>
		
        <label for="email">Email</label><br>
        <input class="form-control name=" name="email" type="email" required id="email" placeholder="email" tabindex="2" title="Email">
        <br>
        <label for="telefono">Teléfono</label><br>
        <input class="form-control name=" name="telefono" type="text" id="telefono" placeholder="telefono" tabindex="3" title="Telefono">
        <br>
        <label for="ciudad">Asunto</label><br>
        <input class="form-control name=" name="ciudad" type="text" id="ciudad" placeholder="Asunto" tabindex="4" title="Ciudad">
        <br>
        <label for="Mensaje">Descripción </label><br>
        <textarea class="form-control name=" name="mensaje" rows="4" id="mensaje" placeholder="Descripción " tabindex="6"></textarea>
        <br><div class="g-recaptcha" data-siteke