<?php include("../../veritabani/db.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GÖRÜLME SÜRESİ SİL</title>
</head>
<?php 
 
mysql_select_db($db_name, $connection) or die("veritabanı secilemedi");
$ad=$_GET['SİL']; 
$query ="Delete from sure where adi = '$ad'";

mysql_query($query, $connection) or die(mysql_error()); 
echo '<center><h1>İşlem Tamamlandı<h1><center>';
header("location: ".$_SERVER['HTTP_REFERER'].""); 
?>
<body>
</body>
</html>
