<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<body  background="file\IMG_186809.jpg" text="#FFFFFF">
<H1><center><b><u>C-language</u></b></h1></center>
<i><b><h2>
<form action="computerfundamentals.php" method="post">
<p>1.UNIVAC is? </p>
<input type="radio"name="ans1" value="a">Universal Automatic Computer</input><br/>
<input type="radio" name="ans1" value="b">Universal Array Computer</input><br/>
<input type="radio" name="ans1" value="c">Unique Automatic Computer</input><br/>
<input type="radio" name="ans1" value="d"> Unvalued Automatic Computer</input><br/>

<p>2.The basic operations performed by a computer are? </p><br/>
<input type="radio" name="ans2" value="a"></input><br/>
<input type="radio"  name="ans2" value="b"></input><br/>
<input type="radio"  name="ans2" value="c"></input><br/>
<input type="radio"  name="ans2" value="d"></input><br/>


<p></p>
<input type="radio" name="ans3" value="a"></input><br/>
<input type="radio" name="ans3" value="b"></input><br/>
<input type="radio"  name="ans3" value="c"></input><br/>
<input type="radio" name="ans3" value="d"></input><br/>


<p></p>
<input type="radio" name="ans4" value="a"></input><br/>
<input type="radio" name="ans4" value="b"></input><br/>
<input type="radio" name="ans4" value="c"></input><br/>
<input type="radio" name="ans4" value="d"></input><br/>


<p></p>
<input type="radio"  name="ans5" value="a"></input><br/>
<input type="radio"  name="ans5" value="b"></input><br/>
<input type="radio"  name="ans5" value="c"></input><br/>
<input type="radio"  name="ans5" value="d"></input><br/>


<p></p>
<input type="radio"  name="ans6" value="a"></input><br/>
<input type="radio" name="ans6" value="b"></input><br/>
<input type="radio" name="ans6" value="c"></input><br/>
<input type="radio" name="ans6" value="d"></input><br/>


<p></p>
<input type="radio"  name="ans7" value="a"></input><br/>
<input type="radio"  name="ans7" value="b"></input><br/>
<input type="radio" name="ans7" value="c"></input><br/>
<input type="radio"  name="ans7" value="d"></input><br/>


<p></p>
<input type="radio"  name="ans8" value="a"></input><br/>
<input type="radio"  name="ans8" value="b"></input><br/>
<input type="radio"  name="ans8" value="c"></input><br/>
<input type="radio"  name="ans8" value="d"></input><br/>


<p></p>
<input type="radio"  name="ans9" value="a"></input><br/>
<input type="radio"  name="ans9" value="b"></input><br/>
<input type="radio"  name="ans9" value="c"></input><br/>
<input type="radio"  name="ans9" value="d"></input><br/>



<p></p>
<input type="radio" name="ans10" value="a"><br/>
<input type="radio"  name="ans10" value="b"><br/>
<input type="radio"  name="ans10" value="c"><br/>
<input type="radio"  name="ans10" value="d"><br/>
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
print '<form action="dw.php" method="post">';
//quesion 1
print '<p>1. 	
Data scrubbing is which of the following?
</p>';
if($_POST['ans1']=="a")
print '<input type="radio" checked="checked" name="ans1">A process to reject data from the data warehouse and to create the necessary indexes<br/>';
else
print '<p><input type="radio" name="ans1" value="a"/A process to reject data from the data warehouse and to create the necessary indexes><br/>';
if($_POST['ans1']=="b")
print '<input type="radio" checked="checked" name="ans1"> A process to load the data in the data warehouse and to create the necessary indexes<br/>';
else
print '<input type="radio" name="ans1" value="b"/>A process to load the data in the data warehouse and to create the necessary indexes<br/>';
if($_POST['ans1']=="c")
print '<input type="radio" checked="checked" name="ans1">A process to upgrade the quality of data after it is moved into a data warehouse<br/>';
else
print '<input type="radio" name="ans1" value="c"/>A process to upgrade the quality of data after it is moved into a data warehouse<br/>';
if($_POST['ans1']=="d"){
print '<input type="radio" checked="checked" name="ans1"> A process to upgrade the quality of data before it is moved into a data warehouse<br/>';
$correct++;
}

else
print '<input type="radio" name="ans1" value="d"/> A process to upgrade the quality of data before it is moved into a data warehouse<br/></p>';

//quesion 2
print '<p>2. 	
The @active data warehouse architecture includes which of the following?
</p>';
if($_POST['ans2']=="a")
print '<input type="radio" checked="checked" name="ans2">At least one data mart
<br/>';
else
print '<p><input type="radio" name="ans2" value="a"/>At least one data mart
<br/>';
if($_POST['ans2']=="b")
print '<input type="radio" checked="checked" name="ans2">Data that can extracted from numerous internal and external sources<br/>';

