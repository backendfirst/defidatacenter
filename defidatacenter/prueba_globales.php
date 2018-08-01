<?php
$GLOBALS['variable1'] = "Hola ";
$GLOBALS['variable2'] = "Mundo";
echo $variable1.$variable2;

$mostrar_valor  ='<script type="text/javascript">';
$mostrar_valor .='alert("hola");';
$mostrar_valor .='</script>';
echo $mostrar_valor;



$mostrar_valor  = '<script>';
$mostrar_valor  .= "$.ajax({";
$mostrar_valor  .= 'type: "POST",';
$mostrar_valor  .= 'url: "funcion.php",';
$mostrar_valor  .= 'data: { "codigo" :  "codigo" },';
$mostrar_valor  .= 'success: function(data){';
$mostrar_valor  .= "alert(data);";
$mostrar_valor  .= "}";
$mostrar_valor  .= "});";
$mostrar_valor  .= "</script>";
echo $mostrar_valor;

$variable = $_GET["hola"];
echo $variable; // ?hola=http://defidatacenter.test/ddc/mundo

class cadenaglobal {
    public $ruta;
    public function __construct ($ruta){
        $this->ruta = $ruta;
    } 

    public function escriberuta(){
        return $this->ruta;
    }
}
$cadena = new cadenaglobal("hola hola * ");
echo $cadena->escriberuta();
echo $cadena->ruta;
?>
