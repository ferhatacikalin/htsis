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
	  }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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