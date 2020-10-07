<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_db_data = "localhost";
$database_db_data = "joaogabr_roun239";
$username_db_data = "joaogabrielethya";
$password_db_data = "gkjt1279";
$db_data = mysql_pconnect($hostname_db_data, $username_db_data, $password_db_data) or trigger_error(mysql_error(),E_USER_ERROR); 
?>