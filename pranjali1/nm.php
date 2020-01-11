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
<H1><center><b><u>Numerical computation method</u></b></h1></center>
<h1>
<div  id="countdown" align="right"></div></h1>
<i><b><h2>
<form action="nm.php" method="post">
<p> 1.In which of the following method, we approximate the curve of solution by the tangent in each interval.</p>
<input type="radio"name="ans1" value="a">Picard’s method</input><br/>
<input type="radio" name="ans1" value="b">Euler’s method</input><br/>
<input type="radio" name="ans1" value="c">Newton’s method</input><br/>
<input type="radio" name="ans1" value="d">Runge Kutta method</input><br/>

<p>2.Jacobi’s method is also known as </p><br/>
<input type="radio" name="ans2" value="a">Displacement method</input><br/>
<input type="radio"  name="ans2" value="b">Simultaneous displacement method</input><br/>
<input type="radio"  name="ans2" value="c">Simultaneous method</input><br/>
<input type="radio"  name="ans2" value="d">Diagonal method</input><br/>


<p>3.The number of significant digits in the number 204.020050 is</p>
<input type="radio" name="ans3" value="a">5</input><br/>
<input type="radio" name="ans3" value="b">6</input><br/>
<input type="radio"  name="ans3" value="c">8</input><br/>
<input type="radio" name="ans3" value="d">9</input><br/>


<p>4.In general the ratio of truncation error to that of round off error is</p>
<input type="radio" name="ans4" value="a">2:1</input><br/>
<input type="radio" name="ans4" value="b">1:1</input><br/>
<input type="radio" name="ans4" value="c">1:2</input><br/>
<input type="radio" name="ans4" value="d">2:2</input><br/>


<p>5.The convergence of which of the following method is sensitive to starting value?</p>
<input type="radio"  name="ans5" value="a">False position</input><br/>
<input type="radio"  name="ans5" value="b">Gauss seidal method</input><br/>
<input type="radio"  name="ans5" value="c">Newton-Raphson method</input><br/>
<input type="radio"  name="ans5" value="d">All of these</input><br/>


<p>6.To perform a Chi-square test</p>
<input type="radio"  name="ans6" value="a">Data conform to a normal distribution</input><br/>
<input type="radio" name="ans6" value="b">Data be measured on a nominal scale</input><br/>
<input type="radio" name="ans6" value="c">Each cell has equal number of frequencie</input><br/>
<input type="radio" name="ans6" value="d">All of these</input><br/>


<p>7.In the Gauss elimination method for solving a system of linear algebraic equations, triangularzation leads to</p>
<input type="radio"  name="ans7" value="a">Diagonal matrix</input><br/>
<input type="radio"  name="ans7" value="b">Lower triangular matrix</input><br/>
<input type="radio" name="ans7" value="c">Upper triangular matrix</input><br/>
<input type="radio"  name="ans7" value="d">Singular matrix</input><br/>


<p>8.Order of convergence of Regula-Falsi method is</p>
<input type="radio"  name="ans8" value="a">1.321</input><br/>
<input type="radio"  name="ans8" value="b">1.618</input><br/>
<input type="radio"  name="ans8" value="c">2.231</input><br/>
<input type="radio"  name="ans8" value="d">2.312</input><br/>


<p>9.The expected value of the random variable</p>
<input type="radio"  name="ans9" value="a">Will also be the most likely value of the random variable</input><br/>
<input type="radio"  name="ans9" value="b">Is another term for the mean value</input><br/>
<input type="radio"  name="ans9" value="c">Is also called the variance</input><br/>
<input type="radio"  name="ans9" value="d">Cannot be greater than 1</input><br/>



<p>10.The expected value of the random variable</p>
<input type="radio" name="ans10" value="a">Will also be the most likely value of the random variable<br/>
<input type="radio"  name="ans10" value="b">Is another term for the mean value<br/>
<input type="radio"  name="ans10" value="c">Is also called the variance<br/>
<input type="radio"  name="ans10" value="d">Cannot be greater than 1<br/>
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
if($_POST['ans1']=='b')/* here qutions are cheaked */	
{
$count=$count+1;		
}	

if($_POST['ans2']=='b')	
{
$count=$count+1;	
	
}	

if($_POST['ans3']=='d')	
{
$count=$count+1;	
	
}	
	
	
if($_POST['ans4']=='a')/* here qutions are cheaked */	
{
$count=$count+1;	
	
}	


if($_POST['ans5']=='c')	
{
$count=$count+1;	
	
}	

if($_POST['ans6']=='d')	
{
$count=$count+1;	
	
}	
	


if($_POST['ans7']=='c')/* here qutions are cheaked */	
{
$count=$count+1;	
	
}	


if($_POST['ans8']=='b')	
{
$count=$count+1;	
	
}	

if($_POST['ans9']=='b')	
{
$count=$count+1;	
	
}	
	
if($_POST['ans10']=='b')	
{
$count=$count+1;	
	
}	
		
	

echo"</br>your score is". $count."/10<br/><br/>";
$_SESSION['correct']="$count";	
}
?>













