<?php 
include("veritabani/db.php");
include("eklemeler/hastalikformsorgu.php"); 
if($belirti=="" or $bilgi=="" or $bolge=="" or $yas=="" or $zaman=="" or $durum=="")
{
	echo "<center><img src=images/hata.gif border=0 /> Lütfen alanları boş bırakmayınız !</center>";
	header("Refresh: 2; url=doktor.php");
	return;
	
}

mysql_select_db($db_name, $connection) 
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
if (mysql_num_rows($result)="0")
{
	echo "<center><img src=images/hata.gif border=0 /> Veritabanında bu belirtilere göre bir hastalık bulamadık
	emin olmak için testi tekrarlayabilirsiniz :) </center>";
	header("Refresh: 2; url=main.php");
	
}
else {
for ($i=0; $i< mysql_num_rows($result) ; $i++) {
  $adi= mysql_result($result, $i, "adi");

}}

?>
