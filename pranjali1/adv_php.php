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
print '<form action="adv_php.php" method="post">';
//quesion 1
print '<p>1.Mysql_connect( ) does not take following parameter?</p>';
if($_POST[ans1]=="a")
print '<input type="radio" checked="checked" name="ans1">Database host<br/>';
else
print '<p><input type="radio" name="ans1" value="a"/>Database host<br/>';
if($_POST[ans1]=="b")
print '<input type="radio" checked="checked" name="ans1">User id<br/>';
else
print '<input type="radio" name="ans1" value="b"/>User id<br/>';
if($_POST[ans1]=="c")
print '<input type="radio" checked="checked" name="ans1">Password<br/>';
else
print '<input type="radio" name="ans1" value="c"/>Password<br/>';
if($_POST[ans1]=="d"){
print '<input type="radio" checked="checked" name="ans1">Database name<br/>';
$correct++;
}
else
print '<input type="radio" name="ans1" value="d"/>Database name<br/></p>';

//quesion 2
print '<p>2.Which of the folowing are valid float values?
</p>';
if($_POST[ans2]=="a")
print '<input type="radio" checked="checked" name="ans2">4.5678<br/>';
else
print '<p><input type="radio" name="ans2" value="a"/>4.5678<br/>';
if($_POST[ans2]=="b")
print '<input type="radio" checked="checked" name="ans2">4.0<br/>';
else
print '<input type="radio" name="ans2" value="b"/>4.0<br/>';
if($_POST[ans2]=="c")
print '<input type="radio" checked="checked" name="ans2">7.4<br/>';
else
print '<input type="radio" name="ans2" value="c"/>7.4<br/>';
if($_POST[ans2]=="d"){
print '<input type="radio" checked="checked" name="ans2">All of above<br/>';
$correct++;
}
else
print '<input type="radio" name="ans2" value="d"/>All of above<br/></p>';

//quesion 3
print '<p>3.In php string data are?</p>';
if($_POST['ans3']=="a")
print '<input type="radio" checked="checked" name="ans3">Delimited by single quate<br/>';
else
print '<p><input type="radio" name="ans3" value="a"/>Delimited by single quate<br/>';
if($_POST['ans3']=="b")
print '<input type="radio" checked="checked" name="ans3">Delimited by double quote<br/>';
else
print '<input type="radio" name="ans3" value="b"/>Delimited by double quote<br/>';
if($_POST['ans3']=="c")
print '<input type="radio" checked="checked" name="ans3">Delimited by identifier<br/>';
else
print '<input type="radio" name="ans3" value="c"/>Delimited by identifier<br/>';
if($_POST['ans3']=="d"){
print '<input type="radio" checked="checked" name="ans3">All of above<br/>';
$correct++;
}
else
print '<input type="radio" name="ans3" value="d"/>All of above<br/></p>';
//quesion 4
print '<p>1.Which of the following delimiting method is known as string Interpolation?</p>';
if($_POST['ans4']=="a")
print '<input type="radio" checked="checked" name="ans4">4.5678<br/>';
else
print '<p><input type="radio" name="ans4" value="a"/>4.5678<br/>';
if($_POST['ans4']=="b")
print '<input type="radio" checked="checked" name="ans4">4.0<br/>';
else
print '<input type="radio" name="ans4" value="b"/>4.0<br/>';
if($_POST['ans4']=="c")
print '<input type="radio" checked="checked" name="ans4">7.4<br/>';
else
print '<input type="radio" name="ans4" value="c"/>7.4<br/>';
if($_POST['ans4']=="d"){
print '<input type="radio" checked="checked" name="ans4">php&<br/>';
$correct++;
}
else
print '<input type="radio" name="ans4" value="d"/>php&<br/></p>';

//quesion 5
print '<p>2. Which of following are compound data type?</p>';
if($_POST['ans5']=="a")
print '<input type="radio" checked="checked" name="ans5">Array<br/>';
else
print '<p><input type="radio" name="ans5" value="a"/>Array<br/>';
if($_POST['ans5']=="b")
print '<input type="radio" checked="checked" name="ans5">Objects<br/>';
else
print '<input type="radio" name="ans5" value="b"/>Objects<br/>';
if($_POST['ans5']=="c"){
print '<input type="radio" checked="checked" name="ans5">Both<br/>';
$correct++;
}
else
print '<input type="radio" name="ans5" value="c"/>Both<br/>';
if($_POST['ans5']=="d")
print '<input type="radio" checked="checked" name="ans5">None of above<br/>';
else
print '<input type="radio" name="ans5" value="d"/>None of above<br/></p>';

