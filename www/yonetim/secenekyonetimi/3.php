<?php include("../../veritabani/db.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
﻿<?php include("../../veritabani/db.php"); ?>
Kategori:
<form id="form3" name="form3" method="get" action="kategoriekle.php">
        <CENTER>
          <p>YENİ EKLE</p>
          <p>
            <label for="ekle9">isim</label>
            <input type="text" name="ekle3" id="ekle9" />
            <input type="submit" name="button" id="button" value="ekle" />
          </p>
        </CENTER>
      </form>
      <center>
        Varolanlar
  <?php
	  
	  $sorgu="SELECT * FROM kategori";
	  $result = mysql_query($sorgu, $connection );
	  
	  for ($i=0; $i< mysql_num_rows($result) ; $i++) {
$adi= mysql_result($result, $i, "kategori");
echo '
<center><table width="200" border="1">
  <tr>
    <th scope="col">'.$adi.'</th>
    <th scope="col"><a href="../secenekyonetimi/kategorisil.php?SİL='.$adi.'">sil</a></th>
  </tr>
</table></center>

';
}
	  
	  
	 

	  ?>
      <p>