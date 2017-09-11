<?php

	 header("Content-Type: text/html; charset=UTF-8");
	 include ("../models/Giris.php");
	 
	
	$ad 		 		= 		@$_POST['adsoyad'];
	$email 		 		= 		@$_POST['email'];
	
	

	$obj			 	= 		new 	Giris();
	$kayit 	 			= 		$obj	->	kullaniciKayit			($ad,$email);

	$_SESSION["adSoyad"] = @$ad;
	$_SESSION["eMail"] = @$email;

	echo "<script type=\"text/javascript\">window.location=\"../views/sinav.php\"; </script>";
	
?>