//quesion 6
print '<p>3.Casting operator introduced in PHP 6 is</p>';
if($_POST['ans6']=="a")
print '<input type="radio" checked="checked" name="ans6">(array)<br/>';
else
print '<p><input type="radio" name="ans6" value="a"/>(array)<br/>';
if($_POST['ans6']=="b"){
print '<input type="radio" checked="checked" name="ans6">(int64)<br/>';
$correct++;
}
else
print '<input type="radio" name="ans6" value="b"/>(int64)<br/>';
if($_POST['ans6']=="c")
print '<input type="radio" checked="checked" name="ans6">(real) or (double) or (float)<br/>';
else
print '<input type="radio" name="ans6" value="c"/>(real) or (double) or (float)<br/>';
if($_POST['ans6']=="d")
print '<input type="radio" checked="checked" name="ans6">(object)<br/>';
else
print '<input type="radio" name="ans6" value="d"/>(object)<br/></p>';
//quesion 7
print '<p>1.When defining identifier in PHP you should remember that</p>';
if($_POST['ans7']=="a")
print '<input type="radio" checked="checked" name="ans7">Identifier are case sensitive. So $result is different than $ result<br/>';
else
print '<p><input type="radio" name="ans7" value="a"/>Identifier are case sensitive. So $result is different than $ result<br/>';
if($_POST['ans7']=="b")
print '<input type="radio" checked="checked" name="ans7">Identifiers can be any length<br/>';
else
print '<input type="radio" name="ans7" value="b"/>Identifiers can be any length<br/>';
if($_POST['ans7']=="c"){
print '<input type="radio" checked="checked" name="ans7">Both of above<br/>';
$correct++;
}
else
print '<input type="radio" name="ans7" value="c"/>Both of above<br/>';
if($_POST['ans7']=="d")
print '<input type="radio" checked="checked" name="ans7">None of above<br/>';
else
print '<input type="radio" name="ans7" value="d"/>None of above<br/></p>';

//quesion 8
print '<p>2.Identify the invalid identifier</p>';
if($_POST['ans8']=="a")
print '<input type="radio" checked="checked" name="ans8">my-function<br/>';
else
print '<p><input type="radio" name="ans8" value="a"/>my-function<br/>';
if($_POST['ans8']=="b")
print '<input type="radio" checked="checked" name="ans8">size<br/>';
else
print '<input type="radio" name="ans8" value="b"/>size<br/>';
if($_POST['ans8']=="c")
print '<input type="radio" checked="checked" name="ans8">–some word<br/>';
else
print '<input type="radio" name="ans8" value="c"/>–some word<br/>';
if($_POST['ans8']=="d"){
print '<input type="radio" checked="checked" name="ans8">This&that<br/>';
$correct++;
}
else
print '<input type="radio" name="ans8" value="d"/>This&that<br/></p>';

//quesion 9
print '<p>3.Which of folowiing variable assignment is ‘by value’ assignment in PHP</p>';
if($_POST['ans9']=="a"){
print '<input type="radio" checked="checked" name="ans9">$value1= $value?<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans9" value="a"/>$value1= $value?<br/>';
if($_POST['ans9']=="b")
print '<input type="radio" checked="checked" name="ans9">$value1= & $value?<br/>';
else
print '<input type="radio" name="ans9" value="b"/>$value1= & $value?<br/>';
if($_POST['ans9']=="c")
print '<input type="radio" checked="checked" name="ans9">$value1= & $value?<br/>';
else
print '<input type="radio" name="ans9" value="c"/>$value1= & $value?<br/>';
if($_POST['ans9']=="d")
print '<input type="radio" checked="checked" name="ans9">None of above<br/>';
else
print '<input type="radio" name="ans9" value="d"/>None of above<br/></p>';

//quesion 10
print '<p>3.$x=array(4,2,5,1,4,5,3,4); $y=array_count_values($x); echo count($y);</p>';
if($_POST['ans10']=="a")
print '<input type="radio" checked="checked" name="ans10">8<br/>';
else
print '<p><input type="radio" name="ans10" value="a"/>8<br/>';
if($_POST['ans10']=="b"){
print '<input type="radio" checked="checked" name="ans10">5<br/>';
$correct++;
}
else
print '<input type="radio" name="ans10" value="b"/>5<br/>';
if($_POST['ans10']=="c")
print '<input type="radio" checked="checked" name="ans10">27<br/>';
else
print '<input type="radio" name="ans10" value="c"/>27<br/>';
if($_POST['ans10']=="d")
print '<input type="radio" checked="checked" name="ans10">28<br/>';
else
print '<input type="radio" name="ans10" value="d"/>28<br/></p>';
session_start();
foreach($_POST as $value){
if(isset($value)){
$done++;
}
}
if($done!=11)
print'<input type="submit" onClick=window.open("result1.php") value="check ans" name="submit"/><br/><br/>';
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
