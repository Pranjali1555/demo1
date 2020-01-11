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
<H1><center><b><u>Micro processor</u></b></h1></center>
<h1>
<div  id="countdown" align="right"></div></h1>
<i><b><h2>
<form action="microprocessor.php" method="post">
<p>1. The mnemonic that is placed before the arithmetic operation is performed is</p>
<input type="radio"name="ans1" value="a">AAA</input><br/>
<input type="radio" name="ans1" value="b">AAS</input><br/>
<input type="radio" name="ans1" value="c">AAS</input><br/>
<input type="radio" name="ans1" value="d">AAD </input><br/>

<p>2. The Carry flag is undefined after performing the operation</p><br/>
<input type="radio" name="ans2" value="a">AAA</input><br/>
<input type="radio"  name="ans2" value="b">ADC</input><br/>
<input type="radio"  name="ans2" value="c">AAM</input><br/>
<input type="radio"  name="ans2" value="d">AAD</input><br/>


<p>3. The instruction that performs logical AND operation and the result of the operation is not available is</p>
<input type="radio" name="ans3" value="a">AAA</input><br/>
<input type="radio" name="ans3" value="b">AND</input><br/>
<input type="radio"  name="ans3" value="c">TEST</input><br/>
<input type="radio" name="ans3" value="d">XOR</input><br/>


<p>4. In the RCL instruction, the contents of the destination operand undergoes function as</p>
<input type="radio" name="ans4" value="a">carry flag is pushed into LSB & MSB is pushed into carry flag</input><br/>
<input type="radio" name="ans4" value="b">carry flag is pushed into MSB & LSB is pushed into carry flag</input><br/>
<input type="radio" name="ans4" value="c">auxiliary flag is pushed into LSB & MSB is pushed into carry flag</input><br/>
<input type="radio" name="ans4" value="d">parity flag is pushed into MSB & LSB is pushed into carry flag</input><br/>


<p>5. The instruction that is used as prefix to an instruction to execute it repeatedly until the CX register becomes zero is</p>
<input type="radio"  name="ans5" value="a">SCAS</input><br/>
<input type="radio"  name="ans5" value="b">REP</input><br/>
<input type="radio"  name="ans5" value="c">CMPS</input><br/>
<input type="radio"  name="ans5" value="d">STOS</input><br/>


<p>6. Match the following<br>
<br>
a) MOvSB/SW   &nbsp;&nbsp;    1) loads AL/AX register by content of a string<br>
b) CMPS     &nbsp;&nbsp;        2) moves a string of bytes stored in source to destination<br>
c) SCAS    &nbsp;&nbsp;         3) compares two strings of bytes or words whose length is stored in CX register<br>
d) LODS    &nbsp;&nbsp;         4) scans a string of bytes or words</p>
<input type="radio"  name="ans6" value="a">a-3,b-4,c-2,d-1</input><br/>
<input type="radio" name="ans6" value="b"> a-2,b-1,c-4,d-3</input><br/>
<input type="radio" name="ans6" value="c">a-2,b-3,c-1,d-4</input><br/>
<input type="radio" name="ans6" value="d">a-2,b-3,c-4,d-1</input><br/>


<p>7. The instructions that are used to call a subroutine from a main program and return to the main program after execution of called function are</p>
<input type="radio"  name="ans7" value="a">CALL,JMP</input><br/>
<input type="radio"  name="ans7" value="b">JMP,IRET</input><br/>
<input type="radio" name="ans7" value="c">CALL,RET</input><br/>
<input type="radio"  name="ans7" value="d">JMP,RET</input><br/>


<p>8. The instruction that unconditionally transfers the control of execution to the specified address is</p>
<input type="radio"  name="ans8" value="a">CALL</input><br/>
<input type="radio"  name="ans8" value="b">JMP</input><br/>
<input type="radio"  name="ans8" value="c">RET</input><br/>
<input type="radio"  name="ans8" value="d">IRET</input><br/>


<p>9. Which instruction cannot force the 8086 processor out of ‘halt’ state?</p>
<input type="radio"  name="ans9" value="a">Interrupt request</input><br/>
<input type="radio"  name="ans9" value="b">Reset</input><br/>
<input type="radio"  name="ans9" value="c">both interrupt request and reset</input><br/>
<input type="radio"  name="ans9" value="d">HOLD</input><br/>



<p>10. NOP instruction introduces</p>
<input type="radio" name="ans10" value="a">Address<br/>
<input type="radio"  name="ans10" value="b">Delay<br/>
<input type="radio"  name="ans10" value="c">Memory Location<br/>
<input type="radio"  name="ans10" value="d">none<br/>
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
if($_POST['ans1']=='d')/* here qutions are cheaked */	
{
$count=$count+1;		
}	

if($_POST['ans2']=='d')	
{
$count=$count+1;	
	
}	

if($_POST['ans3']=='c')	
{
$count=$count+1;	
	
}	
	
	
if($_POST['ans4']=='a')/* here qutions are cheaked */	
{
$count=$count+1;	
	
}	


if($_POST['ans5']=='b')	
{
$count=$count+1;	
	
}	

if($_POST['ans6']=='d')	
{
$count=$count+1;	
	
}	
	


if($_POST['ans7']=='c')/* here qutions are cheaked */	
{
$count=$count+1;	
	
}	


if($_POST['ans8']=='b')	
{
$count=$count+1;	
	
}	

if($_POST['ans9']=='d')	
{
$count=$count+1;	
	
}	
	
if($_POST['ans10']=='b')	
{
$count=$count+1;	
	
}	
	
echo"</br>your score is". $count."/10<br/><br/>";
$_SESSION['correct']="$count";	
}
?>













