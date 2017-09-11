<?php 

	header("Content-Type: text/html; charset=UTF-8");
	session_start();
	 
	$kullaniciAdi 		= 	@$_POST['kullaniciAdi'];
	$kullaniciSifresi 	= 	@$_POST['kullaniciSifresi'];
		
	
	$_SESSION["girisKontrol"]="0";
	
	if($kullaniciAdi == "bqb") {
		
		if($kullaniciSifresi=="bqb") {
			
			$_SESSION["girisKontrol"]="1";
			header('Location:../views/anasayfa.php');
		}
		
			else {
				
				echo "<script type=\"text/javascript\">alert(\"Şifre Hatalı.\");window.location=\"../\"; </script>";
		}
	}
	
			else {
			 echo "<script type=\"text/javascript\">alert(\"Kullanıcı Adı Hatalı.\");window.location=\"../\"; </script>";
		}
		
		
?>

