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
print '<form action="spm.php" method="post">';
//quesion 1
print '<p>1. Which of the following is not project management goal?
</p>';
if($_POST['ans1']=="a")
print '<input type="radio" checked="checked" name="ans1">Keeping overall costs within budget.<br/>';
else
print '<p><input type="radio" name="ans1" value="a"/>Keeping overall costs within budget.<br/>';
if($_POST['ans1']=="b")
print '<input type="radio" checked="checked" name="ans1"> Delivering the software to the customer at the agreed time.<br/>';
else
print '<input type="radio" name="ans1" value="b"/>  Delivering the software to the customer at the agreed time.<br/>';
if($_POST['ans1']=="c")
print '<input type="radio" checked="checked" name="ans1">Maintaining a happy and well-functioning development team.<br/>';
else
print '<input type="radio" name="ans1" value="c"/>Maintaining a happy and well-functioning development team.<br/>';
if($_POST['ans1']=="d"){
print '<input type="radio" checked="checked" name="ans1">Avoiding costumer complaints.<br/>';
$correct++;
}

else
print '<input type="radio" name="ans1" value="d"/>Avoiding costumer complaints.<br/></p>';

//quesion 2
print '<p>2. Project managers have to assess the risks that may affect a project.
</p>';
if($_POST['ans2']=="a")
print '<input type="radio" checked="checked" name="ans2">True
<br/>';
else
print '<p>True
<br/>';
if($_POST['ans2']=="b"){
print '<input type="radio" checked="checked" name="ans2"> False<br/>';
$correct++;
}
else
print '<input type="radio" name="ans2" value="b"/> False<br/>';
if($_POST['ans2']=="c")
print '<input type="radio" checked="checked" name="ans2"><br/>';
else
print '<input type="radio" name="ans2" value="c"/><br/>';
if($_POST['ans2']=="d")
print '<input type="radio" checked="checked" name="ans2"><br/>';
else
print '<input type="radio" name="ans2" value="d"/><br/></p>';

//quesion 3
print '<p>3. Which of the following is not considered as a risk in project management?</p>';
if($_POST['ans3']=="a")
print '<input type="radio" checked="checked" name="ans3">Specification delays<br/>';
else
print '<p><input type="radio" name="ans3" value="a"/>Specification delays<br/>';
if($_POST['ans3']=="b")
print '<input type="radio" checked="checked" name="ans3">Product competition<br/>';

else
print '<input type="radio" name="ans3" value="b"/>Product competition<br/>';
if($_POST['ans3']=="c"){
print '<input type="radio" checked="checked" name="ans3"> Testing<br/>';
$correct++;
}
else
print '<input type="radio" name="ans3" value="c"/> Testing<br/>';
if($_POST['ans3']=="d")
print '<input type="radio" checked="checked" name="ans3"> Staff turnover<br/>';
else
print '<input type="radio" name="ans3" value="d"/> Staff turnover<br/></p>';
//quesion 4
print '<p>4. The process each manager follows during the life of a project is known as</p>';
if($_POST['ans4']=="a")
print '<input type="radio" checked="checked" name="ans4">Project Management<br/>';
else
print '<p><input type="radio" name="ans4" value="a"/>Project Management<br/>';
if($_POST['ans4']=="b")
print '<input type="radio" checked="checked" name="ans4"> Manager life cycle<br/>';

else
print '<input type="radio" name="ans4" value="b"/> Manager life cycle<br/>';
if($_POST['ans4']=="c"){
print '<input type="radio" checked="checked" name="ans4">Project Management Life Cycle<br/>';
$correct++;
}
else
print '<input type="radio" name="ans4" value="c"/>Project Management Life Cycle<br/>';
if($_POST['ans4']=="d")
print '<input type="radio" checked="checked" name="ans4">All of the mentioned<br/>';
else
print '<input type="radio" name="ans4" value="d"/>All of the mentioned<br/></p>';

//quesion 5
print '<p>5. A 66.6% risk is considered as</p>';
if($_POST['ans5']=="a")
print '<input type="radio" checked="checked" name="ans5">very low<br/>';
else
print '<p><input type="radio" name="ans5" value="a"/>very low<br/>';
if($_POST['ans5']=="b")
print '<input type="radio" checked="checked" name="ans5">low<br/>';

else
print '<input type="radio" name="ans5" value="b"/>low<br/>';
if($_POST['ans5']=="c")
print '<input type="radio" checked="checked" name="ans5">high<br/>';
else
print '<input type="radio" name="ans5" value="c"/>high<br/>';
if($_POST['ans5']=="d"){
print '<input type="radio" checked="checked" name="ans5">very high<br/>';
$correct++;
}
else
print '<input type="radio" name="ans5" value="d"/>very high<br/></p>';

