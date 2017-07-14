<?php include("veritabani/db.php"); include("vtkaliplari/hastaliksorgula.php"); ?>
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
 <center>
   <div id="baslikdizin">Sistemde Kayıtlı Hastalıklar</div>

<table  id="tablo" width="20%" border="1">
  <?php echo '<tr>
    <td>'.$adi.'</td>
    <td><a href="dizin-ayrinti.php?id='.$adi.'">Ayrıntılar</a></td>
  </tr>'?>
</table>


 </center> 
</div>

<div id="apDiv2"><?php include("mizanpaj/alt.php"); ?></div>

</body>
</html>