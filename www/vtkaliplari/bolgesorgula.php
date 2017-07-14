<div   style="height: 24em; width: 25em;  overflow:auto "> 
<?php
	   	  include("db.php");
	  $sorgu="SELECT * FROM vucutbolgeleri";
	  $result = mysql_query($sorgu, $connection );
	  
	  for ($i=0; $i< mysql_num_rows($result) ; $i++) {
$adi= mysql_result($result, $i, "bolge");
echo '<div align="left">
<input id="isim[]<?php require(); ?>" type="checkbox" name="bolgeler[]" value="'.$adi.'," /> <label for="isim">'.$adi.',</label> <br />
</div>
';
}
	  ?>
	 </div>
