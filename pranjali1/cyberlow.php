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
<title>CYBERLOW</title>
</head>

<body>
<center><h1>Cyber Low</h1></center>
<form action="cyberlow.php" method="post">
<table>
<tr><td>
Q1.Intellectual Property Rights (IPR) protect the use of information and ideas that are of</td></tr>
<tr><td>
<input type="radio" name="1" value="a" />Ethical value&nbsp;&nbsp;
<input type="radio" name="1"  value="b"/>Moral value&nbsp;&nbsp;
<input type="radio" name="1"  value="c"/>Social value&nbsp;&nbsp;
<input type="radio" name="1"  value="d"/>Commercial value
</td></tr><br /><br />
<tr><td>Q2.The term ‘Intellectual Property Rights’ covers</td></tr>
<tr><td>
<input type="radio" name="a" />Copyrights&nbsp;&nbsp;
<input type="radio" name="b" />Know-how&nbsp;&nbsp;
<input type="radio" name="c" />Trade dress&nbsp;&nbsp;
<input type="radio" name="d" />All of the above
</td></tr><br /><br />
<tr><td>Q3.The following can not be exploited by assigning or by licensing the rights to others.</td></tr>
<tr><td>
<input type="radio" name="a" />Patents&nbsp;&nbsp;
<input type="radio" name="b" />Designs&nbsp;&nbsp;
<input type="radio" name="c" />Trademark&nbsp;&nbsp;
<input type="radio" name="d" />All of the above

</td></tr><br /><br />
<tr><td>Q4.The following can be patented</td></tr>
<tr><td>
<input type="radio" name="a" />Machin&nbsp;&nbsp;
<input type="radio" name="b" />Process&nbsp;&nbsp;
<input type="radio" name="c" />Composition of matter&nbsp;&nbsp;
<input type="radio" name="d" />All of the above
</td></tr>
<tr><td>Q5.In ‘quid-pro-quo’, quo stands for</td></tr>
<tr><td>
<input type="radio" name="a" />knowledge disclosed to the public&nbsp;&nbsp;
<input type="radio" name="b" />monopoly granted for the term of the patent&nbsp;&nbsp;
<input type="radio" name="c" />exclusive privilege of making, selling and using the invention&nbsp;&nbsp;
<input type="radio" name="d" />None of the above
</td></tr><br /><br />
<tr><td>Q6.Trade mark</td></tr>
<tr><td>
<input type="radio" name="a" />represented graphically&nbsp;&nbsp;
<input type="radio" name="b" />is capable of distinguishing the goods or services of one person from those of others&nbsp;&nbsp;
<input type="radio" name="c" />may includes shapes of goods or combination of colours&nbsp;&nbsp;
<input type="radio" name="d" />All of the above
</td></tr><br /><br />
<tr><td>Q7.Symbol of Maharaja of Air India is</td></tr>
<tr><td>
<input type="radio" name="a" />Copyright&nbsp;&nbsp;
<input type="radio" name="b" />Patent&nbsp;&nbsp;
<input type="radio" name="c" />Trademark&nbsp;&nbsp;
<input type="radio" name="d" />All of the above
</td></tr><br /><br />
<tr><td>Q8.In India, the literary work is protected until</td></tr>
<tr><td>
<input type="radio" name="a" />Lifetime of author&nbsp;&nbsp;
<input type="radio" name="b" />25 years after the death of author&nbsp;&nbsp;
<input type="radio" name="c" />40 years after the death of author&nbsp;&nbsp;
<input type="radio" name="d" />60 years after the death of author
</td></tr><br /><br />
<tr><td>Q9.Design does not include</td></tr>
<tr><td>
<input type="radio" name="a" />features of shape&nbsp;&nbsp;
<input type="radio" name="b" />composition of lines or colours&nbsp;&nbsp;
<input type="radio" name="c" />mode or principle of construction&nbsp;&nbsp;
<input type="radio" name="d" />None of the above
</td></tr><br /><br />
<tr><td>Q10.The agreement that is enforceable by law is known as</td></tr>
<tr><td>
<input type="radio" name="a" />Valid agreement&nbsp;&nbsp;
<input type="radio" name="b" />Void agreement&nbsp;&nbsp;
<input type="radio" name="c" />Illegal agreement&nbsp;&nbsp;
<input type="radio" name="d" />Unenforceable agreement
</td></tr>


</table></form>
</body>
</html>
