<?php 

$sorgu="SELECT * FROM hastaliklar";
	  $result = mysql_query($sorgu, $connection );
	  
	  for ($i=0; $i< mysql_num_rows($result) ; $i++) {
$adi2= mysql_result($result, $i, "adi");
$belirti2=mysql_result($result, $i, "belirtileri");
$bilgi2=mysql_result($result, $i, "bilgi");
$gorulmeyeri2=mysql_result($result, $i, "gorulmeyeri");
$resim2=mysql_result($result, $i, "resim");
$kategori2=mysql_result($result, $i, "kategori");
$gosterilme2=mysql_result($result, $i, "gosterilme");
$yas2=mysql_result($result, $i, "yas");
$zaman2=mysql_result($result, $i, "zaman");
$durum2=mysql_result($result, $i, "durum");
	  }
?>