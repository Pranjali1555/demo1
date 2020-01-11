<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="JavaScript">
var seconds=60;
function secondPassed(){
	var minutes = Math.round((seconds-30)/60);
	var remainingSeconds =seconds% 60;
	if (remainingSeconds<10){
		remainingSeconds="0"+remainingSeconds;
	}
	document.getElementById('countdown').innerHTML=minutes+":"+remainingSeconds;
	if (seconds==0){
		clearInterval(countdownTimer);
		document.getElementById('countdown').innerHTML=parent.location='result1.php';
	}else{
		seconds--;
	}
}
var countdownTimer=setInterval('secondPassed()',1000);
</script>
</head>

<body>
<body  background="file\IMG_186809.jpg" text="#FFFFFF">
<H1><center><b><u>Computer Fundamentals</u></b></h1></center>
<h1>
<div  id="countdown" align="right"></div></h1>
<i><b><h2>
<form action="computerfundamentals.php" method="post">
<p>1.UNIVAC is? </p>
<input type="radio"name="ans1" value="a">Universal Automatic Computer</input><br/>
<input type="radio" name="ans1" value="b">Universal Array Computer</input><br/>
<input type="radio" name="ans1" value="c">Unique Automatic Computer</input><br/>
<input type="radio" name="ans1" value="d"> Unvalued Automatic Computer</input><br/>

<p>2.The basic operations performed by a computer are? </p><br/>
<input type="radio" name="ans2" value="a">Arithmetic operation</input><br/>
<input type="radio"  name="ans2" value="b"> Logical operation</input><br/>
<input type="radio"  name="ans2" value="c">Storage and relative</input><br/>
<input type="radio"  name="ans2" value="d"> All the above</input><br/>


<p>3.The two major types of computer chips are?</p>
<input type="radio" name="ans3" value="a">External memory chip</input><br/>
<input type="radio" name="ans3" value="b">Primary memory chip</input><br/>
<input type="radio"  name="ans3" value="c">Microprocessor chip</input><br/>
<input type="radio" name="ans3" value="d">Both b and c</input><br/>


<p>4.Microprocessors as switching devices are for which generation computers</p>
<input type="radio" name="ans4" value="a"></input>First Generation<br/>
<input type="radio" name="ans4" value="b"></input>Second Generation<br/>
<input type="radio" name="ans4" value="c">Third Generation</input><br/>
<input type="radio" name="ans4" value="d">Fourth Generation</input><br/>


<p>5. What is the main difference between a mainframe and a super computer?</p>
<input type="radio"  name="ans5" value="a">Super computer is much larger than mainframe computers</input><br/>
<input type="radio"  name="ans5" value="b">Super computers are much smaller than mainframe computers</input><br/>
<input type="radio"  name="ans5" value="c">Supercomputers are focused to execute few programs as fast as possible while mainframe uses its power to execute as many programs concurrently</input><br/>
<input type="radio"  name="ans5" value="d">Supercomputers are focused to execute as many programs as possible while mainframe uses its power to execute few programs as fast as possible.</input><br/>


<p>6. ASCII and EBCDIC are the popular character coding systems. What does EBCDIC stand for?</p>
<input type="radio"  name="ans6" value="a">Extended Binary Coded Decimal Interchange Code</input><br/>
<input type="radio" name="ans6" value="b">Extended Bit Code Decimal Interchange Code</input><br/>
<input type="radio" name="ans6" value="c">Extended Bit Case Decimal Interchange Code</input><br/>
<input type="radio" name="ans6" value="d">Extended Binary Case Decimal Interchange Code</input><br/>


<p>7. The brain of any computer system is</p>
<input type="radio"  name="ans7" value="a">ALU</input><br/>
<input type="radio"  name="ans7" value="b">Memory</input><br/>
<input type="radio" name="ans7" value="c">CPU</input><br/>
<input type="radio"  name="ans7" value="d">control unit</input><br/>


<p>8. Storage capacity of magnetic disk depends on</p>
<input type="radio"  name="ans8" value="a">tracks per inch of surface</input><br/>
<input type="radio"  name="ans8" value="b">bits per inch of tracks</input><br/>
<input type="radio"  name="ans8" value="c">disk pack in disk surface</input><br/>
<input type="radio"  name="ans8" value="d">All of above</input><br/>


<p>9. The two kinds of main memory are:</p>
<input type="radio"  name="ans9" value="a">Primary and secondary</input><br/>
<input type="radio"  name="ans9" value="b">Random and sequential</input><br/>
<input type="radio"  name="ans9" value="c">ROM and RAM</input><br/>
<input type="radio"  name="ans9" value="d">All of above</input><br/>



<p>10. Computer is free from tiresome and boardoom. We call it</p>
<input type="radio" name="ans10" value="a">Accuracy<br/>
<input type="radio"  name="ans10" value="b"> Reliability<br/>
<input type="radio"  name="ans10" value="c">Diligence<br/>
<input type="radio"  name="ans10" value="d">Versatility<br/>
<input type="submit" onClick=window.open("result1.php") name="submit" value="submit" style="color:white;padding:10px 30px;border:none; background-color:#9a9a9a;margin-left:30%;"/>		
<br/><br/>
</form>
</h2></b></i>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit']))
{
$count=0;	
if($_POST['ans1']=='a')/* here qutions are cheaked */	
{
$count=$count+1;		
}	

if($_POST['ans2']=='d')	
{
$count=$count+1;	
	
}	

if($_POST['ans3']=='d')	
{
$count=$count+1;	
	
}	
	
	
if($_POST['ans4']=='d')/* here qutions are cheaked */	
{
$count=$count+1;	
	
}	


if($_POST['ans5']=='c')	
{
$count=$count+1;	
	
}	

if($_POST['ans6']=='a')	
{
$count=$count+1;	
	
}	
	


if($_POST['ans7']=='c')/* here qutions are cheaked */	
{
$count=$count+1;	
	
}	


if($_POST['ans8']=='d')	
{
$count=$count+1;	
	
}	

if($_POST['ans9']=='c')	
{
$count=$count+1;	
	
}	
	
if($_POST['ans10']=='c')	
{
$count=$count+1;	
	
}	
		
	

echo"</br>your score is". $count."/10<br/><br/>";
$_SESSION['correct']="$count";	
}
?>




