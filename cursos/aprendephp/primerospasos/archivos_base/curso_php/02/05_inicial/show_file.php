<?php
define('__IMG', 1);
define('__PDF', 2);

$type = isset($_GET['type']) ? $_GET['type'] : '';

switch ($type) {
	case __IMG:
		$file = 'valencia.jpg';
		break;
	case __PDF:
		$file = 'generic.pdf';
		break;
	
}
$cont = file_get_contents($file);
echo $cont;