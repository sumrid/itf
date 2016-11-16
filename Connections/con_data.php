<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_con_data = "localhost";
$database_con_data = "itf";
$username_con_data = "root";
$password_con_data = "";
$con_data = mysql_pconnect($hostname_con_data, $username_con_data, $password_con_data) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES UTF8");
?>