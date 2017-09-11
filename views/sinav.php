<?php
 header("Content-Type: text/html; charset=UTF-8");
 include("../config/Mysql.php");
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Online Sınav</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                
                 <a class="navbar-brand" href="anasayfa">Online Deneme Sınavı</a>
            </div>
            <div class="collapse navbar-collapse mn2">
                <ul class="nav navbar-brand nav navbar-right">
                   
					
					<p id ="countdown1" style="color:black;">Süre</p>
                </ul>
            </div>
        </div>
    </header><!--/header-->

	
	<?php
	//Soru ve süre bilgileri
	$query1 = $db->query("SELECT * FROM questions");
	$_SESSION["soruSayisi"]=$query1->rowCount();
	//Soru ve süre bilgileri
	?>
	
    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="animated fadeInDown"><?=$_SESSION["soruSayisi"]?> Soru, 60 Dakika <h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="faqs" class="container">
		
	
		<form action="../controllers/Sinav.php" method="POST">
		
		<?php 
		
		$i=1;
		
		$queryKategori= $db->query("SELECT * FROM categories");
		
	if ( $queryKategori->rowCount() ){
		
		
		 foreach( $queryKategori as $satirKategori){
			
			 ?>
			 
			 
			 
		<h3><?=$satirKategori['name']?></h3>
		<hr/>
        <ul class="faq unstyled">
		
		<?php
			
		$kategoriId=$satirKategori['category_id'];
		$querySoru = $db->query("SELECT * FROM questions WHERE category_id = '{$kategoriId}'  ORDER BY RAND()");
		

	if ( $querySoru->rowCount() ){
		 foreach( $querySoru as $satirSoru ){
			?>
				<li>
					<span class="number"><?=$i?></span>
					<div>
						<p><?=$satirSoru['text']?></p><br/>
						<p><input type="radio" name="soru<?=$satirSoru['question_id']?>" value="A"> A) <?=$satirSoru['option1']?></p><br/>
						<p><input type="radio" name="soru<?=$satirSoru['question_id']?>" value="B"> B) <?=$satirSoru['option2']?></p><br/>
						<p><input type="radio" name="soru<?=$satirSoru['question_id']?>" value="C"> C) <?=$satirSoru['option3']?></p><br/>
						<p><input type="radio" name="soru<?=$satirSoru['question_id']?>" value="D"> D) <?=$satirSoru['option4']?></p><br/>
						<input type="text" style="visibility:hidden;"  name ="soruNo<?=$i?>" value="<?=$satirSoru['question_id']?>"/>
		
				  </div>
				</li>
				<?php   $i++;   }
	}
		 ?>	
		 <?php  }
	}
		 ?>	
	 	
	 
	 
        <div class="col-md-12">
          <button type="submit" class="btn btn-success btn-block btn-flat">SONUÇLARI GÖR</button>
        </div>
        <!-- /.col -->
			</form>
        </ul>
		
    </section><!--#faqs-->
	
    

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 Burhan GÖK. Bu sitenin tüm hakları saklıdır.
                </div>
              
			  
            </div>
        </div>
    </footer><!--/#footer-->
 <script>

var timeInMinutes = 60;
var currentTime = Date.parse(new Date());
var deadline = new Date(currentTime + timeInMinutes*60*1000);
var countdownfunction = setInterval(function() {

     var now = new Date().getTime();
    
    var distance = deadline - now;
    
    
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  
    document.getElementById("countdown1").innerHTML = minutes + " Dakika " + seconds + " Saniye Kaldı ";
    
    if (distance < 0) {
        clearInterval(countdownfunction);
        alert("MALESEF SÜRENİZ DOLDU !");
		window.location="sonuc.php";
    }
}, 10);
</script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>