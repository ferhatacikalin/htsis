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
<title></title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body>
<?php include("mizanpaj/navi.php"); ?>
<div id="apDiv1">
  
</div>

<div id="apDiv2"><?php include("mizanpaj/alt.php"); ?></div>

</body>
</html>
