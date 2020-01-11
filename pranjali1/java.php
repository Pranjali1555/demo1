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
print '<form action="java.php" method="post">';
print'<i><b><h3>';
//quesion 1
print '<p>1.
Java is a ........... language.
</p>';
if($_POST['ans1']=="a")
print '<input type="radio" checked="checked" name="ans1"> weakly typed<br/>';
else
print '<p><input type="radio" name="ans1" value="a"/> weakly typed<br/>';
if($_POST['ans1']=="b"){
print '<input type="radio" checked="checked" name="ans1"> strogly typed<br/>';
$correct++;
}
else
print '<input type="radio" name="ans1" value="b"/> strogly typed<br/>';
if($_POST['ans1']=="c")
print '<input type="radio" checked="checked" name="ans1"> moderate typed<br/>';
else
print '<input type="radio" name="ans1" value="c"/> moderate typed<br/>';
if($_POST['ans1']=="d")
print '<input type="radio" checked="checked" name="ans1">  None of these<br/>';
else
print '<input type="radio" name="ans1" value="d"/> None of these<br/></p>';

//quesion 2
print '<p>How many primitive data types are there in Java?
</p>';
if($_POST['ans2']=="a")
print '<input type="radio" checked="checked" name="ans2">6
<br/>';
else
print '<p><input type="radio" name="ans2" value="a"/>6
<br/>';
if($_POST['ans2']=="b"){
print '<input type="radio" checked="checked" name="ans2">8<br/>';
$correct++;
}
else
print '<input type="radio" name="ans2" value="b"/>8<br/>';
if($_POST['ans2']=="c")
print '<input type="radio" checked="checked" name="ans2">7<br/>';
else
print '<input type="radio" name="ans2" value="c"/>7<br/>';
if($_POST['ans2']=="d")
print '<input type="radio" checked="checked" name="ans2">9<br/>';
else
print '<input type="radio" name="ans2" value="d"/>9<br/></p>';

