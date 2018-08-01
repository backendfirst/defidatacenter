<?php
class Buscador {
	var $host='localhost',$user='root',$pass='',$db='abm',$c_Servidor='Se conecto con el servidor correctamente',$i_Servidor='No se conecto con el Servidor',$c_DB='Se selecciono correctamente la DB',$i_DB='No se selecciono la DB';
	
	function Conectar() {
		if (!@mysql_connect($this->host,$this->user,$this->pass)){
			print $this->i_Servidor;
				
		} else { 
			if (!@mysql_select_db($this->db)) {
				print $this->i_DB;		
			} 
		}
	}
	
	function Buscar($q) {
		$query = mysql_query("SELECT * FROM abm WHERE nombre LIKE '%$q%'");
		if (mysql_num_rows($query)<=0){
			print 'No se encontro ningun resultado';
			
		} else {
			print '<table width="100%" border="1" cellspacing="0" cellpadding="0">
					  <tr>
						<td>Organización</td>
						<td>ROC</td>
						<td>Norma de referencia</td>
						<td>Estatus</td>
					  </tr>';
			while ($row = mysql_fetch_assoc($query)) {
				print ' <tr>
						<td>'.$row['nombre'].'</td>
						<td>'.$row['apellido'].'</td>
						<td>'.$row['fecha_nac'].'</td>
						<td>'.$row['peso'].'</td>
					  </tr>';
			}
			print '</table>';
		}
			
	}
	
}

?>