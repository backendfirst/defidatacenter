<?php
function debug($value)
{

  echo '<pre>';
  var_dump($value);
  echo '</pre>';

}

//debug($_POST);

$language = isset($_GET['language']) ? $_GET['language'] : 0;

echo 'Buen día';