<?php include("../../veritabani/db.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<?php include("../../veritabani/db.php"); ?>
Görülme Sıklığı ekle:
<center>

        <form action="aralik.php" method="get">
          <p>YENİ EKLE</p>
          <p>
            <label for="ekle">isim</label>
            <input type="text" name="ekle" id="ekle" />
            <input type="submit" name="button2" id="button2" value="ekle" />
          </p>
        </form>
        <p>
          <center>
            Varolanlar
          </center>
          <?php
	   
	  $sorgu="SELECT * FROM aralik";
	  $result = mysql_query($sorgu, $connection );
	  
	  for ($i=0; $i< mysql_num_rows($result) ; $i++) {
$adi= mysql_result($result, $i, "adi");
echo '
<center><table width="200" border="1">
  <tr>
    <th scope="col">'.$adi.'</th>
    <th scope="col"><a href="../secenekyonetimi/araliksil.php?SİL='.$adi.'">sil</a></th>
  </tr>
</table></center>

';
}
	  ?>
        </p>
      </center>