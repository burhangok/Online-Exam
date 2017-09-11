<?php

	
		session_start();
	

		session_unset(); 


		session_destroy(); 
		
		$mesaj = "Güvenli Çıkış Yapıldı.";
		
		echo "<script type=\"text/javascript\">alert('$mesaj'); window.location=\"../login.php\"; </script>";
				
?>