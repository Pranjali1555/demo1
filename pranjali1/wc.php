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
print '<form action="wc.php" method="post">';
//quesion 1
print '<p>1.What is the frequency range of the IEEE 802.11a standard??
</p>';
if($_POST['ans1']=="a")
print '<input type="radio" checked="checked" name="ans1">2.4Gbps<br/>';
else
print '<p><input type="radio" name="ans1" value="a"/>2.4Gbps<br/>';
if($_POST['ans1']=="b"){
print '<input type="radio" checked="checked" name="ans1">5Gbps<br/>';

}
else
print '<input type="radio" name="ans1" value="b"/>5Gbps<br/>';
if($_POST['ans1']=="c")
print '<input type="radio" checked="checked" name="ans1">2.4GHz<br/>';
else
print '<input type="radio" name="ans1" value="c"/>2.4GHz<br/>';
if($_POST['ans1']=="d"){
print '<input type="radio" checked="checked" name="ans1">5GHz<br/>';
$correct++;
}

else
print '<input type="radio" name="ans1" value="d"/>5GHz<br/></p>';

//quesion 2
print '<p>2.What is the maximum distance running the lowest data rate for 802.11b?
</p>';
if($_POST['ans2']=="a")
print '<input type="radio" checked="checked" name="ans2">About 100 feet<br/>';
else
print '<p><input type="radio" name="ans2" value="a"/>About 100 feet<br/>';
if($_POST['ans2']=="b"){
print '<input type="radio" checked="checked" name="ans2">About 175 feet<br/>';
$correct++;
}
else
print '<input type="radio" name="ans2" value="b"/>About 175 feet<br/>';
if($_POST['ans2']=="c")
print '<input type="radio" checked="checked" name="ans2">About 300 feet<br/>';
else
print '<input type="radio" name="ans2" value="c"/>About 300 feet<br/>';
if($_POST['ans2']=="d")
print '<input type="radio" checked="checked" name="ans2">About 350 feet<br/>';
else
print '<input type="radio" name="ans2" value="d"/>About 350 feet<br/></p>';

