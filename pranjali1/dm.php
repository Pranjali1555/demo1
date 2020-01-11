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
print '<form action="dm.php" method="post">';
//quesion 1
print '<p>1............. is an essential process where intelligent methods are applied to extract data patterns.MCQ on Data Mining with?</p>';
if($_POST['ans1']=="a"){
print '<input type="radio" checked="checked" name="ans1">Data warehousing<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans1" value="a"/>Data warehousing
<br/>';
if($_POST['ans1']=="b")
print '<input type="radio" checked="checked" name="ans1">Data mining<br/>';

else
print '<input type="radio" name="ans1" value="b"/> Data mining<br/>';
if($_POST['ans1']=="c")
print '<input type="radio" checked="checked" name="ans1">Text mining<br/>';
else
print '<input type="radio" name="ans1" value="c"/>Text mining<br/>';
if($_POST['ans1']=="d")
print '<input type="radio" checked="checked" name="ans1">Data selection<br/>';
else
print '<input type="radio" name="ans1" value="d"/>Data selection<br/></p>';

//quesion 2
print '<p>2.Data mining can also applied to other forms such as ................
</p>';
if($_POST['ans2']=="a")
print '<input type="radio" checked="checked" name="ans2">Data streams<br/>';
else
print '<p><input type="radio" name="ans2" value="a"/>Data streams<br/>';
if($_POST['ans2']=="b"){
print '<input type="radio" checked="checked" name="ans2">Sequence data<br/>';
$correct++;
}
else
print '<input type="radio" name="ans2" value="b"/>Sequence data<br/>';
if($_POST['ans2']=="c")
print '<input type="radio" checked="checked" name="ans2">Networked data<br/>';
else
print '<input type="radio" name="ans2" value="c"/>Networked data<br/>';
if($_POST['ans2']=="d")
print '<input type="radio" checked="checked" name="ans2">Text data<br/>';
else
print '<input type="radio" name="ans2" value="d"/>php&<br/>Text data</p>';

//quesion 3
print '<p>3.Which of the following is not a data mining functionality?</p>';
if($_POST['ans3']=="a")
print '<input type="radio" checked="checked" name="ans3">Characterization and Discrimination<br/>';
else
print '<p><input type="radio" name="ans3" value="a"/>Characterization and Discrimination<br/>';
if($_POST['ans3']=="b"){
print '<input type="radio" checked="checked" name="ans3">Classification and regression<br/>';
$correct++;
}
else
print '<input type="radio" name="ans3" value="b"/>Classification and regression<br/>';
if($_POST['ans3']=="c")
print '<input type="radio" checked="checked" name="ans3">Selection and interpretation<br/>';
else
print '<input type="radio" name="ans3" value="c"/>Selection and interpretation<br/>';
if($_POST['ans3']=="d")
print '<input type="radio" checked="checked" name="ans3"> Clustering and Analysis<br/>';
else
print '<input type="radio" name="ans3" value="d"/> Clustering and Analysis<br/></p>';
//quesion 4
print '<p>1.............................. is a summarization of the general characteristics or features of a target class of data.</p>';
if($_POST['ans4']=="a")
print '<input type="radio" checked="checked" name="ans4">Data Characterization <br/>';
else
print '<p><input type="radio" name="ans4" value="a"/>Data Characterization <br/>';
if($_POST['ans4']=="b"){
print '<input type="radio" checked="checked" name="ans4">Data Classification <br/>';
$correct++;
}
else
print '<input type="radio" name="ans4" value="b"/>Data Classification <br/>';
if($_POST['ans4']=="c")
print '<input type="radio" checked="checked" name="ans4">Data discrimination<br/>';
else
print '<input type="radio" name="ans4" value="c"/>Data discrimination<br/>';
if($_POST['ans4']=="d")
print '<input type="radio" checked="checked" name="ans4"> Data selection<br/>';
else
print '<input type="radio" name="ans4" value="d"/> Data selection<br/></p>';

//quesion 5
print '<p>2.............................. is a comparison of the general features of the target class data objects against the general features of objects from one or multiple contrasting classes. 
</p>';
if($_POST['ans5']=="a")
print '<input type="radio" checked="checked" name="ans5">Data Characterization <br/>';
else
print '<p><input type="radio" name="ans5" value="a"/>Data Characterization <br/>';
if($_POST['ans5']=="b"){
print '<input type="radio" checked="checked" name="ans5"> Data Classification <br/>';
$correct++;
}
else
print '<input type="radio" name="ans5" value="b"/> Data Classification <br/>';
if($_POST['ans5']=="c")
print '<input type="radio" checked="checked" name="ans5">Data discrimination<br/>';
else
print '<input type="radio" name="ans5" value="c"/>Data discrimination<br/>';
if($_POST['ans5']=="d")
print '<input type="radio" checked="checked" name="ans5">Data selection <br/>';
else
print '<input type="radio" name="ans5" value="d"/>Data selection <br/></p>';

//quesion 6
print '<p>3Strategic value of data mining is ......................</p>';
if($_POST['ans6']=="a")
print '<input type="radio" checked="checked" name="ans6">cost-sensitive<br/>';
else
print '<p><input type="radio" name="ans6" value="a"/>cost-sensitive<br/>';
if($_POST['ans6']=="b"){
print '<input type="radio" checked="checked" name="ans6">work-sensitive<br/>';
$correct++;
}
else
print '<input type="radio" name="ans6" value="b"/>work-sensitive<br/>';
if($_POST['ans6']=="c")
print '<input type="radio" checked="checked" name="ans6">time-sensitive<br/>';
else
print '<input type="radio" name="ans6" value="c"/>time-sensitive<br/>';
if($_POST['ans6']=="d")
print '<input type="radio" checked="checked" name="ans6">technical-sensitive<br/>';
else
print '<input type="radio" name="ans6" value="d"/>technical-sensitive<br/></p>';
//quesion 7
print '<p>1.............................. is the process of finding a model that describes and distinguishes data classes or concepts. </p>';
if($_POST['ans7']=="a")
print '<input type="radio" checked="checked" name="ans7">Data Characterization <br/>';
else
print '<p><input type="radio" name="ans7" value="a"/>Data Characterization <br/>';
if($_POST['ans7']=="b"){
print '<input type="radio" checked="checked" name="ans7">Data Classification <br/>';
$correct++;
}
else
print '<input type="radio" name="ans7" value="b"/>Data Classification <br/>';
if($_POST['ans7']=="c")
print '<input type="radio" checked="checked" name="ans7">Data discrimination<br/>';
else
print '<input type="radio" name="ans7" value="c"/>Data discrimination<br/>';
if($_POST['ans7']=="d")
print '<input type="radio" checked="checked" name="ans7">Data selection<br/>';
else
print '<input type="radio" name="ans7" value="d"/>Data selection<br/></p>';

//quesion 8
print '<p>2.The various aspects of data mining methodologies is/are ...................</p>';
if($_POST['ans8']=="a")
print '<input type="radio" checked="checked" name="ans8">Mining various and new kinds of knowledge<br/>';
else
print '<p><input type="radio" name="ans8" value="a"/> Mining various and new kinds of knowledge
<br/>';
if($_POST['ans8']=="b"){
print '<input type="radio" checked="checked" name="ans8">Pattern evaluation and pattern or constraint-guided mining.<br/>';
$correct++;
}
else
print '<input type="radio" name="ans8" value="b"/>Pattern evaluation and pattern or constraint-guided mining.<br/>';
if($_POST['ans8']=="c")
print '<input type="radio" checked="checked" name="ans8">Handling uncertainty, noise, or incompleteness of data<br/>';
else
print '<input type="radio" name="ans8" value="c"/>Handling uncertainty, noise, or incompleteness of data<br/>';
if($_POST['ans8']=="d")
print '<input type="radio" checked="checked" name="ans8"> Mining knowledge in multidimensional space<br/>';
else
print '<input type="radio" name="ans8" value="d"/> Mining knowledge in multidimensional space<br/></p>';

//quesion 9
print '<p>3.The full form of KDD is ..................
</p>';
if($_POST['ans9']=="a")
print '<input type="radio" checked="checked" name="ans9">Knowledge Database<br/>';
else
print '<p><input type="radio" name="ans9" value="a"/>Knowledge Database<br/>';
if($_POST['ans9']=="b"){
print '<input type="radio" checked="checked" name="ans9">Knowledge Discovery Database<br/>';
$correct++;
}
else
print '<input type="radio" name="ans9" value="b"/>Knowledge Discovery Database<br/>';
if($_POST['ans9']=="c")
print '<input type="radio" checked="checked" name="ans9">Knowledge Data House<br/>';
else
print '<input type="radio" name="ans9" value="c"/>Knowledge Data House<br/>';
if($_POST['ans9']=="d")
print '<input type="radio" checked="checked" name="ans9">Knowledge Data Definition<br/>';
else
print '<input type="radio" name="ans9" value="d"/>Knowledge Data Definition<br/></p>';

//quesion 10
print '<p>3. The out put of KDD is .............</p>';
if($_POST['ans10']=="a")
print '<input type="radio" checked="checked" name="ans10">Data<br/>';
else
print '<p><input type="radio" name="ans10" value="a"/>Information<br/>';
if($_POST['ans10']=="b"){
print '<input type="radio" checked="checked" name="ans10">Query<br/>';
$correct++;
}
else
print '<input type="radio" name="ans10" value="b"/>Useful information<br/>';
if($_POST['ans10']=="c")
print '<input type="radio" checked="checked" name="ans10">phpecho<br/>';
else
print '<input type="radio" name="ans10" value="c"/>phpecho<br/>';
if($_POST['ans10']=="d")
print '<input type="radio" checked="checked" name="ans10">php&<br/>';
else
print '<input type="radio" name="ans10" value="d"/>php&<br/></p>';

foreach($_POST as $value){
if(isset($value)){
$done++;
}
}
if($done!=11)
print'<input type="submit" value="check ans" name="submit"/><br/><br/>';
if(($done>0)&&($done<11))
print'submit your answer';
if($done==11){
 if($correct==0)
$correct="0";
echo"subject:-c#";
print"your score is $correct/10.<br/><br/>";
print'the correct answer:1.&nbsp;&nbsp;2.&nbsp;&nbsp;3.';
}
print'</form>';
?>
</body>
</html>
