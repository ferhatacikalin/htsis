<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<link href="mizanpaj/css/stil.css" rel="stylesheet" type="text/css" /></head>
<?php
include("benzerlikhesapla.php");
include("veritabani/db.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
if(!$_POST['bilgi']=="" and !$_POST['bolgeler']=="" and !$_POST['yas']=="" and !$_POST['zamanlar']=="" and !$_POST['durumlar']=="" and !$_POST['belirtiler']=="" and !$_GET['hedef']=="" )
{
$kaynak=$_GET['hedef'];
/*gövde*/
$belirti=$_POST['belirtiler'];$bilgi=$_POST['bilgi'];$bolge=$_POST['bolgeler'];$yas=$_POST['yas'];$zaman=$_POST['zamanlar'];$durum=$_POST['durumlar']; 

mysql_select_db($db_name, $connection) or die("veritabanı secilemedi");
$sorgu="SELECT * FROM hastaliklar WHERE adi='$kaynak'";
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
$durum2=mysql_result($result, $i, "durum");}
/*ihtimal*/

$bir=benzerlik($belirti, $belirti2);
$iki=benzerlik($bilgi,$bilgi2);
$uc=benzerlik($bolge,$gorulmeyeri2);
$dort=benzerlik($yas,$yas2);
$bes=benzerlik($zaman,$zaman2);
$alti=benzerlik($durum,$durum2);
$toplam=$bir+$iki+$uc+$dort+$bes+$alti;
$yuz=6;
$oran= $toplam / $yuz ;
echo'<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-431l{font-family:Arial, Helvetica, sans-serif !important;;text-align:left}
</style>

<p style="text-align:center;"><span style="font-family:Cursive;font-size:28px;font-style:normal;font-weight:bold;text-decoration:none;text-transform:none;color:#1A1A1A;">Hastalık Adı:'.$adi2.'</span>
</p>
<center><table width="550" class="tg">
<br>

<p>Bulunan hastalığın bilgileri:</p>
  <tr>
    <th class="tg-031e">Belirtileri:</th>
    <td class="tg-031e"> '.$belirti2.' </td>
    </tr>
    <tr>
    <th class="tg-031e">Genel Bilgi:</th>
    <td class="tg-031e">'.$bilgi2.'</td>
    </tr>
    <tr>
    <th class="tg-031e">Görüldüğü Vücut Bölgesi:</th>
    <td class="tg-031e">'.$gorulmeyeri2.'</td>
    </tr>
    <tr>
    <th class="tg-031e">Türü:</th>
    <td class="tg-031e">'.$kategori2.'</td>
    </tr>
    <tr>
    <th class="tg-031e">Genel Görülme Yaşı:</th>
    <td class="tg-031e">'.$yas2.'</td>
    </tr>
    <tr>
    <th class="tg-031e">Görülme Durumları:</th>
    <td class="tg-031e">'.$durum2.'</td>
    </tr>
    <tr>
    <th class="tg-031e">Görülme Vakitleri:</th>
    <td class="tg-031e">'.$zaman2.'</td>
    </tr>
    <p></p>
  
    <table width="550" class="tg">
      <p>Sizde görülenler:</p>
  <tr>
    <th class="tg-031e">Belirtileri:</th>
    <td class="tg-031e"> '.$belirti.' </td>
    </tr>
    <tr>
    <th class="tg-031e">Genel Bilgi:</th>
    <td class="tg-031e">'.$bilgi.'</td>
    </tr>
    <tr>
    <th class="tg-031e">Görüldüğü Vücut Bölgesi:</th>
    <td class="tg-031e">'.$bolge.'</td>
    </tr>
    
    <tr>
    <th class="tg-031e">Genel Görülme Yaşı:</th>
    <td class="tg-031e">'.$yas.'</td>
    </tr>
    <tr>
    <th class="tg-031e">Görülme Durumları:</th>
    <td class="tg-031e">'.$durum.'</td>
    </tr>
    <tr>
    <th class="tg-031e">Görülme Vakitleri:</th>
    <td class="tg-031e">'.$zaman.'</td>
    </tr>
    <table width="550" class="tg">
      <p>Hastalığın olma ihtimali:</p>
  <tr>
    <th class="tg-031e">Uyuşma oranı:</th>
    <td class="tg-031e"> '.$oran.' </td>
    </tr>
   ';
}
}
?>


