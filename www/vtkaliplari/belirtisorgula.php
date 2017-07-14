<div   style="height: 24em; width: 25em;  overflow:auto "> 
<?php
	  include("db.php");
	  $sorgu="SELECT * FROM belirtiler";
	  $result = mysql_query($sorgu, $connection );
	  
	  for ($i=0; $i< mysql_num_rows($result) ; $i++) {
$adi= mysql_result($result, $i, "adi");
echo '<div align="left">
<input id="belirtiler[]" type="checkbox" name="belirtiler[]" value="'.$adi.',"  /> <label for="belirti"><span class="sn">'.$adi.',</span></label> <br /></div>

';
}
	  ?>
	</div>
