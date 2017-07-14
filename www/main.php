<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
session_start();
ob_start();

if(!isset($_SESSION["giris"]))
{
echo str_repeat("<br>", 8)."<center><img src=images/yukleniyor.gif border=0 />Bu sayfayı görüntülemek için giriş yapmalısınız.</center>";
header("Refresh: 2; url= giris.php");
return;
}
include("baglanti.php");

$sorgula = mysql_query("SELECT * FROM uyeler WHERE kullanici_adi='".$_COOKIE["kullanici_adi"]."' and parola='".$_COOKIE["parola"]."'") or die (mysql_error());

$uyeler = mysql_fetch_array($sorgula);
// giriþ yapan üye admin yetkisine sahip ise yönetim paneline yönlendiriyoruz
if($uyeler['yetki']=="1")
{
$_SESSION["yetki"]="true";	
echo str_repeat("<br>", 8)."<center><img src=images/yukleniyor.gif border=0 /> Admin Paneline yöndiriliyorsunuz, lütfen bekleyiniz..</center>";	
header("Refresh: 2; url= /yonetim");
return;
}
?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="mizanpaj/css/stil.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<title>Hastalık Teshiş Sistemi</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body>
<?php include("mizanpaj/navi.php"); ?>
<div id="apDiv1">
  <ul>
<br><br><br>
	</li>
	<p>
<img src="images/ok.gif" alt="" />Hoşgeldin <?php echo $_COOKIE["kullanici_adi"];?> 
	</p>
	<p>Bu sistem sayesinde hastalıklarınızı kolayca teshiş edebileceksiniz.</p>
	<p>İlk önce <a href="ayar.php">ayarlar bölümünden</a> kişisel ayarlarınızı yapınız.</p>
	<p><a href="doktor.php">Sorgulama bölümünden</a> verilen soruları cevaplayarak olası sorunlarınızı tespit etmeye çalışacağız.</p>
	<p>Tespit edebileceğimiz tüm hastalıları görebilmek için <a href="dizin.php">dizin bölümüne</a> gidebilirsiniz.</p>
	<p>Eğe sonucu riskli bulursak <a href="ayar.php">ayarlar bölümünde</a> belirttiğiniz doktorunuza e-posta olarak göndereceğiz. </p>
	<p>Sonuçları rapor olarak kaydedebilirsiniz.</p>
</ul>

</div>

<div id="apDiv2"><?php include("mizanpaj/alt.php"); ?></div>

</body>
</html>
