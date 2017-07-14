<?php

$sunucu = "localhost"; //sunucu
$kullanici = "root"; //veritabani kullanici adi
$parola = ""; // veritabani sifresi
$veritabani = "sistemdb";// veritabani ismi 
$baglanti = mysql_connect($sunucu, $kullanici, $parola); 
mysql_query("SET NAMES UTF8");

if(!$baglanti) die("MySQL sunucusuna baglanti saglanamadi!"); 

mysql_select_db($veritabani, $baglanti) or die ("Veritabanina baglanti saglanamadi!");
?>
