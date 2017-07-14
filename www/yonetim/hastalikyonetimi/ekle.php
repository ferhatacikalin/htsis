<?php 
include("../../veritabani/db.php");
include("../../eklemeler/hastalikformdegiskenleri.php"); ?>
<?php

mysql_select_db($db_name, $connection) 
or die("veritabanı secilemedi");
$query = "INSERT INTO hastaliklar  VALUES ('$ad', '$belirti', '$bilgi', '$bolge', '$resim','$kategori','$gosterilme','$yas','$zaman','$durum','$aralik')
 ";
mysql_query($query, $connection) or die(mysql_error()); 
echo '<center><h1>İşlem Tamamlandı<h1><center>';
echo '<meta http-equiv="refresh" content="0;URL=index.php">' 

?>


