<?php

header("Content-Type: text/html; charset=UTF-8");
include ("../models/Soru.php");


/**
 * Description of Sorular
 *
 * @author burhangok
 */
class Sorular {

    function ekle($kategori,$soru,$a,$b,$c,$d,$cevap) {
			
		 $modelSoru = new Soru();
		 
		 $sonuc = $modelSoru->yeni($kategori,$soru,$a,$b,$c,$d,$cevap);
		 
		  if ($sonuc == 1) {
           
			echo "<script type=\"text/javascript\">alert(\"Yeni Soru Başarıyla Eklendi.\");window.location=\"../views/sorular.php\"; </script>";
        } 
		
		else if ($sonuc == 0) {
        
			echo "<script type=\"text/javascript\">alert(\"Soru Eklenemedi.\");window.location=\"../views/sorular.php\"; </script>";
       
        
		}
    }

    function guncelle() {
        echo "guncelle";
    }

    function sil($soruId) {
       
	    $modelSoru = new Soru();
		 
		 $sonuc = $modelSoru->sil($soruId);
		 
		  if ($sonuc == 1) {
           
			echo "<script type=\"text/javascript\">alert(\"Soru Başarıyla Silindi.\");window.location=\"../views/sorular.php\"; </script>";
        } 
		
		else if ($sonuc == 0) {
        
			echo "<script type=\"text/javascript\">alert(\"Soru Silinemedi !\");window.location=\"../views/sorular.php\"; </script>";
       
        
		}
	   
	   
    }
    
    

}


                    $soru = new Sorular();
                   
                    $islem				=	@$_POST['islem'];
					$silineceksoruId 	= 	@$_GET['soru_id'];
					
					//Bu dosyaya post edilen veriler
					
					$kategori1 		= 	@$_POST['kategori'];
					$soru1			= 	@$_POST['soru'];
					$a1				= 	@$_POST['aSikki'];
					$b1				=	@$_POST['bSikki'];
					$c1 			=	@$_POST['cSikki'];
					$d1 			=	@$_POST['dSikki'];
					$cevap1 		=	@$_POST['cevap'];
					
					//Bu dosyaya post edilen veriler

                    if($islem === "KAYDET") 
                        
                    {
                        
                        $soru->ekle($kategori1,$soru1,$a1,$b1,$c1,$d1,$cevap1);
                    
                        
                    }
                    
                    else if($islem === "GÜNCELLE") 
                        
                    {
                        
                        $soru->guncelle();
                    
                        
                    }
                    
                    else if($islem === "Sil") 
                        
                    {
						
                        $soru->sil($silineceksoruId);
                    
                        
                    }
                  
else { header("location:../views/sorular.php");
}
