<?php

	 header("Content-Type: text/html; charset=UTF-8");
	 session_start();



    $email = "bqbsoft@gmail.com"; 

    $email_from = $email;
    $email_to = @$_SESSION["eMail"];

	
    $body = "Merhaba " . $_SESSION["adSoyad"] . "\n\n" . "Deneme Sınavında ".$_SESSION["dogru"]." Doğru, ".$_SESSION["yanlis"]." Yanlış ve "
	.$_SESSION["bos"]." Boş Soru Cevapladınız.";

    $success = @mail($email_to, "Online Deneme Sinavi", $body, 'From: <'.$email_from.'>');

    echo "<script type=\"text/javascript\">alert(\"Mail Gönderildi.\");window.location=\"../views\"; </script>";
	
