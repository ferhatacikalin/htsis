<?php include("veritabani/db.php"); ?><?php $id=$_GET['id']; 
$sorgu="SELECT * FROM hastaliklar where adi = '$id'";
	  $result = mysql_query($sorgu, $connection );
	  
	  for ($i=0; $i< mysql_num_rows($result) ; $i++) {
$adi= mysql_result($result, $i, "adi");
$belirti=mysql_result($result, $i, "belirtileri");
$bilgi=mysql_result($result, $i, "bilgi");
$gorulmeyeri=mysql_result($result, $i, "gorulmeyeri");
$resim=mysql_result($result, $i, "resim");
$kategori=mysql_result($result, $i, "kategori");
$gosterilme=mysql_result($result, $i, "gosterilme");
$yas=mysql_result($result, $i, "yas");
$zaman=mysql_result($result, $i, "zaman");
$durum=mysql_result($result, $i, "durum");
$aralik=mysql_result($result, $i, "aralik");
	 } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="mizanpaj/css/stil.css" rel="stylesheet" type="text/css" />
<link href="mizanpaj/css/style.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<title></title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body>
<?php include("mizanpaj/navi.php"); ?>
<div id="apDiv1">
<?php
  echo'<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-431l{font-family:Arial, Helvetica, sans-serif !important;;text-align:left}
</style>

<p style="text-align:center;"><span style="font-family:Cursive;font-size:48px;font-style:normal;font-weight:bold;text-decoration:none;text-transform:none;color:##1A1A1A;">Hastalık Adı:'.$adi.'</span>
</p>
<center><table width="550" class="tg">
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
    <td class="tg-031e">'.$gorulmeyeri.'</td>
    </tr>
    <tr>
    <th class="tg-031e">Türü:</th>
    <td class="tg-031e">'.$kategori.'</td>
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
    <tr>
    <th class="tg-031e">Genel Görülme Sıklığı:</th>
    <td class="tg-031e">'.$zaman.'</td>
    </tr>
   ';
 ?>
</div>

<div id="apDiv2"><?php include("mizanpaj/alt.php"); ?></div>

</body>
</html>