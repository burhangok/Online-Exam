<?php

		 header("Content-Type: text/html; charset=UTF-8");
		 
		 session_start();
		
		//Global Degiskenler
		
		$_SESSION["dogru"]=0;
		$_SESSION["yanlis"]=0;
		$_SESSION["bos"]=0;
		
		
		echo $_POST['soru1'];
	
?>