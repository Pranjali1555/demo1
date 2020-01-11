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
print '<form action="aplr.php" method="post">';
//quesion 1
print '<p>1. 	
Look at this series: 2, 1, (1/2), (1/4), ... What number should come next?
</p>';
if($_POST['ans1']=="a")
print '<input type="radio" checked="checked" name="ans1">(1/3)<br/>';
else
print '<p><input type="radio" name="ans1" value="a"/>(1/3)<br/>';
if($_POST['ans1']=="b"){
print '<input type="radio" checked="checked" name="ans1"> (1/8)<br/>';
$correct++;
}
else
print '<input type="radio" name="ans1" value="b"/> (1/8)<br/>';
if($_POST['ans1']=="c")
print '<input type="radio" checked="checked" name="ans1">(2/8)<br/>';
else
print '<input type="radio" name="ans1" value="c"/>(2/8)<br/>';
if($_POST['ans1']=="d")
print '<input type="radio" checked="checked" name="ans1">(1/16)<br/>';
else
print '<input type="radio" name="ans1" value="d"/>(1/16)<br/></p>';

//quesion 2
print '<p>2.Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?
</p>';
if($_POST['ans2']=="a")
print '<input type="radio" checked="checked" name="ans2">7<br/>';
else
print '<p><input type="radio" name="ans2" value="a"/>7<br/>';
if($_POST['ans2']=="b"){
print '<input type="radio" checked="checked" name="ans2">10<br/>';
$correct++;
}
else
print '<input type="radio" name="ans2" value="b"/>10<br/>';
if($_POST['ans2']=="c")
print '<input type="radio" checked="checked" name="ans2">12<br/>';
else
print '<input type="radio" name="ans2" value="c"/>12<br/>';
if($_POST['ans2']=="d")
print '<input type="radio" checked="checked" name="ans2">13<br/>';
else
print '<input type="radio" name="ans2" value="d"/>13<br/></p>';

//quesion 3
print '<p>3.Look at this series: 36, 34, 30, 28, 24, ... What number should come next?</p>';
if($_POST['ans3']=="a")
print '<input type="radio" checked="checked" name="ans3">20<br/>';
else
print '<p><input type="radio" name="ans3" value="a"/>20<br/>';
if($_POST['ans3']=="b"){
print '<input type="radio" checked="checked" name="ans3">22<br/>';
$correct++;
}
else
print '<input type="radio" name="ans3" value="b"/>22<br/>';
if($_POST['ans3']=="c")
print '<input type="radio" checked="checked" name="ans3">24<br/>';
else
print '<input type="radio" name="ans3" value="c"/>24<br/>';
if($_POST['ans3']=="d")
print '<input type="radio" checked="checked" name="ans3">23<br/>';
else
print '<input type="radio" name="ans3" value="d"/>23<br/></p>';
//quesion 4
print '<p>4. 	
Look at this series: 22, 21, 23, 22, 24, 23, ... What number should come next?</p>';
if($_POST['ans4']=="a")
print '<input type="radio" checked="checked" name="ans4">22<br/>';
else
print '<p><input type="radio" name="ans4" value="a"/>22<br/>';
if($_POST['ans4']=="b")
print '<input type="radio" checked="checked" name="ans4">24<br/>';

else
print '<input type="radio" name="ans4" value="b"/>24<br/>';
if($_POST['ans4']=="c"){
print '<input type="radio" checked="checked" name="ans4">25<br/>';
$correct++;
}
else
print '<input type="radio" name="ans4" value="c"/>25<br/>';
if($_POST['ans4']=="d")
print '<input type="radio" checked="checked" name="ans4">26<br/>';
else
print '<input type="radio" name="ans4" value="d"/>26<br/></p>';

//quesion 5
print '<p>5. 	
Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next?</p>';
if($_POST['ans5']=="a")
print '<input type="radio" checked="checked" name="ans5">12<br/>';
else
print '<p><input type="radio" name="ans5" value="a"/>12<br/>';
if($_POST['ans5']=="b"){
print '<input type="radio" checked="checked" name="ans5">17<br/>';
$correct++;
}
else
print '<input type="radio" name="ans5" value="b"/>17<br/>';
if($_POST['ans5']=="c")
print '<input type="radio" checked="checked" name="ans5">27<br/>';
else
print '<input type="radio" name="ans5" value="c"/>27<br/>';
if($_POST['ans5']=="d")
print '<input type="radio" checked="checked" name="ans5">53<br/>';
else
print '<input type="radio" name="ans5" value="d"/>53<br/></p>';

