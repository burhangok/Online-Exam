<?php

header("Content-Type: text/html; charset=UTF-8");
include ("../system/Database.php");
session_start();
/**
 * Description of Soru
 *
 * @author burhangok
 */
class Soru {
   
    function yeni($kategori,$soru,$a,$b,$c,$d,$cevap) {
		
      include ("../system/Database.php");
	
	$sql = $db->prepare("INSERT INTO questions 
		SET category_id = :kategori,
			text = :soru,
			option1 = :a,
			option2 = :b,
			option3 = :c,
			option4 = :d,
			answer = :cevap
		");
	
		$islem = $sql->execute(array(
									  "kategori" => $kategori,
									  "soru" => $soru,
									  "a" => $a,
									  "b" => $b,
									   "c" => $c,
									  "d" => $d,
									  "cevap" => $cevap
		  
		));
	
		if($islem) return 1; else return 0;
   
		}
		
		function sil($soruId) {
			
			include ("../system/Database.php");
			
			$sql = $db->prepare("DELETE FROM questions WHERE question_id = :soruId");
			
			$islem = $sql->execute(array(
			   'soruId' => $soruId
			));
			
			if($islem) return 1; else return 0;
			
		}
    
}