//quesion 6
print '<p>6. Which of the following is/are main parameters that you should use when computing the costs of a software development project?</p>';
if($_POST['ans6']=="a")
print '<input type="radio" checked="checked" name="ans6">travel and training costs<br/>';
else
print '<p><input type="radio" name="ans6" value="a"/>travel and training costs<br/>';
if($_POST['ans6']=="b")
print '<input type="radio" checked="checked" name="ans6">hardware and software costs<br/>';

else
print '<input type="radio" name="ans6" value="b"/>hardware and software costs<br/>';
if($_POST['ans6']=="c")
print '<input type="radio" checked="checked" name="ans6"> effort costs (the costs of paying software engineers and managers)<br/>';
else
print '<input type="radio" name="ans6" value="c"/> effort costs (the costs of paying software engineers and managers)<br/>';
if($_POST['ans6']=="d"){
print '<input type="radio" checked="checked" name="ans6"> All of the mentioned<br/>';
$correct++;
}
else
print '<input type="radio" name="ans6" value="d"/> All of the mentioned<br/></p>';
//quesion 7
print '<p>7. Quality planning is the process of developing a quality plan for</p>';
if($_POST['ans7']=="a")
print '<input type="radio" checked="checked" name="ans7"> team<br/>';
else
print '<p><input type="radio" name="ans7" value="a"/> team<br/>';
if($_POST['ans7']=="b"){
print '<input type="radio" checked="checked" name="ans7">project<br/>';
$correct++;
}
else
print '<input type="radio" name="ans7" value="b"/>project<br/>';
if($_POST['ans7']=="c")
print '<input type="radio" checked="checked" name="ans7"> customers<br/>';
else
print '<input type="radio" name="ans7" value="c"/> customers<br/>';
if($_POST['ans7']=="d")
print '<input type="radio" checked="checked" name="ans7"> project manager<br/>';
else
print '<input type="radio" name="ans7" value="d"/> project manager<br/></p>';

//quesion 8
print '<p>8. Which of the following is incorrect activity for the configuration management of a software system?</p>';
if($_POST['ans8']=="a"){
print '<input type="radio" checked="checked" name="ans8"> Internship management<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans8" value="a"/> Internship management<br/>';
if($_POST['ans8']=="b")
print '<input type="radio" checked="checked" name="ans8">Change management<br/>';

else
print '<input type="radio" name="ans8" value="b"/>Change management<br/>';
if($_POST['ans8']=="c")
print '<input type="radio" checked="checked" name="ans8"> Version management<br/>';
else
print '<input type="radio" name="ans8" value="c"/> Version management<br/>';
if($_POST['ans8']=="d")
print '<input type="radio" checked="checked" name="ans8">System management<br/>';
else
print '<input type="radio" name="ans8" value="d"/>System management<br/></p>';

//quesion 9
print '<p>9. Identify the sub-process of process improvement</p>';
if($_POST['ans9']=="a")
print '<input type="radio" checked="checked" name="ans9"> Process introduction<br/>';
else
print '<p><input type="radio" name="ans9" value="a"/> Process introduction<br/>';
if($_POST['ans9']=="b"){
print '<input type="radio" checked="checked" name="ans9">Process analysis<br/>';
$correct++;
}
else
print '<input type="radio" name="ans9" value="b"/>Process analysis<br/>';
if($_POST['ans9']=="c")
print '<input type="radio" checked="checked" name="ans9"> De-processification<br/>';
else
print '<input type="radio" name="ans9" value="c"/> De-processification<br/>';
if($_POST['ans9']=="d")
print '<input type="radio" checked="checked" name="ans9">Process distribution<br/>';
else
print '<input type="radio" name="ans9" value="d"/>Process distribution<br/></p>';

//quesion 10
print '<p>10. An independent relationship must exist between the attribute that can be measured and the external quality attribute.</p>';
if($_POST['ans10']=="a")
print '<input type="radio" checked="checked" name="ans10">True<br/>';
else
print '<p><input type="radio" name="ans10" value="a"/>True<br/>';
if($_POST['ans10']=="b"){
print '<input type="radio" checked="checked" name="ans10"> False<br/>';
$correct++;
}
else
print '<input type="radio" name="ans10" value="b"/> False<br/>';
if($_POST['ans10']=="c")
print '<input type="radio" checked="checked" name="ans10"><br/>';
else
print '<input type="radio" name="ans10" value="c"/><br/>';
if($_POST['ans10']=="d")
print '<input type="radio" checked="checked" name="ans10"><br/>';
else
print '<input type="radio" name="ans10" value="d"/><br/></p>';
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
