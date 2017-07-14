<?php $hedef=$_GET['isim']; include("../../veritabani/db.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
echo '<title>'.$hedef.'</title>'
?>


<script src="../tasarim/SpryAccordion.js" type="text/javascript"></script>
<link href="../tasarim/SpryAccordion.css" rel="stylesheet" type="text/css" />

</head>
<body>
<p><center><a href="index.php"><h6>GERİ DÖN</h6></a></center></p>
<p>
  <?php
echo '<center><h3><strong><font size="20">'.$hedef.'</font>
</strong></h3></center>'
?>
  
  <?php 
$sorgu="SELECT * FROM hastaliklar where adi = '$hedef'";
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
}
?>
</p>
<p>
<center><img src="../<?php echo $resim?>" width="30%" height="%30" /></center><center><?php echo 'gösterilme sayısı:'.$gosterilme.''; ?></center>
</p>

<p>&nbsp;</p>
<?php
echo'
<div id="Accordion1" class="Accordion" tabindex="0">
  <div class="AccordionPanel">
    <div class="AccordionPanelTab"><center>belirtileri</center></div>
    <div class="AccordionPanelContent"><center>'.$belirti.'</center> </div>
  </div>
<div class="AccordionPanel">
    <div class="AccordionPanelTab"><center>bilgi</center></div>
    <div class="AccordionPanelContent"><center>'.$bilgi.'</center></div>
  </div>
<div class="AccordionPanel">
  <div class="AccordionPanelTab"><center>görülmeyeri<center></div>
  <div class="AccordionPanelContent"><center>'. $gorulmeyeri.'</center></div>
</div>
<div class="AccordionPanel">
  <div class="AccordionPanelTab"><center>kategori</center></div>
  <div class="AccordionPanelContent"><center>'.$kategori.'</center></div>
</div>
<div class="AccordionPanel">
  <div class="AccordionPanelTab"><center>yaş aralığı</center></div>
  <div class="AccordionPanelContent"><center>'.$yas.'</center></div>
</div>
<div class="AccordionPanel">
  <div class="AccordionPanelTab"><center>görülme zamanı</center></div>
  <div class="AccordionPanelContent"><center>'.$zaman.'</center></div>
</div>
<div class="AccordionPanel">
  <div class="AccordionPanelTab"><center>görülme durumu</center></div>
  <div class="AccordionPanelContent"><center>'.$durum.'</center></div>
</div>
</div>'
?>
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>
