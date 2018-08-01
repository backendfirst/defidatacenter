<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_QCC = "localhost";
$database_QCC = "myapp";
$username_QCC = "root";
$password_QCC = "";
$QCC = mysql_pconnect($hostname_QCC, $username_QCC, $password_QCC) or trigger_error(mysql_error(),E_USER_ERROR); 
?>