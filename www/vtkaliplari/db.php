<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="sistemdb"; 
$connection=@mysql_connect($db_host, $db_user, $db_password) or die("bağlantı hatası");
mysql_select_db($db_name, $connection) 
or die("veritabanı secilemedi");
mysql_query("SET NAMES UTF8");


?>
