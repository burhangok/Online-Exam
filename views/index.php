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
               
                <a class="navbar-brand" href="#">Online Deneme Sınavı</a>
            </div>
           
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="animated fadeInDown">Sınava Başla</h1>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section class="container">
	<div class="center">
	<div class="center">
        <form action="../controllers/Giris.php" method="POST">
      <div class="form-group has-feedback">
        <input type="text" name="adsoyad" class="form-control" placeholder="Adınız ve Soyadınız" autofocus required>
       
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="E-Mail Adresiniz" required>
       
      </div>
      <div class="row">
       
        <!-- /.col -->
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Başla</button>
        </div>
        <!-- /.col -->

      </div>
    </form>
	</div></div>
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

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>