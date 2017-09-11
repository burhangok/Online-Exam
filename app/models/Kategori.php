<?php

header("Content-Type: text/html; charset=UTF-8");
include ("../system/Database.php");
session_start();
/**
 * Description of Kategori
 *
 * @author burhangok
 */
class Kategori {
   
   
    function yeni($ad) {
		
		include ("../system/Database.php");
	
		$sql = $db->prepare("INSERT INTO categories SET name = :kategoriAdi");
	
		$islem = $sql->execute(array(
		  "kategoriAdi" => $ad
		  
		));
	
		if($islem) return 1;
				else return 0;
   
		}
		
		
		function sil($kategoriId) {
			
			include ("../system/Database.php");
			
			$sql = $db->prepare("DELETE FROM categories WHERE category_id = :kategoriId");
			
			$islem = $sql->execute(array(
			   'kategoriId' => $kategoriId
			));
			
			if($islem) return 1; else return 0;
			
		}
    
   
   
}


 


