
<?php
	  include("db.php");
	  $sorgu="UPDATE hastaliklar SET adi='Domuz gribi' WHERE kategori='Bulaşıcı Hastalıklar,'";
	  $result = mysql_query($sorgu, $connection );
?>
	