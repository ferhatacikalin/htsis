<?php include("../../veritabani/db.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>belirti ekle</title>
</head>
Belirti:
﻿<?php include("../../veritabani/db.php"); ?>
 <form id="form1" name="form1" method="post" action="belirtiekle.php">
        
        
        <center>
          <p>YENİ EKLE </p>
        </center>
   
        <center>
        </center>
        
     
        <p>
          <center>
            <label for="ekle">isim</label>
            
              <input type="text" name="ekle" id="ekle2" />
             
            <input type="submit" name="button" id="button" value="ekle" />
          </center>
        </p>
       
      </form>
      
      <center>
       
      </center>
     
      <center>
         Varolanlar
      </center>
    
        <center>
        </center>
      
      
      
      <p>
        <?php
	
	  $sorgu="SELECT * FROM belirtiler";
	  $result = mysql_query($sorgu, $connection );
	  
	  for ($i=0; $i< mysql_num_rows($result) ; $i++) {
$adi= mysql_result($result, $i, "adi");
echo '
<center><table width="200" border="1">
  <tr>
    <th scope="col">'.$adi.'</th>
    <th scope="col"><a href="../secenekyonetimi/belirtisil.php?SİL='.$adi.'">sil</a></th>
  </tr>
</table>
</center>
';
}
	  
	  
	 

	  ?></frame>
      </p>