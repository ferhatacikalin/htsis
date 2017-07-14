<?php mysql_select_db($db_name, $connection) 
or die("veritabanı secilemedi");
$query = "SELECT * 
FROM `hastaliklar` 
WHERE `belirtileri` LIKE '%$belirti%'
AND `bilgi` LIKE '%$bilgi%'
AND `gorulmeyeri` LIKE '%$bolge%'
AND `yas` LIKE '%$yas%'
AND `zaman` LIKE '%$zaman%'
AND `durum` LIKE '%$durum%'
LIMIT 0 , 10  ";

mysql_query($query, $connection) or die(mysql_error());
$result = mysql_query($query, $connection);
?>
