<?php
/*Formulario de contacto HTML5, PHP Y Bootstraps
Creado por: www.render2web.com
Version: 1.1*/

//Comprobamos que se haya presionado el boton enviar
if(isset($_POST['enviar'])){
	//Guardamos en variables los datos enviados
	$comentario = $_POST['comentario'];
	$nombre = $_POST['nombre'];
	$persona = $_POST['persona'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$ciudad = $_POST['ciudad'];
	$fecha = $_POST['fecha'];
	$producto = $_POST['producto'];
	$mensaje = $_POST['mensaje'];
	
	///Validamos del lado del servidor que el nombre y el email no estén vacios
	if($nombre == ''){
		echo "Debe ingresar su nombre";
	}
	else if($email == ''){
		echo "Debe ingresar su email";
}else{
	$para = "da@qcc.com.mx";//Email al que se enviará
	$asunto = "Comentario sobre QCC";//Puedes cambiar el asunto del mensaje desde aqui
	//Este sería el cuerpo del mensaje
	$mensaje = "
		<table border='0' cellspacing='3' cellpadding='2'>
		<tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Tipo de comentario:</strong></td>
			<td width='80%' align='left'>$comentario</td>
		  </tr>
		  <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Nombre:</strong></td>
			<td width='80%' align='left'>$nombre</td>
		  </tr>
		   <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Persona a contactar (si es diferente del reclamante):</strong></td>
			<td width='80%' align='left'>$persona</td>
		  </tr>
		  <tr>
			<td align='left' bgcolor='#f0efef'><strong>E-mail:</strong></td>
			<td align='left'>$email</td>
		  </tr>
		   <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Teléfono:</strong></td>
			<td width='70%' align='left'>$telefono</td>
		  </tr>
		  <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Ciudad:</strong></td>
			<td width='70%' align='left'>$ciudad</td>
		  </tr>
		  <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Fecha de ocurrencia:</strong></td>
			<td width='70%' align='left'>$fecha</td>
		  </tr>
		  <tr>
			<td align='left' bgcolor='#f0efef'><strong>Comentario:</strong></td>
			<td align='left'>$mensaje</td>
		  </tr>
	</table>	
";	
	
//Cabeceras del correo
    $headers = "From: $nombre <$email>\r\n"; //Quien envia?
    $headers .= "X-Mailer: PHP5\n";
    $headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
	
//Comprobamos que los datos enviados a la función MAIL de PHP estén bien y si es correcto enviamos
	if(mail($para, $asunto, $mensaje, $headers)){
		echo "Su mensaje se ha enviado correctamente";
		echo "<br />";
		echo '<a href="../formulario_contacto.html">Volver</a>';
	}else{
		echo "Hubo un error en el envío inténtelo más tarde";
	}
}
}	
?>