//quesion 3
print '<p>3.
In Java byte, short, int and long all of these are</p>';
if($_POST['ans3']=="a"){
print '<input type="radio" checked="checked" name="ans3"> signed<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans3" value="a"/> signed<br/>';
if($_POST['ans3']=="b")
print '<input type="radio" checked="checked" name="ans3">unsigned<br/>';

else
print '<input type="radio" name="ans3" value="b"/>unsigned<br/>';
if($_POST['ans3']=="c")
print '<input type="radio" checked="checked" name="ans3">Both of the above<br/>';
else
print '<input type="radio" name="ans3" value="c"/>Both of the above<br/>';
if($_POST['ans3']=="d")
print '<input type="radio" checked="checked" name="ans3">None of these<br/>';
else
print '<input type="radio" name="ans3" value="d"/>None of these<br/></p>';
//quesion 4
print '<p>4.
Size of int in Java is</p>';
if($_POST['ans4']=="a")
print '<input type="radio" checked="checked" name="ans4">16bit<br/>';
else
print '<p><input type="radio" name="ans4" value="a"/>16bit<br/>';
if($_POST['ans4']=="b"){
print '<input type="radio" checked="checked" name="ans4">32bit<br/>';
$correct++;
}
else
print '<input type="radio" name="ans4" value="b"/>32bit<br/>';
if($_POST['ans4']=="c")
print '<input type="radio" checked="checked" name="ans4">64bit<br/>';
else
print '<input type="radio" name="ans4" value="c"/>64bit<br/>';
if($_POST['ans4']=="d")
print '<input type="radio" checked="checked" name="ans4"> Depends on execution environment<br/>';
else
print '<input type="radio" name="ans4" value="d"/> Depends on execution environment<br/></p>';

//quesion 5
print '<p>5.
The smallest integer type is ......... and its size is ......... bits.</p>';
if($_POST['ans5']=="a")
print '<input type="radio" checked="checked" name="ans5">short, 8<br/>';
else
print '<p><input type="radio" name="ans5" value="a"/>short, 8<br/>';
if($_POST['ans5']=="b"){
print '<input type="radio" checked="checked" name="ans5"> byte, 8<br/>';
$correct++;
}
else
print '<input type="radio" name="ans5" value="b"/> byte, 8<br/>';
if($_POST['ans5']=="c")
print '<input type="radio" checked="checked" name="ans5">short, 16<br/>';
else
print '<input type="radio" name="ans5" value="c"/>short, 16<br/>';
if($_POST['ans5']=="d")
print '<input type="radio" checked="checked" name="ans5">byte, 16<br/>';
else
print '<input type="radio" name="ans5" value="d"/>byte,16<br/></p>';

//quesion 6
print '<p>6.
Size of float and double in Java is</p>';
if($_POST['ans6']=="a"){
print '<input type="radio" checked="checked" name="ans6">32 and 64<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans6" value="a"/>32 and 64<br/>';
if($_POST['ans6']=="b")
print '<input type="radio" checked="checked" name="ans6"> 64 and 64<br/>';

else
print '<input type="radio" name="ans6" value="b"/> 64 and 64<br/>';
if($_POST['ans6']=="c")
print '<input type="radio" checked="checked" name="ans6">32 and 32<br/>';
else
print '<input type="radio" name="ans6" value="c"/>32 and 32<br/>';
if($_POST['ans6']=="d")
print '<input type="radio" checked="checked" name="ans6">64 and 32<br/>';
else
print '<input type="radio" name="ans6" value="d"/>64 and 32<br/></p>';
//quesion 7
print '<p>7.Automatic type conversion in Java takes place when</p>';
if($_POST['ans7']=="a")
print '<input type="radio" checked="checked" name="ans7"> Two type are compatible and size of destination type is shorter than source type.<br/>';
else
print '<p><input type="radio" name="ans7" value="a"/> Two type are compatible and size of destination type is shorter than source type.<br/>';
if($_POST['ans7']=="b")
print '<input type="radio" checked="checked" name="ans7">Two type are compatible and size of destination type is equal of source type.<br/>';

else
print '<input type="radio" name="ans7" value="b"/>Two type are compatible and size of destination type is equal of source type.<br/>';
if($_POST['ans7']=="c"){
print '<input type="radio" checked="checked" name="ans7">Two type are compatible and size of destination type is larger than source type.<br/>';
$correct++;
}
else
print '<input type="radio" name="ans7" value="c"/>Two type are compatible and size of destination type is larger than source type.<br/>';
if($_POST['ans7']=="d")
print '<input type="radio" checked="checked" name="ans7">All of the above<br/>';
else
print '<input type="radio" name="ans7" value="d"/>All of the above<br/></p>';

//quesion 8
print '<p>8.Which of the following automatic type conversion will be possible?</p>';
if($_POST['ans8']=="a")
print '<input type="radio" checked="checked" name="ans8">short to int<br/>';
else
print '<p><input type="radio" name="ans8" value="a"/>short to int<br/>';
if($_POST['ans8']=="b")
print '<input type="radio" checked="checked" name="ans8">byte to int<br/>';

else
print '<input type="radio" name="ans8" value="b"/>byte to int<br/>';
if($_POST['ans8']=="c"){
print '<input type="radio" checked="checked" name="ans8">int to long<br/>';
$correct++;
}
else
print '<input type="radio" name="ans8" value="c"/>int to long<br/>';
if($_POST['ans8']=="d")
print '<input type="radio" checked="checked" name="ans8">long to int<br/>';
else
print '<input type="radio" name="ans8" value="d"/>long to int<br/></p>';

//quesion 9
print '<p>9.What would be the output of the following fraction of code ?<br>
int Integer = 34 ;<br>
char String = "S" ;<br>
System.out.print( Integer ) ;<br>
System.out.print( String ) ;</p>';
if($_POST['ans9']=="a")
print '<input type="radio" checked="checked" name="ans9"> Does not compile as Integer and String are API class names.<br/>';
else
print '<p><input type="radio" name="ans9" value="a"/> Does not compile as Integer and String are API class names.<br/>';
if($_POST['ans9']=="b")
print '<input type="radio" checked="checked" name="ans9"> Throws exception.<br/>';
else
print '<input type="radio" name="ans9" value="b"/> Throws exception.<br/>';
if($_POST['ans9']=="c"){
print '<input type="radio" checked="checked" name="ans9">34 S<br/>';
$correct++;
}

else
print '<input type="radio" name="ans9" value="c"/>34 S<br/>';
if($_POST['ans9']=="d")
print '<input type="radio" checked="checked" name="ans9">S<br/>';

else
print '<input type="radio" name="ans9" value="d"/>S<br/></p>';

//quesion 10
print '<p>10.What will be output of the following program code?<br>
public class Test{<br>
	public static void main(String[] a){<br>
		short x = 10;<br>
		x = x*5;<br>
		System.out.print(x);<br>
	}  <br>
}</p>';
if($_POST['ans10']=="a")
print '<input type="radio" checked="checked" name="ans10">50<br/>';
else
print '<p><input type="radio" name="ans10" value="a"/>50<br/>';
if($_POST['ans10']=="b"){
print '<input type="radio" checked="checked" name="ans10"> Compilation Error<br/>';
$correct++;
}
else
print '<input type="radio" name="ans10" value="b"/>Compilation Error<br/>';
if($_POST['ans10']=="c")
print '<input type="radio" checked="checked" name="ans10">None of these<br/>';
else
print '<input type="radio" name="ans10" value="c"/>None of these<br/>';
if($_POST['ans10']=="d")
print '<input type="radio" checked="checked" name="ans10">10<br/>';
else
print '<input type="radio" name="ans10" value="d"/>10<br/></p>';
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
print'<i><b><h3>';
print'</form>';
?>
</body>
</html>
