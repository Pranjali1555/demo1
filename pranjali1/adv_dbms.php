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
<H1><center><b><u>Advanced DBMS</u></b></h1></center>
<h1>
<div  id="countdown" align="right"></div></h1>
<i><b><h2>
<form action="adv_dbms.php" method="post">
<p> 1.The data model which describes how the data is actually stored is :</p>
<input type="radio"name="ans1" value="a">internal model</input><br/>
<input type="radio" name="ans1" value="b">external model</input><br/>
<input type="radio" name="ans1" value="c">logical model</input><br/>
<input type="radio" name="ans1" value="d">none of these </input><br/>

<p> 2. Data about data is normally termed as :</p><br/>
<input type="radio" name="ans2" value="a">directory</input><br/>
<input type="radio"  name="ans2" value="b">data bank</input><br/>
<input type="radio"  name="ans2" value="c">meta data</input><br/>
<input type="radio"  name="ans2" value="d">none of these</input><br/>


<p>3. The scheme for hierarchical database is :</p>
<input type="radio" name="ans3" value="a">a tree</input><br/>
<input type="radio" name="ans3" value="b">a graph</input><br/>
<input type="radio"  name="ans3" value="c">a B-tree</input><br/>
<input type="radio" name="ans3" value="d">none of the above</input><br/>


<p>4 .Which one is an example for network database ?</p>
<input type="radio" name="ans4" value="a">Unify</input><br/>
<input type="radio" name="ans4" value="b">IDMS</input><br/>
<input type="radio" name="ans4" value="c">Ingress</input><br/>
<input type="radio" name="ans4" value="d">none of the above</input><br/>


<p>5. One of the following is a valid record-based data model </p>
<input type="radio"  name="ans5" value="a">Object-oriented model</input><br/>
<input type="radio"  name="ans5" value="b">Relational model</input><br/>
<input type="radio"  name="ans5" value="c">Entity-relationship model</input><br/>
<input type="radio"  name="ans5" value="d">none of the above</input><br/>


<p>6 In an object-oriented model, one object can access data of another object by passing :</p>
<input type="radio"  name="ans6" value="a">Instance variable</input><br/>
<input type="radio" name="ans6" value="b">Message</input><br/>
<input type="radio" name="ans6" value="c">variable</input><br/>
<input type="radio" name="ans6" value="d">none of the above</input><br/>


<p>7 .SET concept is used in :</p>
<input type="radio"  name="ans7" value="a">Network model</input><br/>
<input type="radio"  name="ans7" value="b">Hierarchical model</input><br/>
<input type="radio" name="ans7" value="c">Relational model</input><br/>
<input type="radio"  name="ans7" value="d">None of the above</input><br/>


<p>8 .A view of database that appears to an application program is known as :</p>
<input type="radio"  name="ans8" value="a">schema</input><br/>
<input type="radio"  name="ans8" value="b">subschema</input><br/>
<input type="radio"  name="ans8" value="c">virtual table</input><br/>
<input type="radio"  name="ans8" value="d">None of the above</input><br/>


<p>9 .Choose the DBMS, which supports full-fledged client server application development ?</p>
<input type="radio"  name="ans9" value="a">dBASEIV</input><br/>
<input type="radio"  name="ans9" value="b">oracle 7.1</input><br/>
<input type="radio"  name="ans9" value="c">FoxPro 2.1</input><br/>
<input type="radio"  name="ans9" value="d">Ingress</input><br/>



<p>10. A top-to-bottom relationship among the items in a database is established by a :</p>
<input type="radio" name="ans10" value="a"> Hierarchical schema<br/></input>
<input type="radio"  name="ans10" value="b">Network schema<br/></input>
<input type="radio"  name="ans10" value="c">Relational schema<br/></input>
<input type="radio"  name="ans10" value="d">all of the above<br/></input>
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

if($_POST['ans2']=='c')	
{
$count=$count+1;	
	
}	

if($_POST['ans3']=='a')	
{
$count=$count+1;	
	
}	
	
	
if($_POST['ans4']=='c')/* here qutions are cheaked */	
{
$count=$count+1;	
	
}	


if($_POST['ans5']=='b')	
{
$count=$count+1;	
	
}	

if($_POST['ans6']=='b')	
{
$count=$count+1;	
	
}	
	


if($_POST['ans7']=='a')/* here qutions are cheaked */	
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














