<?php include("../../veritabani/db.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hastalık Yönetimi</title>
<script src="../tasarim/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="asd.js" type="text/javascript"></script>
<link href="../tasarim/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#TabbedPanels1 .TabbedPanelsContentGroup .TabbedPanelsContent.TabbedPanelsContentVisible center table tr th dfn {
	font-family: Comic Sans MS, Cooper Black, goudy stout;
}
table tr th {
	font-family: Comic Sans MS, cursive;
}
</style>
<SCRIPT LANGUAGE="JavaScript">

function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=320 ,height=240,left = 480,top = 280');");
}

</script>
</head>

<body>
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">HASTALIK EKLE</li>
    <li class="TabbedPanelsTab" tabindex="0">KAYITLI HASTALIKLAR</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
<form id="form1" name="form1" method="get" action="ekle.php">
  <p>
    <label for="isim">İsim:</label>
    <input type="text" name="isim" id="isim" />
  </p>
  <p>Belirtileri:
   <div id="mydiv1"></div>
<a href="#" id="refresh1">yenile</a>

<script>
$(function() {
  $("#refresh1").click(function() {
     $("#mydiv1").load("../../vtkaliplari/belirtisorgula.php")
  })
})
</script>
    
   </p>
  <label for="bilgi">Açıklama</label>
  :
  <p>
  <textarea name="bilgi" id="bilgi" cols="45" rows="5"></textarea>
</p>
  <p>Görülme yeri:
  <div id="mydiv2"></div>
<a href="#" id="refresh2">yenile</a>

<script>
$(function() {
  $("#refresh2").click(function() {
     $("#mydiv2").load("../../vtkaliplari/bolgesorgula.php")
  })
})
</script>
  
  <p>
    <label for="resim">Resim adresi:</label>
  </p>
  <p>
    <input type="text" name="resim" id="resim" value="../resim/resimyok.png" />
  </p>
  <p>Kategori:</p>
  <div id="mydiv3"></div>
<a href="#" id="refresh3">yenile</a>

<script>
$(function() {
  $("#refresh3").click(function() {
     $("#mydiv3").load("../../vtkaliplari/kategorisorgula.php")
  })
})
</script>

 <p>
   </p>Görülme zamanı:
    <div id="mydiv4"></div>
<a href="#" id="refresh4">yenile</a>

<script>
$(function() {
  $("#refresh4").click(function() {
     $("#mydiv4").load("../../vtkaliplari/zamansorgula.php")
  })
})
</script>

 <p>Yaş aralıkları:</p>
   <div id="mydiv5"></div>
<a href="#" id="refresh5">yenile</a>

<script>
$(function() {
  $("#refresh5").click(function() {
     $("#mydiv5").load("../../vtkaliplari/yassorgula.php")
  })
})
</script>
 <p> 
 <p>Görülme durumu:
  <div id="mydiv6"></div>
<a href="#" id="refresh6">yenile</a>

<script>
$(function() {
  $("#refresh6").click(function() {
     $("#mydiv6").load("../../vtkaliplari/durumsorgula.php")
  })
})
</script>

 </p>
 </p>
 <p>Görülme Sıklığı:
  <div id="mydiv7"></div>
<a href="#" id="refresh7">yenile</a>

<script>
$(function() {
  $("#refresh7").click(function() {
     $("#mydiv7").load("../../vtkaliplari/araliksorgula.php")
  })
})
</script>

 </p>
 </p>
  </p>
   <input name="gönder" type="submit" value="gönder" />
</form>

      <p>&nbsp;</p>
    </div>
    <div class="TabbedPanelsContent">
      <center><table width="50%" height="15
      " border="1">
        <tr>
          <th scope="col"><strong>adı</strong></th>
          <th scope="col"><strong>resim</strong></th>
          <th scope="col"><strong>kategori</strong></th>
          <th scope="col"><strong>gösterilme</strong></th>
          <th scope="col"><strong>daha fazla</strong></th>
          <th scope="col">x</th>
        </tr>
      
            <?php
	   
	  $sorgu="SELECT * FROM hastaliklar";
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
echo '
 <tr>
          <th scope="col">'.$adi.'</th>
          <th scope="col"><img src="../'.$resim.'" width="40" height="30" alt="bilgi resmi" />  </th>
          <th scope="col">'.$kategori.'</th>
          <th scope="col">'.$gosterilme.'</th>
		  <th scope="col"><a href="../hastalikyonetimi/goster.php?isim='.$adi.'">göster</a>
		
		  
		  
		  </th>
          <th scope="col"><a href="../hastalikyonetimi/sil.php?SİL='.$adi.'">sil</a></th>
        </tr>
';
}
	  ?>
      </table></center>
      
      
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>