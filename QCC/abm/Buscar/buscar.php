<!--
Fuente: http://codigofuente-de.blogspot.com/
Unete a https://www.facebook.com/pages/Código-Fuente-de-Diseño-y-Programaciòn/876534622374945

y sigue visistane nuestra web:
http://codigofuente-de.blogspot.com/
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <!--Llamamos a las librerias jquery-->
   <script src="js/jquery.min.js" type="text/javascript"></script>
   <link rel="stylesheet" type="text/css" href="css/estilos.css" />
   <!--Añadimos nuestro archivo script.js que hace uso de ayax-->
   <script src="js/script.js" type="text/javascript"></script>

	</head>
	<body onload="mouse()">
		<div class='formdedatos'>
       		<form  name="f1" > 
    			<div>								
    		  <h2 id="titulo">Buscar Datos en tiempo real</h2>
    			</div>
                
    			<label >Ingrese Nombre</label>
    			<input id="nombre" name="nombre" required type="text" onkeyup="cargar()"><br> <br>

          <!--Aqui se mostrar lo que contiene la pagina procesar_busqueda.php-->
         <div id="mostrardatos">    

         </div>

        
         <!--Tambien puedes implementarlo con un boton y ya no cuando se escribe-->
         <!--Para ello debes de quitar el comentario a lo siguiente y quitarle el evento onkeyup a la caja de texto-->
         <!--
         <input class="botons" type='button' name='Ver' value='Registrarme' onclick="cargar()">
         -->
          <br>
         <input class="botons" type='button' onclick="limpiar_campos()" value='Limpiar'>
        </form> 

  </div>      
  <footer>

  </footer>
	</body>
</html>
<!--
Fuente: http://codigofuente-de.blogspot.com/
Unete a https://www.facebook.com/pages/Código-Fuente-de-Diseño-y-Programaciòn/876534622374945

y sigue visistane nuestra web:
http://codigofuente-de.blogspot.com/
-->
