<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_con_data = "localhost";
$database_con_data = "u288863732_monst";
$username_con_data = "u288863732_sum";
$password_con_data = "81555084";
$con_data = mysql_pconnect($hostname_con_data, $username_con_data, $password_con_data) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES UTF8");
?>