//quesion 3
print '<p>3.What is the maximum distance with maximum data rate for 802.11a?</p>';
if($_POST['ans3']=="a"){
print '<input type="radio" checked="checked" name="ans3">About 65-75 feet<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans3" value="a"/>About 65-75 feet<br/>';
if($_POST['ans3']=="b")
print '<input type="radio" checked="checked" name="ans3">About 90-100 feet<br/>';

else
print '<input type="radio" name="ans3" value="b"/>About 90-100 feet<br/>';
if($_POST['ans3']=="c")
print '<input type="radio" checked="checked" name="ans3">About 150 feet<br/>';
else
print '<input type="radio" name="ans3" value="c"/>About 150 feet<br/>';
if($_POST['ans3']=="d")
print '<input type="radio" checked="checked" name="ans3">Over 200 feet<br/>';
else
print '<input type="radio" name="ans3" value="d"/>Over 200 feet<br/></p>';
//quesion 4
print '<p>1.What is the frequency range of the IEEE 802.11b standard?</p>';
if($_POST['ans4']=="a")
print '<input type="radio" checked="checked" name="ans4">2.4Gbps<br/>';
else
print '<p><input type="radio" name="ans4" value="a"/>2.4Gbps<br/>';
if($_POST['ans4']=="b")
print '<input type="radio" checked="checked" name="ans4">5Gbps<br/>';
else
print '<input type="radio" name="ans4" value="b"/>5Gbps<br/>';
if($_POST['ans4']=="c"){
print '<input type="radio" checked="checked" name="ans4">2.4GHz<br/>';
$correct++;
}

else
print '<input type="radio" name="ans4" value="c"/>2.4GHz<br/>';
if($_POST['ans4']=="d")
print '<input type="radio" checked="checked" name="ans4">5GHz<br/>';
else
print '<input type="radio" name="ans4" value="d"/>5GHz<br/></p>';

//quesion 5
print '<p>2.You have a Cisco mesh network. What protocol allows multiple APs to connect with many redundant connections between nodes?</p>';
if($_POST['ans5']=="a")
print '<input type="radio" checked="checked" name="ans5">LWAPP<br/>';
else
print '<p><input type="radio" name="ans5" value="a"/>LWAPP<br/>';
if($_POST['ans5']=="b"){
print '<input type="radio" checked="checked" name="ans5">AWPP<br/>';
$correct++;
}
else
print '<input type="radio" name="ans5" value="b"/>AWPP<br/>';
if($_POST['ans5']=="c")
print '<input type="radio" checked="checked" name="ans5">STP<br/>';
else
print '<input type="radio" name="ans5" value="c"/>STP<br/>';
if($_POST['ans5']=="d")
print '<input type="radio" checked="checked" name="ans5">IEEE<br/>';
else
print '<input type="radio" name="ans5" value="d"/>IEEE<br/></p>';

//quesion 6
print '<p>3.What is the maximum data rate for the 802.11g standard?</p>';
if($_POST['ans6']=="a")
print '<input type="radio" checked="checked" name="ans6">6Mbps<br/>';
else
print '<p><input type="radio" name="ans6" value="a"/>6Mbps<br/>';
if($_POST['ans6']=="b")
print '<input type="radio" checked="checked" name="ans6">11Mbps<br/>';

else
print '<input type="radio" name="ans6" value="b"/>11Mbps<br/>';
if($_POST['ans6']=="c")
print '<input type="radio" checked="checked" name="ans6">22Mbps<br/>';
else
print '<input type="radio" name="ans6" value="c"/>22Mbps<br/>';
if($_POST['ans6']=="d"){
print '<input type="radio" checked="checked" name="ans6">54Mbps<br/>';
$correct++;
}
else
print '<input type="radio" name="ans6" value="d"/>54Mbps<br/></p>';
//quesion 7
print '<p>1.What is the maximum data rate for the 802.11a standard?</p>';
if($_POST['ans7']=="a")
print '<input type="radio" checked="checked" name="ans7">6Mbps<br/>';
else
print '<p><input type="radio" name="ans7" value="a"/>6Mbps<br/>';
if($_POST['ans7']=="b")
print '<input type="radio" checked="checked" name="ans7">11Mbps<br/>';

else
print '<input type="radio" name="ans7" value="b"/>11Mbps<br/>';
if($_POST['ans7']=="c")
print '<input type="radio" checked="checked" name="ans7">22Mbps<br/>';
else
print '<input type="radio" name="ans7" value="c"/>22Mbps<br/>';
if($_POST['ans7']=="d"){
print '<input type="radio" checked="checked" name="ans7">54Mbps<br/>';
$correct++;
}

else
print '<input type="radio" name="ans7" value="d"/>54Mbps<br/></p>';

//quesion 8
print '<p>2.How many non-overlapping channels are available with 802.11b?</p>';
if($_POST['ans8']=="a"){
print '<input type="radio" checked="checked" name="ans8">3<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans8" value="a"/>3<br/>';
if($_POST['ans8']=="b")
print '<input type="radio" checked="checked" name="ans8">13<br/>';

else
print '<input type="radio" name="ans8" value="b"/>13<br/>';
if($_POST['ans8']=="c")
print '<input type="radio" checked="checked" name="ans8">23<br/>';
else
print '<input type="radio" name="ans8" value="c"/>23<br/>';
if($_POST['ans8']=="d")
print '<input type="radio" checked="checked" name="ans8">40<br/>';
else
print '<input type="radio" name="ans8" value="d"/>40<br/></p>';

//quesion 9
print '<p>3.How many non-overlapping channels are available with 802.11a?</p>';
if($_POST['ans9']=="a")
print '<input type="radio" checked="checked" name="ans9">3<br/>';
else
print '<p><input type="radio" name="ans9" value="a"/>3<br/>';
if($_POST['ans9']=="b"){
print '<input type="radio" checked="checked" name="ans9">12<br/>';
$correct++;
}
else
print '<input type="radio" name="ans9" value="b"/>12<br/>';
if($_POST['ans9']=="c")
print '<input type="radio" checked="checked" name="ans9">23<br/>';
else
print '<input type="radio" name="ans9" value="c"/>23<br/>';
if($_POST['ans9']=="d")
print '<input type="radio" checked="checked" name="ans9">40<br/>';
else
print '<input type="radio" name="ans9" value="d"/>40<br/></p>';

//quesion 10
print '<p>3.In Ciscos Unified Wireless Solution, what is the split-MAC architecture?</p>';
if($_POST['ans10']=="a")
print '<input type="radio" checked="checked" name="ans10">The split-MAC architecture uses MAC addresses to create a forward/filter table and break up collision domains.<br/>';
else
print '<p><input type="radio" name="ans10" value="a"/>The split-MAC architecture uses MAC addresses to create a forward/filter table and break up collision domains.<br/>';
if($_POST['ans10']=="b"){
print '<input type="radio" checked="checked" name="ans10">The split-MAC architecture allows the splitting of 802.11 protocol packets between the AP and the controller to allow processing by both devices.<br/>';
$correct++;
}
else
print '<input type="radio" name="ans10" value="b"/>The split-MAC architecture allows the splitting of 802.11 protocol packets between the AP and the controller to allow processing by both devices.<br/>';
if($_POST['ans10']=="c")
print '<input type="radio" checked="checked" name="ans10">The split-MAC architecture uses MAC addresses on the wireless network and IP addresses on the wired network.<br/>';
else
print '<input type="radio" name="ans10" value="c"/>pThe split-MAC architecture uses MAC addresses on the wireless network and IP addresses on the wired network.<br/>';
if($_POST['ans10']=="d")
print '<input type="radio" checked="checked" name="ans10">The split-MAC architecture uses MAC addresses to create a forward/filter table and break up broadcast domains.<br/>';
else
print '<input type="radio" name="ans10" value="d"/>The split-MAC architecture uses MAC addresses to create a forward/filter table and break up broadcast domains.<br/></p>';
session_start();
foreach($_POST as $value){
if(isset($value)){
$done++;
}
}
if($done!=11)
print'<input type="submit" value="submit"  onClick=window.open("result1.php") name="submit"/><br/><br/>';
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
