<?php

		  header("Content-Type: text/html; charset=UTF-8");
		  include("../config/Mysql.php");
		  session_start();
		
		//Global Degiskenler
		
		$_SESSION["dogru"]=0;
		$_SESSION["yanlis"]=0;
		$_SESSION["bos"]=0;
		
		 $i = 1;
        while ($i <= $_SESSION["soruSayisi"]) {

         $soruNo = $_POST['soruNo'.$i];

            $cevap = $db->query("SELECT answer FROM questions WHERE question_id = '{$soruNo}'")->fetch(PDO::FETCH_ASSOC);



            if (@$_POST['soru' . $soruNo] == '') {
				$_SESSION["bos"]+=1;
            } else if (@$_POST['soru' . $soruNo] == $cevap['answer']) {
                $_SESSION["dogru"]+=1;
            } else if (@$_POST['soru' . $soruNo]!= $cevap['answer']) {
               $_SESSION["yanlis"]+=1;
            }



            $i++;
        }
		
		
		$_SESSION["puan"]=0;
		
		$_SESSION["puan"] = $_SESSION["dogru"]*2;
		
		
		$query = $db->prepare("UPDATE users SET
		
		trueNumber = :trueNumber,
		falseNumber = :falseNumber,
		spaceNumber = :spaceNumber,
		point=:point
		WHERE user_id = :userId");
		
		$sinavKaydet = $query->execute(array(
		
			 "trueNumber" 		=>  	$_SESSION["dogru"] ,
			 "spaceNumber" 		=> 		$_SESSION["bos"],
			 "falseNumber" 		=> 		$_SESSION["yanlis"],
			 "userId" 			=>      $_SESSION["kullaniciID"],
			 "point"			=>      $_SESSION["puan"]
			 
		));
		
		

  if ($sinavKaydet) {
           
			echo "<script type=\"text/javascript\">window.location=\"../views/sonuc.php\"; </script>";
        } 
		
		else {
        
			echo "İŞLEM HATASI";
        
		}
		
?>