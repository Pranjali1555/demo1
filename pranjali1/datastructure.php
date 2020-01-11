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
<H1><center><b><u>Data structure</u></b></h1></center>
<h1>
<div  id="countdown" align="right"></div></h1>
<i><b><h2>
<form action="datastructure.php" method="post">
<p>1. Which one of the following permutations can be obtained the output using stack assuming that the input is the sequence 1,2,3,4,5 in that order ?</p>
<input type="radio"name="ans1" value="a">3,4,5,1,2</input><br/>
<input type="radio" name="ans1" value="b">3,4,5,2,1</input><br/>
<input type="radio" name="ans1" value="c">1,5,2,3,4</input><br/>
<input type="radio" name="ans1" value="d">5,4,3,1,2 </input><br/>

<p> 2. The initial configuration of the queue is a,b,c,d (a is the front end). To get the configuration d,c,b,a one needs a minimum of ?</p><br/>
<input type="radio" name="ans2" value="a">2 deletions and 3 additions</input><br/>
<input type="radio"  name="ans2" value="b">3 additions and 2 deletions</input><br/>
<input type="radio"  name="ans2" value="c">3 deletions and 3 additions</input><br/>
<input type="radio"  name="ans2" value="d">3 deletions and 4 additions</input><br/>


<p>3. Linked list are not suitable data structure of which one of the following problems ?</p>
<input type="radio" name="ans3" value="a"> Insertion sort</input><br/>
<input type="radio" name="ans3" value="b">Binary search</input><br/>
<input type="radio"  name="ans3" value="c">Radix sort</input><br/>
<input type="radio" name="ans3" value="d">Polynomial manipulation</input><br/>


<p>4. The number of possible ordered trees with three nodes A,B,C is?</p>
<input type="radio" name="ans4" value="a">16</input><br/>
<input type="radio" name="ans4" value="b">12</input><br/>
<input type="radio" name="ans4" value="c">6</input><br/>
<input type="radio" name="ans4" value="d">10</input><br/>


<p>5. Which of the following algorithm design technique is used in the quick sort algorithm?</p>
<input type="radio"  name="ans5" value="a">Dynamic programming</input><br/>
<input type="radio"  name="ans5" value="b">Backtracking</input><br/>
<input type="radio"  name="ans5" value="c">Divide and conquer</input><br/>
<input type="radio"  name="ans5" value="d">Greedy method</input><br/>


<p>6. The number of swapping needed to sort numbers 8,22,7,9,31,19,5,13 in ascending order using bubble sort is ?</p>
<input type="radio"  name="ans6" value="a">11</input><br/>
<input type="radio" name="ans6" value="b">12</input><br/>
<input type="radio" name="ans6" value="c">13</input><br/>
<input type="radio" name="ans6" value="d">14</input><br/>


<p>7. Which of the following statement is true ?</p>
<input type="radio"  name="ans7" value="a">Optimal binary search tree construction can be performed efficiently using dynamic programming</input><br/>
<input type="radio"  name="ans7" value="b">Breath first search cannot be used to find converted components of a graph.</input><br/>
<input type="radio" name="ans7" value="c">Given the prefix and post fix walks over a binary tree.The binary tree cannot be uniquely constructe</input><br/>
<input type="radio"  name="ans7" value="d">Depth first search can be used to find connected components of a graph.</input><br/>


<p>8. Given two sorted lists of size m and n respectively.The number of comparisons needed in the worst case by the merge sort algorithm will be?</p>
<input type="radio"  name="ans8" value="a">mn</input><br/>
<input type="radio"  name="ans8" value="b">max(m,n)</input><br/>
<input type="radio"  name="ans8" value="c">min(m,n)</input><br/>
<input type="radio"  name="ans8" value="d">m+n-1</input><br/>


<p>9. Merge sort uses ?</p>
<input type="radio"  name="ans9" value="a">Divide and conquer strategy</input><br/>
<input type="radio"  name="ans9" value="b">Backtracking approach</input><br/>
<input type="radio"  name="ans9" value="c">Heuristic search</input><br/>
<input type="radio"  name="ans9" value="d">Greedy approach</input><br/>



<p>10. The following sequence of operation is performed on stack : push(1),push(2),pop,push(1),push(2),pop,pop,pop,push(2),pop. The sequence of popped out values are ?</p>
<input type="radio" name="ans10" value="a">2,2,1,1,2<br/>
<input type="radio"  name="ans10" value="b">2,2,1,2,2<br/>
<input type="radio"  name="ans10" value="c">2,1,2,2,1<br/>
<input type="radio"  name="ans10" value="d">2,1,2,2,2<br/>
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

if($_POST['ans2']=='c')	
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


if($_POST['ans5']=='c')	
{
$count=$count+1;	
	
}	

if($_POST['ans6']=='d')	
{
$count=$count+1;	
	
}	
	


if($_POST['ans7']=='a')/* here qutions are cheaked */	
{
$count=$count+1;	
	
}	


if($_POST['ans8']=='d')	
{
$count=$count+1;	
	
}	

if($_POST['ans9']=='a')	
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







