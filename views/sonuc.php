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
<body style="background-color:#D5D8DC;">
 <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="anasayfa">Online Deneme Sınavı</a>
            </div>
           
        </div>
    </header><!--/header-->

    <section id="error" class="container">
        <h1>Sayın <?=@$_SESSION["adSoyad"]?> , <b><?=@$_SESSION["puan"]?> Puan </b> aldınız.</h1><br/>
        <h3>Deneme Sınavında <b><?=@$_SESSION["soruSayisi"]?></b> Sorudan, <b><?=@$_SESSION["dogru"]?></b> Doğru, <b><?=@$_SESSION["yanlis"]?></b> Yanlış ve <b><?=@$_SESSION["bos"]?></b> Boş Soru Cevapladınız.</h3>
        <br/>
		<a class="btn btn-primary" href="sinav.php">TEKRAR SINAVA GİR</a>
		<a class="btn btn-success" href="../controllers/Mail.php">SONUÇLARI MAİLİME GÖNDER</a>
		
    </section><!--/#error-->

	
    

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 Burhan GÖK. Bu sitenin tüm hakları saklıdır.
                </div>
              
			   <!--  <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="anasayfa">Ana Sayfa</a></li>
                        <li><a href="taxitpay">TaxitPay</a></li>
                        <li><a href="bize-ulasin">Bize Ulaşın</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop
                    </ul>
                </div>-->
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>