//quesion 6
print '<p>6. 	
Look at this series: 21, 9, 21, 11, 21, 13, 21, ... What number should come next?</p>';
if($_POST['ans6']=="a")
print '<input type="radio" checked="checked" name="ans6">14<br/>';
else
print '<p><input type="radio" name="ans6" value="a"/>14<br/>';
if($_POST['ans6']=="b"){
print '<input type="radio" checked="checked" name="ans6">15<br/>';
$correct++;
}
else
print '<input type="radio" name="ans6" value="b"/>15<br/>';
if($_POST['ans6']=="c")
print '<input type="radio" checked="checked" name="ans6">21<br/>';
else
print '<input type="radio" name="ans6" value="c"/>21<br/>';
if($_POST['ans6']=="d")
print '<input type="radio" checked="checked" name="ans6">17<br/>';
else
print '<input type="radio" name="ans6" value="d"/>17<br/></p>';
//quesion 7
print '<p>7. 	
Look at this series: 58, 52, 46, 40, 34, ... What number should come next?</p>';
if($_POST['ans7']=="a")
print '<input type="radio" checked="checked" name="ans7">26<br/>';
else
print '<p><input type="radio" name="ans7" value="a"/>26<br/>';
if($_POST['ans7']=="b"){
print '<input type="radio" checked="checked" name="ans7">28<br/>';
$correct++;
}
else
print '<input type="radio" name="ans7" value="b"/>28<br/>';
if($_POST['ans7']=="c")
print '<input type="radio" checked="checked" name="ans7">30<br/>';
else
print '<input type="radio" name="ans7" value="c"/>30<br/>';
if($_POST['ans7']=="d")
print '<input type="radio" checked="checked" name="ans7">32<br/>';
else
print '<input type="radio" name="ans7" value="d"/>32<br/></p>';

//quesion 8
print '<p>8. 	
Look at this series: 3, 4, 7, 8, 11, 12, ... What number should come next?</p>';
if($_POST['ans8']=="a")
print '<input type="radio" checked="checked" name="ans8">7<br/>';
else
print '<p><input type="radio" name="ans8" value="a"/>10<br/>';
if($_POST['ans8']=="b")
print '<input type="radio" checked="checked" name="ans8">14<br/>';

else
print '<input type="radio" name="ans8" value="b"/>14<br/>';
if($_POST['ans8']=="c")
print '<input type="radio" checked="checked" name="ans8">10<br/>';
else
print '<input type="radio" name="ans8" value="c"/>10<br/>';
if($_POST['ans8']=="d"){
print '<input type="radio" checked="checked" name="ans8">15<br/>';
$correct++;
}
else
print '<input type="radio" name="ans8" value="d"/>15<br/></p>';

//quesion 9
print '<p>9. 	
Look at this series: 8, 22, 8, 28, 8, ... What number should come next?</p>';
if($_POST['ans9']=="a")
print '<input type="radio" checked="checked" name="ans9">9<br/>';
else
print '<p><input type="radio" name="ans9" value="a"/>9<br/>';
if($_POST['ans9']=="b")
print '<input type="radio" checked="checked" name="ans9">29<br/>';

else
print '<input type="radio" name="ans9" value="b"/>29<br/>';
if($_POST['ans9']=="c")
print '<input type="radio" checked="checked" name="ans9">32<br/>';
else
print '<input type="radio" name="ans9" value="c"/>32<br/>';
if($_POST['ans9']=="d"){
print '<input type="radio" checked="checked" name="ans9">34<br/>';
$correct++;
}
else
print '<input type="radio" name="ans9" value="d"/>34<br/></p>';

//quesion 10
print '<p>10. 	
Look at this series: 31, 29, 24, 22, 17, ... What number should come next?</p>';
if($_POST['ans10']=="a")
print '<input type="radio" checked="checked" name="ans10">15<br/>';
else
print '<p><input type="radio" name="ans10" value="a"/>15<br/>';
if($_POST['ans10']=="b"){
print '<input type="radio" checked="checked" name="ans10">14<br/>';
$correct++;
}
else
print '<input type="radio" name="ans10" value="b"/>14<br/>';
if($_POST['ans10']=="c")
print '<input type="radio" checked="checked" name="ans10">13<br/>';
else
print '<input type="radio" name="ans10" value="c"/>13<br/>';
if($_POST['ans10']=="d")
print '<input type="radio" checked="checked" name="ans10">12<br/>';
else
print '<input type="radio" name="ans10" value="d"/>12<br/></p>';
session_start();
foreach($_POST as $value){
if(isset($value)){
$done++;
}
}
if($done!=11)
print'<input type="submit"  onClick=window.open("result1.php") value="check ans" name="submit"/><br/><br/>';
if(($done>0)&&($done<11))
print'submit your answer';
if($done==11){
 if($correct==0)
$correct="0";
echo"subject:-c#";
print"your score is $correct/10.<br/><br/>";
$_SESSION['correct']="$correct";
print'the correct answer:1.&nbsp;&nbsp;2.&nbsp;&nbsp;3.';
}
print'</form>';
?>
</body>
</html>
