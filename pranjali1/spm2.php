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
print '<form action="spm2.php" method="post">';
//quesion 1
print '<p>1. Which one is not a software quality model?
</p>';
if($_POST['ans1']=="a"){
print '<input type="radio" checked="checked" name="ans1">ISO 9000<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans1" value="a"/>ISO 9000<br/>';
if($_POST['ans1']=="b")
print '<input type="radio" checked="checked" name="ans1"> McCall model<br/>';
else
print '<input type="radio" name="ans1" value="b"/>McCall model<br/>';
if($_POST['ans1']=="c")
print '<input type="radio" checked="checked" name="ans1"> Boehm model<br/>';
else
print '<input type="radio" name="ans1" value="c"/> Boehm model<br/>';
if($_POST['ans1']=="d")
print '<input type="radio" checked="checked" name="ans1">  ISO 9126<br/>';
else
print '<input type="radio" name="ans1" value="d"/> ISO 9126<br/></p>';

//quesion 2
print '<p>2. How many levels are present in CMM?
</p>';
if($_POST['ans2']=="a")
print '<input type="radio" checked="checked" name="ans2"> three
<br/>';
else
print '<p><input type="radio" name="ans2" value="a"/> three<br/>';
if($_POST['ans2']=="b")
print '<input type="radio" checked="checked" name="ans2">four<br/>';

else
print '<input type="radio" name="ans2" value="b"/>four<br/>';
if($_POST['ans2']=="c"){
print '<input type="radio" checked="checked" name="ans2">five<br/>';
$correct++;
}
else
print '<input type="radio" name="ans2" value="c"/>five<br/>';
if($_POST['ans2']=="d")
print '<input type="radio" checked="checked" name="ans2">six<br/>';
else
print '<input type="radio" name="ans2" value="d"/>six<br/></p>';

//quesion 3
print '<p>3. Which level of CMM is for process management?</p>';
if($_POST['ans3']=="a")
print '<input type="radio" checked="checked" name="ans3"> Initial<br/>';
else
print '<p><input type="radio" name="ans3" value="a"/> Initial<br/>';
if($_POST['ans3']=="b")
print '<input type="radio" checked="checked" name="ans3">Repeatable<br/>';

else
print '<input type="radio" name="ans3" value="b"/>Repeatable<br/>';
if($_POST['ans3']=="c")
print '<input type="radio" checked="checked" name="ans3"> Defined<br/>';
else
print '<input type="radio" name="ans3" value="c"/> Defined<br/>';
if($_POST['ans3']=="d"){
print '<input type="radio" checked="checked" name="ans3">Optimizing<br/>';
$correct++;
}
else
print '<input type="radio" name="ans3" value="d"/>Optimizing<br/></p>';
//quesion 4
print '<p>4. In ISO 9126, time behavior and resource utilization are a part of</p>';
if($_POST['ans4']=="a")
print '<input type="radio" checked="checked" name="ans4"> maintainability<br/>';
else
print '<p><input type="radio" name="ans4" value="a"/> maintainability<br/>';
if($_POST['ans4']=="b")
print '<input type="radio" checked="checked" name="ans4">portability<br/>';

else
print '<input type="radio" name="ans4" value="b"/>portability<br/>';
if($_POST['ans4']=="c"){
print '<input type="radio" checked="checked" name="ans4">efficiency<br/>';
$correct++;
}
else
print '<input type="radio" name="ans4" value="c"/>efficiency<br/>';
if($_POST['ans4']=="d")
print '<input type="radio" checked="checked" name="ans4">usability<br/>';
else
print '<input type="radio" name="ans4" value="d"/>usability<br/></p>';

//quesion 5
print '<p>5. Which of the following is not a Probabilistic Model?</p>';
if($_POST['ans5']=="a")
print '<input type="radio" checked="checked" name="ans5">Error seeding<br/>';
else
print '<p><input type="radio" name="ans5" value="a"/>Error seeding<br/>';
if($_POST['ans5']=="b"){
print '<input type="radio" checked="checked" name="ans5">NHPP<br/>';
$correct++;
}
else
print '<input type="radio" name="ans5" value="b"/>NHPP<br/>';
if($_POST['ans5']=="c")
print '<input type="radio" checked="checked" name="ans5">Input domain<br/>';
else
print '<input type="radio" name="ans5" value="c"/>Input domain<br/>';
if($_POST['ans5']=="d")
print '<input type="radio" checked="checked" name="ans5"> Halstead’s software metric<br/>';
else
print '<input type="radio" name="ans5" value="d"/> Halstead’s software metric<br/></p>';

//quesion 6
print '<p>6. Software reliability is defined with respect to</p>';
if($_POST['ans6']=="a"){
print '<input type="radio" checked="checked" name="ans6"> time<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans6" value="a"/> time<br/>';

if($_POST['ans6']=="b")
print '<input type="radio" checked="checked" name="ans6">bugs<br/>';

else
print '<input type="radio" name="ans6" value="b"/>bugs<br/>';
if($_POST['ans6']=="c")
print '<input type="radio" checked="checked" name="ans6">failures<br/>';
else
print '<input type="radio" name="ans6" value="c"/>failures<br/>';
if($_POST['ans6']=="d")
print '<input type="radio" checked="checked" name="ans6"> quality<br/>';
else
print '<input type="radio" name="ans6" value="d"/> quality<br/></p>';
//quesion 7
print '<p>7. Failure In Time (FIT) is another way of reporting</p>';
if($_POST['ans7']=="a")
print '<input type="radio" checked="checked" name="ans7"> MTTR<br/>';
else
print '<p><input type="radio" name="ans7" value="a"/> MTTR<br/>';
if($_POST['ans7']=="b")
print '<input type="radio" checked="checked" name="ans7">MTTF<br/>';

else
print '<input type="radio" name="ans7" value="b"/> MTTF<br/>';
if($_POST['ans7']=="c")
print '<input type="radio" checked="checked" name="ans7"> MTSF<br/>';
else
print '<input type="radio" name="ans7" value="c"/> MTSF<br/>';
if($_POST['ans7']=="d"){
print '<input type="radio" checked="checked" name="ans7">MTBF<br/>';
$correct++;
}
else
print '<input type="radio" name="ans7" value="d"/>MTBF<br/></p>';

//quesion 8
print '<p>8. MTTF stands for</p>';
if($_POST['ans8']=="a")
print '<input type="radio" checked="checked" name="ans8">Minimum time to failure<br/>';
else
print '<p><input type="radio" name="ans8" value="a"/>Minimum time to failure<br/>';
if($_POST['ans8']=="b"){
print '<input type="radio" checked="checked" name="ans8">Mean time to failure<br/>';
$correct++;
}
else
print '<input type="radio" name="ans8" value="b"/>Mean time to failure<br/>';
if($_POST['ans8']=="c")
print '<input type="radio" checked="checked" name="ans8">Maximum time to failure<br/>';
else
print '<input type="radio" name="ans8" value="c"/>Maximum time to failure<br/>';
if($_POST['ans8']=="d")
print '<input type="radio" checked="checked" name="ans8">None of the mentioned<br/>';
else
print '<input type="radio" name="ans8" value="d"/>None of the mentioned<br/></p>';

//quesion 9
print '<p>9. Mean Time To Repair (MTTR) is the time needed to repair a failed hardware module.</p>';
if($_POST['ans9']=="a"){
print '<input type="radio" checked="checked" name="ans9"> True<br/>';
$correct++;
}

else
print '<p><input type="radio" name="ans9" value="a"/> True<br/>';
if($_POST['ans9']=="b")
print '<input type="radio" checked="checked" name="ans9">False<br/>';
else
print '<input type="radio" name="ans9" value="b"/>False<br/>';
if($_POST['ans9']=="c")
print '<input type="radio" checked="checked" name="ans9"><br/>';
else
print '<input type="radio" name="ans9" value="c"/><br/>';
if($_POST['ans9']=="d")
print '<input type="radio" checked="checked" name="ans9"><br/>';
else
print '<input type="radio" name="ans9" value="d"/><br/></p>';

//quesion 10
print '<p>10. IMC Networks is a leading ________ certified manufacturer of optical networking and LAN/WAN connectivity solutions for enterprise, telecommunications and service provider applications.</p>';
if($_POST['ans10']=="a")
print '<input type="radio" checked="checked" name="ans10">D-Link<br/>';
else
print '<p><input type="radio" name="ans10" value="a"/>D-Link<br/>';
if($_POST['ans10']=="b"){
print '<input type="radio" checked="checked" name="ans10">Telco Systems<br/>';
$correct++;
}
else
print '<input type="radio" name="ans10" value="b"/>Telco Systems<br/>';
if($_POST['ans10']=="c")
print '<input type="radio" checked="checked" name="ans10">Arista Networks<br/>';
else
print '<input type="radio" name="ans10" value="c"/>Arista Networks<br/>';
if($_POST['ans10']=="d")
print '<input type="radio" checked="checked" name="ans10"> ISO 9001<br/>';
else
print '<input type="radio" name="ans10" value="d"/> ISO 9001<br/></p>';

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
print'the correct answer:1.&nbsp;&nbsp;2.&nbsp;&nbsp;3.';
}
print'</form>';
?>
</body>
</html>
