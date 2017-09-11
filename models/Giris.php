<?php

 header("Content-Type: text/html; charset=UTF-8");
 include("../config/Mysql.php");
 session_start();

class Giris {


    function kullaniciKayit($adSoyad,$eMail) {

         include("../config/Mysql.php");
		 
		 
		 $_SESSION["kullaniciID"]=null;
	$query = $db->prepare("INSERT INTO users SET
	name = ?,
	email = ?");
	$newUser = $query->execute(array(
		 $adSoyad, $eMail
	));
		if ( $newUser ){
		$_SESSION["kullaniciID"] = $db->lastInsertId();
		$cevap=1;
	}
	
	else {
		$cevap=0;
	}
        
			

        return $cevap;
    }

    

}
?>