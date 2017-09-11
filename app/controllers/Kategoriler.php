<?php

header("Content-Type: text/html; charset=UTF-8");
include ("../models/Kategori.php");


/**
 * Description of Kategoriler
 *
 * @author burhangok
 */
class Kategoriler {



    function ekle($ad) {
		 $modelKategori = new Kategori();
		 $sonuc = $modelKategori->yeni($ad);
		  if ($sonuc == 1) {
           
			echo "<script type=\"text/javascript\">alert(\"Kategori Başarıyla Eklendi.\");window.location=\"../views/kategoriler.php\"; </script>";
        } 
		
		else if ($sonuc == 0) {
        
			echo "<script type=\"text/javascript\">alert(\"Kategori Eklenemedi.\");window.location=\"../views/kategoriler.php\"; </script>";
       
        
		}
    }

    function duzenle() {
        echo "duzenle";
    }

    function sil($kategoriId) {
       
	    $modelKategori = new Kategori();
	   $sonuc = $modelKategori->sil($kategoriId);
		 
		  if ($sonuc == 1) {
           
			echo "<script type=\"text/javascript\">alert(\"Kategori Başarıyla Silindi.\");window.location=\"../views/kategoriler.php\"; </script>";
        } 
		
		else if ($sonuc == 0) {
        
			echo "<script type=\"text/javascript\">alert(\"Kategori Silinemedi !\");window.location=\"../views/kategoriler.php\"; </script>";
       
        
		}
	   
	   
    }
    
    

}


                    $kategori = new Kategoriler();
                   
                    $islem = @$_POST['islem'];
					$silinecekkategoriId = @$_GET['kategori_id'];
					
				    
					if($islem === "KAYDET") 
                        
                    {
                        
                        $kategori->ekle(@$_POST['kategoriAdi']);
                    
                        
                    }
                    
                    else if($islem === "DÜZENLE") 
                        
                    {
                        
                        $kategori->duzenle();
                    
                        
                    }
                    
                    else  if($islem === "Sil") 
                        
                    {
                        
                        $kategori->sil($silinecekkategoriId);
                    
                        
                    }
                  
