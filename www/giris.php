<?php 
session_start();
ob_start();

if(isset($_SESSION["giris"]))
{
echo str_repeat("<br>", 8)."<center><img src=images/yukleniyor.gif border=0 />Zaten giriş yapılmış.</center>";
header("Refresh: 2; url= main.php");
return;
}?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="mizanpaj/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<form name="giris_form" method="post" action="denetim.php">
			         <div>
						<span><label>Kullanıcı Adı</label></span>
						<span><input type="text" class="textbox"name="kullanici_adi"></span>
					 </div>
					 <div>
						<span><label>Parola</label></span>
					    <span><input type="password" class="password" name="parola"></span>
					 </div>
					<div class="sign">
						<div class="submit">
						  <input type="submit"  value="Giriş Yap" >
						</div>
						<span class="forget-pass">
							<a href="uyelik.php">Kayıt ol</a>
						</span>
							<div class="clear"> </div>
					</div>
					</form>
				</div>
			</div>
		<!-----//end-main---->
		</div>
		 <!-----start-copyright---->
   					<div class="copy-right">
						<p><font color="blue">-----</font></a></p> 
					</div>
				<!-----//end-copyright---->
	 
</body>
</html>
