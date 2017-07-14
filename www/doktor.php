<?php include("veritabani/db.php");
session_start();
ob_start();

if(!isset($_SESSION["giris"]))
{
echo str_repeat("<br>", 8)."<center><img src=images/yukleniyor.gif border=0 />İlk önce giriş yapmalısınız.</center>";
header("Refresh: 2; url= giris.php");
return;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="mizanpaj/css/stil.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<title></title>
<script type="text/javascript" src="mizanpaj/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="mizanpaj/js/wb.carousel.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
   var Carousel1Opts =
   {
      delay: 2147483647,
      duration: 500,
      easing: 'linear',
      mode: 'backward',
      direction: '',
      scalemode: 1,
      pagination: true,
      pagination_img_default: 'mizanpaj/gorsel/page_default.png',
      pagination_img_active: 'mizanpaj/gorsel/page_active.png',
      start: 0
   };
   $("#Carousel1").carousel(Carousel1Opts);
   $("#Carousel1_back a").click(function()
   {
      $('#Carousel1').carousel('prev');
   });
   $("#Carousel1_next a").click(function()
   {
      $('#Carousel1').carousel('next');
   });
});
</script>

</head>
<body>
<?php include("mizanpaj/navi.php"); ?>
<div id="apDiv1">
<div id="wb_Carousel1" style="position:absolute;top:0px; height:100%;z-index:2;overflow:hidden;">
<div id="Carousel1" style=" text-align:center ; position:fixed;">
<br>
<br>
<div class="frame">
  <center>
  
  <div id="baslik">YAŞINIZI SEÇİNİZ</div>
<form action="sonuc.php" method="post">
  <?php include("vtkaliplari/yassorgula.php"); ?></center>
</div>
<div class="frame">
  <center>
  
  <div id="baslik">ŞİMDİ BELİRTİLERİ SEÇİNİZ</div>
  <?php include("vtkaliplari/belirtisorgula.php"); ?></center>
</div>
<div class="frame">
  <center>
  
  <div id="baslik">BELİRTİLERİN GÖRÜLDÜĞÜ BÖLGEYİ SEÇİNİZ</div>
  <?php include("vtkaliplari/bolgesorgula.php"); ?></center>
</div>
<div class="frame">
  <center>
  
  <div id="baslik">BELİRTİLER NE ZAMAN GÖRÜLÜYOR?</div>
  <?php include("vtkaliplari/zamansorgula.php"); ?></center>
</div>
<div class="frame">
  <center>
  
  <div id="baslik">BELİRTİLER NE SIKLIKLA GÖRÜLÜYOR?</div>
  <?php include("vtkaliplari/araliksorgula.php"); ?></center>
</div>
<div class="frame">
  <center>
  
  <div id="baslik">BELİRTİLER HANGİ DURUMLARDA GÖRÜLÜYOR?</div>
  <?php include("vtkaliplari/durumsorgula.php"); ?></center>
</div>
<div class="frame">
  <center>
  
  <div id="baslik">VE BİRAZ ANLATIN</div>
  <textarea name="bilgi"  id="metin" wrap="virtual"></textarea></center>
</div>

<div class="frame">
  <center>
  
  <div id="baslik">BU KADAR</div>
 <input name="Bitir" type="submit"  value="BİTİR"/></center>
</div>

</form>
</div>
<div id="Carousel1_back" style="position:absolute;left:4px;bottom:0px;width:30px;height:30px;z-index:999"><a style="cursor:pointer"><img alt="Back" style="border-width:0" src="mizanpaj/gorsel/carousel_back.png"></a></div>
<div id="Carousel1_next" style="position:absolute;right:4px;bottom:0px;width:30px;height:30px;z-index:999"><a style="cursor:pointer"><img alt="Next" style="border-width:0" src="mizanpaj/gorsel/carousel_next.png"></a></div>
</div>  
</div>

<div id="apDiv2"><?php include("mizanpaj/alt.php"); ?></div>

</body>
</html>