<meta charset="utf-8">
<?php


session_start();
ob_start();
// sayfaya eri�im yapan ki�inin admin yetkisini kontrol ediyoruz
if(!isset($_SESSION["yetki"]))
{
echo str_repeat("<br>", 8)."<center><img src=images/hata.gif border=0 /> Y�netim Paneli sadece yetkili kullan�c�lara a��kt�r!</center>";
header("Refresh: 2; url= ../index.php");
return;
}

$islem = $_GET["islem"];
$id = $_GET["id"];

include("../baglanti.php");

$sorgula = mysql_query("SELECT * FROM uyeler WHERE id='".$id."'") or die (mysql_error());
$uyeler = mysql_fetch_array($sorgula);

//�ye Sil
if($islem=="sil")
{

$uye_sil = "DELETE FROM uyeler WHERE id='$id'";
$sil_sonuc = mysql_query($uye_sil);	
echo str_repeat("<br>",8)."<center><img src=images/ok.gif border=0 /> �ye Silindi.</center>";
header("Refresh: 1; url= admin.php");
return;
}

//Bilgileri G�ncelle
elseif($islem=="guncelle")
{

$g_id = $_GET["id"];
$g_kullanici_adi = $_POST["kullanici_adi"];
$g_parola = md5(md5($_POST["parola"]));
$g_eposta = $_POST["eposta"];
$g_yetki = $_POST["yetki"];
$g_button = $_POST["button"];


if($g_button){

if(!$_POST["parola"]=="")
{
$guncelle = mysql_query("Update uyeler Set kullanici_adi='$g_kullanici_adi', parola='$g_parola', eposta='$g_eposta', yetki='$g_yetki' Where id='$g_id'");
$_SESSION["parola"] = $g_parola;
setcookie("parola",$g_parola,time()+60*60*24);
}
else
{
$guncelle = mysql_query("Update uyeler Set kullanici_adi='$g_kullanici_adi', eposta='$g_eposta' , yetki='$g_yetki' Where id='$g_id'");
}
	if($guncelle)
	{
	
	echo str_repeat("<br>",8)."<center><img src=images/ok.gif border=0 /> �ye Bilgileri G�ncellendi.</center>";

	header("Refresh: 1; url= admin.php");
	return;
	}
	else
	{

	echo "<center><img src=images/hata.gif border=0 /> �ye Bilgileri G�ncellenmedi!</center>";

	header("Refresh: 2; url= admin.php");

	}

}
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>�ye Bilgi G�ncelle</title>
<link href="css/stil.css" rel="stylesheet" type="text/css" />

</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="guncelle" method="post" action="admin_islem.php?islem=guncelle&id=<?php echo $uyeler['id']; ?>">
<table align="center" width="300" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td height="62"><img src="images/uye.png" width="32" height="32" /> <a href="cikis.php">&Ccedil;�k��</a></td>
    <td height="62" align="right">&nbsp;</td>
  </tr>
  <tr>
    <td width="114">Kullan�c� ad�:</td>
    <td width="179"><input type="text" name="kullanici_adi" value="<?php echo $uyeler['kullanici_adi']; ?>" /></td>
  </tr>
  <tr>
    <td>�ifre De�i�tir:</td>
    <td><input type="password" name="parola" value=""  /></td>
  </tr>
  <tr>
    <td>E-Posta:</td>
    <td><input type="text" name="eposta" value="<?php echo $uyeler['eposta']; ?>"  /></td>
  </tr>
    <tr>
    <td>Yetki:</td>
    <td><select name="yetki">
	<?php if($uyeler['yetki'] =="0")
	echo "<option value=\"0\" selected=\"selected\" style=\"background-color:#FF9;\">�ye</option>
	<option value=\"1\">Admin</option>";
	elseif($uyeler['yetki'] =="1")
	echo "<option value=\"1\" selected=\"selected\" style=\"background-color:lightyellow;\">Admin</option>
	<option value=\"0\">�ye</option>";
	?>

	</select></td>
  </tr>
  <tr>
    <td>&Uuml;yelik Tarihi:</td>
    <td>
	<?php echo $uyeler['tarih'];?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" value="G�ncelle" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>

<?php 
mysql_close();
ob_end_flush();	
?>
