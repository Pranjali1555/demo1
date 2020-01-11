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
<H1><center><b><u>IT-Tools & Web designing</u></b></h1></center>
<h1>
<div  id="countdown" align="right"></div></h1>
<i><b><h2>
<form action="ittools1.php" method="post">
<p>1. Awebpage displays a picture. What tag was used to display that picture? </p>
<input type="radio"name="ans1" value="a"> picture</input><br/>
<input type="radio" name="ans1" value="b">image</input><br/>
<input type="radio" name="ans1" value="c">img</input><br/>
<input type="radio" name="ans1" value="d">src </input><br/>

<p> 2. <b> tag makes the enclosed text bold. What is other tag to make text bold?</p><br/>
<input type="radio" name="ans2" value="a">strong</input><br/>
<input type="radio"  name="ans2" value="b">dar</input><br/>
<input type="radio"  name="ans2" value="c">block</input><br/>
<input type="radio"  name="ans2" value="d">emp</input><br/>


<p>3. Tags and test that are not directly displayed on the page are written in _____ section.</p>
<input type="radio" name="ans3" value="a">html</input><br/>
<input type="radio" name="ans3" value="b">head</input><br/>
<input type="radio"  name="ans3" value="c">title</input><br/>
<input type="radio" name="ans3" value="d">body</input><br/>


<p>4. Which tag inserts a line horizontally on your web page?</p>
<input type="radio" name="ans4" value="a">hr</input><br/>
<input type="radio" name="ans4" value="b">line</input><br/>
<input type="radio" name="ans4" value="c">line direction="horizontal"</input><br/>
<input type="radio" name="ans4" value="d">tr</input><br/>


<p>5. What should be the first tag in any HTML document?</p>
<input type="radio"  name="ans5" value="a">html</input><br/>
<input type="radio"  name="ans5" value="b">head</input><br/>
<input type="radio"  name="ans5" value="c">title</input><br/>
<input type="radio"  name="ans5" value="d">body</input><br/>


<p>6. Which tag allows you to add a row in a table?</p>
<input type="radio"  name="ans6" value="a">th</input><br/>
<input type="radio" name="ans6" value="b">tr</input><br/>
<input type="radio" name="ans6" value="c">td</input><br/>
<input type="radio" name="ans6" value="d">cr</input><br/>


<p>7. How can you make a bulleted list?</p>
<input type="radio"  name="ans7" value="a">ol</input><br/>
<input type="radio"  name="ans7" value="b">ul</input><br/>
<input type="radio" name="ans7" value="c">dd</input><br/>
<input type="radio"  name="ans7" value="d">li</input><br/>


<p>8. How can you make a numbered list?</p>
<input type="radio"  name="ans8" value="a">ul</input><br/>
<input type="radio"  name="ans8" value="b">ol</input><br/>
<input type="radio"  name="ans8" value="c">li</input><br/>
<input type="radio"  name="ans8" value="d">dd</input><br/>


<p>9. How can you make an e-mail link?</p>
<input type="radio"  name="ans9" value="a">a href="xxx@yyy"</input><br/>
<input type="radio"  name="ans9" value="b">mail href="xxx@yyy"</input><br/>
<input type="radio"  name="ans9" value="c">mail xxx@yyy /mail</input><br/>
<input type="radio"  name="ans9" value="d">a href="mailto:xxx@yyy"</input><br/>



<p>10. What is the correct HTML for making a hyperlink?</p>
<input type="radio" name="ans10" value="a">a href="http:// mcqsets.com">ICT Trends Quiz<br/>
<input type="radio"  name="ans10" value="b">a name="http://mcqsets.com">ICT Trends Quiz<br/>
<input type="radio"  name="ans10" value="c">http://mcqsets.com<br/>
<input type="radio"  name="ans10" value="d">ICT Trends Quiz<br/>
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
if($_POST['ans1']=='c')/* here qutions are cheaked */	
{
$count=$count+1;		
}	

if($_POST['ans2']=='a')	
{
$count=$count+1;	
	
}	

if($_POST['ans3']=='b')	
{
$count=$count+1;	
	
}	
	
	
if($_POST['ans4']=='a')/* here qutions are cheaked */	
{
$count=$count+1;	
	
}	


if($_POST['ans5']=='a')	
{
$count=$count+1;	
	
}	

if($_POST['ans6']=='b')	
{
$count=$count+1;	
	
}	
	


if($_POST['ans7']=='b')/* here qutions are cheaked */	
{
$count=$count+1;	
	
}	


if($_POST['ans8']=='b')	
{
$count=$count+1;	
	
}	

if($_POST['ans9']=='d')	
{
$count=$count+1;	
	
}	
	
if($_POST['ans10']=='a')	
{
$count=$count+1;	
	
}	
		
	

echo"</br>your score is". $count."/10<br/><br/>";
$_SESSION['correct']="$count";	
}
?>






