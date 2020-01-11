<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="JavaScript">
var seconds=300;
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
<body  background="file/88.jpg" text="#FFFFFF" >
<H1><center><b><u>C-language</u></b></h1></center>
<h1>
<div  id="countdown" align="right"></div></h1>
<i><b><h2>
<form action="c_lang.php" method="post">
<p>1. We can insert pre written code in a C program by using</p>
<input type="radio"name="ans1" value="a">#read</input><br/>
<input type="radio" name="ans1" value="b"> #get</input><br/>
<input type="radio" name="ans1" value="c">#include</input><br/>
<input type="radio" name="ans1" value="d"> #put</input><br/>

<p>2. The first expression in a for loop is</p><br/>
<input type="radio" name="ans2" value="a">Step value of loop</input><br/>
<input type="radio"  name="ans2" value="b">Value of the counter variable</input><br/>
<input type="radio"  name="ans2" value="c">Any of above</input><br/>
<input type="radio"  name="ans2" value="d">None of above</input><br/>


<p>3. Break statement is used for</p>
<input type="radio" name="ans3" value="a">Quit a program</input><br/>
<input type="radio" name="ans3" value="b">Quit the current iteration</input><br/>
<input type="radio"  name="ans3" value="c">Both of above</input><br/>
<input type="radio" name="ans3" value="d">None of above</input><br/>


<p>4. Continue statement used for</p>
<input type="radio" name="ans4" value="a">To continue to the next line of code</input><br/>
<input type="radio" name="ans4" value="b">To stop the current iteration and begin the next iteration from the beginning</input><br/>
<input type="radio" name="ans4" value="c">To handle run time error</input><br/>
<input type="radio" name="ans4" value="d">None of above</input><br/>


<p>5. What will be output of<br>
#include<br>
void main()<br>
{<br>
char test =`S`;<br>
printf("\n%c",test);<br>
}</p>
<input type="radio"  name="ans5" value="a">S</input><br/>
<input type="radio"  name="ans5" value="b">error</input><br/>
<input type="radio"  name="ans5" value="c">Garbage value</input><br/>
<input type="radio"  name="ans5" value="d">None of above</input><br/>


<p>6. Due to variable scope in c</p>
<input type="radio"  name="ans6" value="a">Variables created in a function cannot be used another function</input><br/>
<input type="radio" name="ans6" value="b">Variables created in a function can be used in another function</input><br/>
<input type="radio" name="ans6" value="c">Variables created in a function can only be used in the main function</input><br/>
<input type="radio" name="ans6" value="d">None of above</input><br/>


<p>7. What will be the output of following program<br>
#include<br>
main()<br>
{<br>
int x,y = 10;<br>
x = y * NULL;<br>
printf(\"%d\",x);<br>
}</p>
<input type="radio"  name="ans7" value="a">error</input><br/>
<input type="radio"  name="ans7" value="b">0</input><br/>
<input type="radio" name="ans7" value="c">10</input><br/>
<input type="radio"  name="ans7" value="d">Garbage value</input><br/>


<p>8. Difference between calloc() and malloc()</p>
<input type="radio"  name="ans8" value="a">calloc() takes a single argument while malloc() needs two arguments</input><br/>
<input type="radio"  name="ans8" value="b">malloc() takes a single argument while calloc() needs two arguments</input><br/>
<input type="radio"  name="ans8" value="c">malloc() initializes the allocated memory to ZERO</input><br/>
<input type="radio"  name="ans8" value="d">calloc() initializes the allocated memory to NULL</input><br/>


<p>9. Exit() is same as return</p>
<input type="radio"  name="ans9" value="a">TRUE</input><br/>
<input type="radio"  name="ans9" value="b">FALSE</input><br/>
<input type="radio"  name="ans9" value="c">++</input><br/>
<input type="radio"  name="ans9" value="d">getch()</input><br/>



<p>10. calloc() belongs to which library</p>
<input type="radio" name="ans10" value="a">stdlib.h</input><br/>
<input type="radio"  name="ans10" value="b">malloc.h</input><br/>
<input type="radio"  name="ans10" value="c">calloc.h</input><br/>
<input type="radio"  name="ans10" value="d">none of above</input><br/>

<input type="submit" onClick=window.open("result1.php") name="submit"  value="submit" style="color:white;padding:10px 30px;border:none; background-color:#9a9a9a;margin-left:30%;"/>		
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

if($_POST['ans2']=='b')	
{
$count=$count+1;	
	
}	

if($_POST['ans3']=='b')	
{
$count=$count+1;	
	
}	
	
	
if($_POST['ans4']=='b')/* here qutions are cheaked */	
{
$count=$count+1;	
	
}	


if($_POST['ans5']=='a')	
{
$count=$count+1;	
	
}	

if($_POST['ans6']=='a')	
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

if($_POST['ans9']=='b')	
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

