<?php 
session_start();
ob_start();

if(isset($_SESSION["giris"]))
{
echo str_repeat("<br>", 8)."<center><img src=images/yukleniyor.gif border=0 />Önce Çıkış Yapmalısınız.</center>";
header("Refresh: 2; url= main.php");
return;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="mizanpaj/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Yeni Kullanıcı</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->

</head>
 
<body>
	<div class="main">
		<div class="user">
			<img src="mizanpaj/gorsel/user.png" alt="">
		</div>
		<div class="login">
			<div class="inset">
				<!-----start-main---->
				<form name="uye_form" method="post" action="uyelik.php" >
			         <div>
						<span><label>Kullanıcı Adı*</label></span>
						<span><input type="text" class="textbox"name="kullanici_adi"></span>
					 </div>
					 <div>
						<span><label>Parola*</label></span>
					    <span><input type="password" class="password" name="parola" ></span><span><label>Parola Tekrar*</label></span>
					    <span><input type="password" class="password" name="parolatekrar" ></span>
<span><label>E-mail*</label></span>
						<span><input type="text" class="textbox" name="eposta" ></span>

					 </div>
					<div class="sign">
						<div class="submit">
						  <input type="submit" name="button"  value="Kayıt Ol" >
						</div>
						
							<div class="clear"> </div>
					</div>
					</form>
				</div>
			</div>
		<!-----//end-main---->
		</div>
		 <!-----start-copyright---->
   					<div class="copy-right">
						<p>htsis</a></p> 
					</div>
				<!-----//end-copyright---->
	 
</body>
</html>


<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{

include("baglanti.php");

$kullanici_adi = $_POST["kullanici_adi"];
$parola = $_POST["parola"];
$parolatekrar = $_POST["parolatekrar"];
$eposta = $_POST["eposta"];
$button = $_POST["button"];
$tarih = date("y-m-d");


if($kullanici_adi=="" or $parola=="" or $parolatekrar=="" or $eposta=="")
{
	echo "<center><img src=images/hata.gif border=0 /> Lütfen tüm alanları eksiksiz doldurun!</center>";
	header("Refresh: 2; url=uyelik.php");
	return;
}
elseif($parola != $parolatekrar)
{
	echo "<center><img src=images/hata.gif border=0 /> Parola ve Parola Tekrar alanları ayný olmalı!</center>";
	header("Refresh: 2; url=uyelik.php");
	return;	
}

function checkmail($eposta){
  return filter_var($eposta, FILTER_VALIDATE_EMAIL);
}

if(!checkmail($eposta))
{
	echo "<center><img src=images/hata.gif border=0 /> Yazdığınız e-posta adresi geçersiz!</center>";
	header("Refresh: 2; url=uyelik.php");
	return;	
}

$isim_kontrol = mysql_query("select * from uyeler where kullanici_adi='".$kullanici_adi."'") or die (mysql_error());

$uye_varmi = mysql_num_rows($isim_kontrol);
if($uye_varmi > 0)
{
	echo "<center><img src=images/hata.gif border=0 /> Kullanıcı adı zaten kullanılıyor </center>";
	header("Refresh: 2; url=uyelik.php");
	return;		
}

$eposta_kontrol = mysql_query("select * from uyeler where eposta='".$eposta."'") or die (mysql_error());

$eposta_varmi = mysql_num_rows($eposta_kontrol);
if($eposta_varmi > 0)
{
	echo "<center><img src=images/hata.gif border=0 /> E-mail zaten kullanılıyor !</center>";
	header("Refresh: 2; url=uyelik.php");
	return;		
}

$yenikayit = "INSERT INTO uyeler (kullanici_adi, parola, eposta, tarih)values('".$kullanici_adi."', '".md5(md5($parola))."', '".$eposta."', '$tarih')";

$sorgu = mysql_query($yenikayit);

echo "<center><img src=images/yukleniyor.gif border=0 /> Kayıt işlemi tamamlandı, Giriş sayfasına yönlendiriliyorsunuz.</center>";

header("Refresh: 2; url= giris.php");


mysql_close();
}


ob_end_flush();
?>

</body>
</html>
