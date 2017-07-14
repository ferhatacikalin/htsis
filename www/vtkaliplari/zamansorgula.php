<div   style="height: 24em; width: 25em;  overflow:auto "> 
  
  <?php
	   	  include("db.php");
	  $sorgu="SELECT * FROM sure";
	  $result = mysql_query($sorgu, $connection );
	  
	  for ($i=0; $i< mysql_num_rows($result) ; $i++) {
$adi= mysql_result($result, $i, "adi");
echo '<div align="left">
<input id="isim" type="checkbox" name="zamanlar[]" value="'.$adi.'," /> <label for="isim">'.$adi.',</label> <br />
</div>
';
}
	  ?></div>
