<?php


session_start();
ob_start();
// sayfaya eri�im yapan ki�inin admin yetkisini kontrol ediyoruz
if(!isset($_SESSION["yetki"]))
{
echo str_repeat("<br>", 8)."<center><img src=images/hata.gif border=0 /> Y�netim Paneli sadece yetkili kullan�c�lara a��kt�r!</center>";
header("Refresh: 2; url= anasayfa.php");
return;
}
include("../baglanti.php");


$sql = "select * from uyeler Order By id";

$sorgula = mysql_query($sql, $baglanti) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<meta charset="utf-8">
<title>Y&ouml;netim Paneli</title>
<link href="./css/stil.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="guncelle" method="post" action="admin_islem.php?id=<?php echo $uyeler['id']; ?>">
<table align="center" width="800" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td height="62" colspan="2"><img src="./mizanpaj/gorsel/uye.png" width="32" height="32" /><b> Y�netici:</b> <a href="cikis.php">&Ccedil;�k��</a></td>
    </tr>
 <tr>
    <td><b><u>ID</u></b></td>
    <td><b><u>Kullan�c� Ad�</u></b></td>
    <td><b><u>Parola (Md5)</u></b></td>
    <td><b><u>E-Posta</u></b></td>
    <td><b><u>Yetki</u></b></td>
  </tr>
<?php while ($uyeler = mysql_fetch_array($sorgula)){ ?>
 <tr>
    <td><?php echo $uyeler['id']; ?></td>
    <td><?php echo $uyeler['kullanici_adi']; ?></td>
    <td><?php echo $uyeler['parola']; ?></td>
    <td><?php echo $uyeler['eposta']; ?></td>
    <td><?php if($uyeler['yetki'] =="0")
	echo "�ye";
	elseif($uyeler['yetki'] =="1")
	echo "Admin";
	?></td>
    <td><a href="admin_islem.php?islem=duzenle&id=<?php echo $uyeler['id']; ?>">D�zenle</a></td>
    <td><a href="admin_islem.php?islem=sil&id=<?php echo $uyeler['id']; ?>">Sil</a></td>
  </tr>
<?php } ?>

</table>
</form>
</body>
</html>

<?php 
mysql_close();
ob_end_flush();	
?>
