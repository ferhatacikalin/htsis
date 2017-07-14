<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<link href="mizanpaj/css/stil.css" rel="stylesheet" type="text/css" /></head>
<?php
include("veritabani/db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{

if(!$_POST['bilgi']=="" and !$_POST['bolgeler']=="" and !$_POST['yas']=="" and !$_POST['zamanlar']=="" and !$_POST['durumlar']=="" and !$_POST['belirtiler']=="" )
{
/*gövde*/
$belirti=implode($_POST['belirtiler']);$bilgi=$_POST['bilgi'];$bolge=implode($_POST['bolgeler']);$yas=implode($_POST['yas']);$zaman=implode($_POST['zamanlar']);$durum=implode($_POST['durumlar']); 
$aralik=implode($_POST['aralik']);
echo'
 <form method="post">
<input type="hidden" name="belirtiler" value="'.$belirti.'">
<input type="hidden" name="bilgi" value="'.$bilgi.'">
<input type="hidden" name="bolgeler" value="'.$bolge.'">
<input type="hidden" name="yas" value="'.$yas.'">
<input type="hidden" name="zamanlar" value="'.$zaman.'">
<input type="hidden" name="durumlar" value="'.$durum.'">
<input type="hidden" name="durumlar" value="'.$aralik.'">
';

mysql_select_db($db_name, $connection) or die("veritabanı secilemedi");
$query = "SELECT * 
FROM `hastaliklar` 
WHERE `belirtileri` LIKE '%$belirti%'
LIMIT 0 , 10  ";
mysql_query($query, $connection) or die(mysql_error());
$result = mysql_query($query, $connection); 
if (mysql_num_rows($result)=="0")
{
	echo str_repeat("<br>", 8)."<center><img src=images/ok.gif border=0 /> Veritabanında bu belirtilere göre bir hastalık bulamadık
	emin olmak için testi tekrarlayabilirsiniz :) </center>";
	header("Refresh: 5; url=main.php");
	
}
else {
echo'<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-431l{font-family:Arial, Helvetica, sans-serif !important;;text-align:center}
</style>

<p style="text-align:center;"><span style="font-family:Cursive;font-size:48px;font-style:normal;font-weight:bold;text-decoration:none;text-transform:none;color:#1A1A1A;">Bulunan Sonuçlar</span>
</p>
<center><table width="550" class="tg">
  <tr>
    <th class="tg-031e">Adı</th>
    <th class="tg-031e">Açıklama</th>
    <th class="tg-031e"></th>
  </tr>';
 echo str_repeat("<br>", 3);
for ($i=0; $i< mysql_num_rows($result) ; $i++) {
  $adi= mysql_result($result, $i, "adi");
  $bilgi= mysql_result($result, $i, "bilgi");
  $resim= mysql_result($result, $i, "resim");
  echo'
  <tr>
    <td class="tg-031e">'.$adi.'</td>
    <td class="tg-031e">'.$bilgi.'</td>
    <td class="tg-431l"><button type="submit" formaction="rapor.php?hedef='.$adi.'">Detaylı Bilgi</button></td>
  </tr>

';
echo'</center>';
}}


}

else 
{
echo str_repeat("<br>", 8)."<center><img src=images/hata.gif border=0 /> Lütfen alanları boş bırakmayın !</center>";
header("Refresh: 2; url=doktor.php");
return;
}

}

?>