else
print '<input type="radio" name="ans2" value="b"/>Data that can extracted from numerous internal and external sources<br/>';
if($_POST['ans2']=="c")
print '<input type="radio" checked="checked" name="ans2">Near real-time updates<br/>';
else
print '<input type="radio" name="ans2" value="c"/>Near real-time updates<br/>';
if($_POST['ans2']=="d"){
print '<input type="radio" checked="checked" name="ans2">All of the above.<br/>';
$correct++;
}
else
print '<input type="radio" name="ans2" value="d"/>All of the above.<br/></p>';

//quesion 3
print '<p>3. 	
A goal of data mining includes which of the following?</p>';
if($_POST['ans3']=="a"){
print '<input type="radio" checked="checked" name="ans3">To explain some observed event or condition<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans3" value="a"/>To explain some observed event or condition<br/>';
if($_POST['ans3']=="b")
print '<input type="radio" checked="checked" name="ans3">To confirm that data exists<br/>';

else
print '<input type="radio" name="ans3" value="b"/>To confirm that data exists<br/>';
if($_POST['ans3']=="c")
print '<input type="radio" checked="checked" name="ans3">To analyze data for expected relationships<br/>';
else
print '<input type="radio" name="ans3" value="c"/>To analyze data for expected relationships<br/>';
if($_POST['ans3']=="d")
print '<input type="radio" checked="checked" name="ans3">To create a new data warehouse<br/>';
else
print '<input type="radio" name="ans3" value="d"/>To create a new data warehouse<br/></p>';
//quesion 4
print '<p>4. 	
An operational system is which of the following?</p>';
if($_POST['ans4']=="a")
print '<input type="radio" checked="checked" name="ans4">A system that is used to run the business in real time and is based on historical data.<br/>';
else
print '<p><input type="radio" name="ans4" value="a"/>A system that is used to run the business in real time and is based on historical data.<br/>';
if($_POST['ans4']=="b"){
print '<input type="radio" checked="checked" name="ans4">A system that is used to run the business in real time and is based on current data.
<br/>';
$correct++;
}
else
print '<input type="radio" name="ans4" value="b"/>A system that is used to run the business in real time and is based on current data.
<br/>';
if($_POST['ans4']=="c")
print '<input type="radio" checked="checked" name="ans4">	A system that is used to support decision making and is based on current data.<br/>';
else
print '<input type="radio" name="ans4" value="c"/>	A system that is used to support decision making and is based on current data.<br/>';
if($_POST['ans4']=="d")
print '<input type="radio" checked="checked" name="ans4">A system that is used to support decision making and is based on historical data.<br/>';
else
print '<input type="radio" name="ans4" value="d"/>A system that is used to support decision making and is based on historical data.<br/></p>';

//quesion 5
print '<p>5. 	
A data warehouse is which of the following?</p>';
if($_POST['ans5']=="a")
print '<input type="radio" checked="checked" name="ans5">Can be updated by end users.<br/>';
else
print '<p><input type="radio" name="ans5" value="a"/>Can be updated by end users.<br/>';
if($_POST['ans5']=="b")
print '<input type="radio" checked="checked" name="ans5">Contains numerous naming conventions and formats.<br/>';

else
print '<input type="radio" name="ans5" value="b"/>Contains numerous naming conventions and formats.<br/>';
if($_POST['ans5']=="c"){
print '<input type="radio" checked="checked" name="ans5">Organized around important subject areas.<br/>';
$correct++;
}
else
print '<input type="radio" name="ans5" value="c"/>Organized around important subject areas.<br/>';
if($_POST['ans5']=="d")
print '<input type="radio" checked="checked" name="ans5">Contains only current data.<br/>';
else
print '<input type="radio" name="ans5" value="d"/>Contains only current data.<br/></p>';

//quesion 6
print '<p>6. 	
A snowflake schema is which of the following types of tables?</p>';
if($_POST['ans6']=="a")
print '<input type="radio" checked="checked" name="ans6">Fact<br/>';
else
print '<p><input type="radio" name="ans6" value="a"/>Fact<br/>';
if($_POST['ans6']=="b")
print '<input type="radio" checked="checked" name="ans6">Dimension<br/>';
else
print '<input type="radio" name="ans6" value="b"/>Dimension<br/>';
if($_POST['ans6']=="c")
print '<input type="radio" checked="checked" name="ans6">Helper<br/>';
else
print '<input type="radio" name="ans6" value="c"/>Helper<br/>';
if($_POST['ans6']=="d"){
print '<input type="radio" checked="checked" name="ans6">All of the above<br/>';
$correct++;
}

else
print '<input type="radio" name="ans6" value="d"/>All of the above<br/></p>';
//quesion 7
print '<p>7. 	
The generic two-level data warehouse architecture includes which of the following?</p>';
if($_POST['ans7']=="a")
print '<input type="radio" checked="checked" name="ans7">At least one data mart<br/>';
else
print '<p><input type="radio" name="ans7" value="a"/>At least one data mart<br/>';
if($_POST['ans7']=="b"){
print '<input type="radio" checked="checked" name="ans7">Data that can extracted from numerous internal and external sources<br/>';
$correct++;
}
else
print '<input type="radio" name="ans7" value="b"/>Data that can extracted from numerous internal and external sources<br/>';
if($_POST['ans7']=="c")
print '<input type="radio" checked="checked" name="ans7">Near real-time updates<br/>';
else
print '<input type="radio" name="ans7" value="c"/>Near real-time updates<br/>';
if($_POST['ans7']=="d")
print '<input type="radio" checked="checked" name="ans7">All of the above.<br/>';
else
print '<input type="radio" name="ans7" value="d"/>All of the above.<br/></p>';

//quesion 8
print '<p>8. 	
Fact tables are which of the following?</p>';
if($_POST['ans8']=="a")
print '<input type="radio" checked="checked" name="ans8">Completely denoralized<br/>';
else
print '<p><input type="radio" name="ans8" value="a"/>Completely denoralized<br/>';
if($_POST['ans8']=="b")
print '<input type="radio" checked="checked" name="ans8">Partially denoralized<br/>';
else
print '<input type="radio" name="ans8" value="b"/>Partially denoralized<br/>';
if($_POST['ans8']=="c"){
print '<input type="radio" checked="checked" name="ans8">Completely normalized<br/>';
$correct++;
}

else
print '<input type="radio" name="ans8" value="c"/>Completely normalized<br/>';
if($_POST['ans8']=="d")
print '<input type="radio" checked="checked" name="ans8">Partially normalized<br/>';
else
print '<input type="radio" name="ans8" value="d"/>Partially normalized<br/></p>';

//quesion 9
print '<p>9. 	
Data transformation includes which of the following?</p>';
if($_POST['ans9']=="a"){
print '<input type="radio" checked="checked" name="ans9">A process to change data from a detailed level to a summary level<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans9" value="a"/>A process to change data from a detailed level to a summary level<br/>';
if($_POST['ans9']=="b")
print '<input type="radio" checked="checked" name="ans9">A process to change data from a summary level to a detailed level<br/>';

else
print '<input type="radio" name="ans9" value="b"/>A process to change data from a summary level to a detailed level<br/>';
if($_POST['ans9']=="c")
print '<input type="radio" checked="checked" name="ans9">Joining data from one source into various sources of data<br/>';
else
print '<input type="radio" name="ans9" value="c"/>Joining data from one source into various sources of data<br/>';
if($_POST['ans9']=="d")
print '<input type="radio" checked="checked" name="ans9">Separating data from one source into various sources of data<br/>';
else
print '<input type="radio" name="ans9" value="d"/>Separating data from one source into various sources of data<br/></p>';

//quesion 10
print '<p>10. 	
Reconciled data is which of the following?</p>';
if($_POST['ans10']=="a")
print '<input type="radio" checked="checked" name="ans10">Data stored in the various operational systems throughout the organization.<br/>';
else
print '<p><input type="radio" name="ans10" value="a"/>Data stored in the various operational systems throughout the organization.<br/>';
if($_POST['ans10']=="b"){
print '<input type="radio" checked="checked" name="ans10">Current data intended to be the single source for all decision support systems.<br/>';
$correct++;
}
else
print '<input type="radio" name="ans10" value="b"/>Current data intended to be the single source for all decision support systems.<br/>';
if($_POST['ans10']=="c")
print '<input type="radio" checked="checked" name="ans10">Data stored in one operational system in the organization.<br/>';
else
print '<input type="radio" name="ans10" value="c"/>Data stored in one operational system in the organization.<br/>';
if($_POST['ans10']=="d")
print '<input type="radio" checked="checked" name="ans10">Data that has been selected and formatted for end-user support applications.<br/>';
else
print '<input type="radio" name="ans10" value="d"/>Data that has been selected and formatted for end-user support applications.<br/></p>';
session_start();
foreach($_POST as $value){
if(isset($value)){
$done++;
}
}
if($done!=11)
print'<input type="submit" value="check ans"  onClick=window.open("result1.php") name="submit"/><br/><br/>';
if(($done>0)&&($done<11))
print'submit your answer';
if($done==11){
 if($correct==0)
$correct="0";
echo"subject:-c#";
print"your score is $correct/10.<br/><br/>";
$_SESSION['correct']=$correct;
}
print'</form>';
?>
</body>
</html>
