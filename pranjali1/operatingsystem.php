<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body  bgcolor="#CC6699">
<?php
echo"<i><b><h4>";
print '<form action="operatingsystem.php" method="post">';
//quesion 1
print '<p>1. Round robin scheduling is essentially the preemptive version of ________ ?</p>';
if($_POST['ans1']=="a"){
print '<input type="radio" checked="checked" name="ans1">FIFO<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans1" value="a"/>FIFO<br/>';
if($_POST['ans1']=="b")
print '<input type="radio" checked="checked" name="ans1">Shortest job first<br/>';
else
print '<input type="radio" name="ans1" value="b"/>Shortest job first<br/>';
if($_POST['ans1']=="c")
print '<input type="radio" checked="checked" name="ans1"> Shortest remaining<br/>';
else
print '<input type="radio" name="ans1" value="c"/> Shortest remaining<br/>';
if($_POST['ans1']=="d")
print '<input type="radio" checked="checked" name="ans1">Longest time first<br/>';

else
print '<input type="radio" name="ans1" value="d"/>Longest time first<br/></p>';

//quesion 2
print '<p>2. A page fault occurs ?</p>';
if($_POST['ans2']=="a"){
print '<input type="radio" checked="checked" name="ans2">when the page is not in the memory<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans2" value="a"/>when the page is not in the memory<br/>';
if($_POST['ans2']=="b")
print '<input type="radio" checked="checked" name="ans2">when the page is in the memory<br/>';
else
print '<input type="radio" name="ans2" value="b"/>when the page is in the memory<br/>';
if($_POST['ans2']=="c")
print '<input type="radio" checked="checked" name="ans2">when the process enters the blocked state<br/>';
else
print '<input type="radio" name="ans2" value="c"/>when the process enters the blocked state<br/>';
if($_POST['ans2']=="d")
print '<input type="radio" checked="checked" name="ans2">when the process is in the ready state<br/>';
else
print '<input type="radio" name="ans2" value="d"/>when the process is in the ready state<br/></p>';

//quesion 3
print '<p>3. Which of the following will determine your choice of systems software for your computer? </p>';
if($_POST['ans3']=="a")
print '<input type="radio" checked="checked" name="ans3"> Is the applications software you want to use compatible with it ?<br/>';
else
print '<p><input type="radio" name="ans3" value="a"/> Is the applications software you want to use compatible with it ?<br/>';
if($_POST['ans3']=="b")
print '<input type="radio" checked="checked" name="ans3">Is it expensive ?<br/>';
else
print '<input type="radio" name="ans3" value="b"/>Is it expensive ?<br/>';
if($_POST['ans3']=="c")
print '<input type="radio" checked="checked" name="ans3"> Is it compatible with your hardware ?<br/>';
else
print '<input type="radio" name="ans3" value="c"/> Is it compatible with your hardware ?<br/>';
if($_POST['ans3']=="d"){
print '<input type="radio" checked="checked" name="ans3">Both 1 and 3<br/>';
$correct++;
}
else
print '<input type="radio" name="ans3" value="d"/>Both 1 and 3<br/></p>';
//quesion 4
print '<p>4. What is a shell ? </p>';
if($_POST['ans4']=="a")
print '<input type="radio" checked="checked" name="ans4">is a hardware component<br/>';
else
print '<p><input type="radio" name="ans4" value="a"/>is a hardware component<br/>';
if($_POST['ans4']=="b"){
print '<input type="radio" checked="checked" name="ans4">It is a command interpreter<br/>';
$correct++;
}
else
print '<input type="radio" name="ans4" value="b"/>It is a command interpreter<br/>';
if($_POST['ans4']=="c")
print '<input type="radio" checked="checked" name="ans4">It is a part in compiler<br/>';
else
print '<input type="radio" name="ans4" value="c"/>It is a part in compiler<br/>';
if($_POST['ans4']=="d")
print '<input type="radio" checked="checked" name="ans4">It is a tool in CPU scheduling<br/>';
else
print '<input type="radio" name="ans4" value="d"/>It is a tool in CPU scheduling<br/></p>';

//quesion 5
print '<p>5. Routine is not loaded until it is called. All routines are kept on disk in a relocatable load format. The main program is loaded into memory & is executed. This type of loading is called... ? </p>';
if($_POST['ans5']=="a")
print '<input type="radio" checked="checked" name="ans5">Static loading<br/>';
else
print '<p><input type="radio" name="ans5" value="a"/>Static loading<br/>';
if($_POST['ans5']=="b")
print '<input type="radio" checked="checked" name="ans5">Dynamic loading<br/>';
else
print '<input type="radio" name="ans5" value="b"/>Dynamic loading<br/>';
if($_POST['ans5']=="c")
print '<input type="radio" checked="checked" name="ans5">Dynamic linking<br/>';
else
print '<input type="radio" name="ans5" value="c"/>Dynamic linking<br/>';
if($_POST['ans5']=="d"){
print '<input type="radio" checked="checked" name="ans5"> Overlays<br/>';
$correct++;
}
else
print '<input type="radio" name="ans5" value="d"/> Overlays<br/></p>';

//quesion 6
print '<p>6. In the blocked state ? </p>';
if($_POST['ans6']=="a"){
print '<input type="radio" checked="checked" name="ans6"> the processes waiting for I/O are found<br/>';
$correct++;
}
else
print '<p><input type="radio" name="ans6" value="a"/> the processes waiting for I/O are found<br/>';
if($_POST['ans6']=="b")
print '<input type="radio" checked="checked" name="ans6">the process which is running is found<br/>';
else
print '<input type="radio" name="ans6" value="b"/>the process which is running is found<br/>';
if($_POST['ans6']=="c")
print '<input type="radio" checked="checked" name="ans6">the processes waiting for the processor are found<br/>';
else
print '<input type="radio" name="ans6" value="c"/>the processes waiting for the processor are found<br/>';
if($_POST['ans6']=="d")
print '<input type="radio" checked="checked" name="ans6">none of the above<br/>';
else
print '<input type="radio" name="ans6" value="d"/>none of the above<br/></p>';
//quesion 7
print '<p>7. What is the memory from 1K - 640K called ?</p>';
if($_POST['ans7']=="a")
print '<input type="radio" checked="checked" name="ans7">Extended Memory<br/>';
else
print '<p><input type="radio" name="ans7" value="a"/>Extended Memory<br/>';
if($_POST['ans7']=="b")
print '<input type="radio" checked="checked" name="ans7"> Normal Memory<br/>';
else
print '<input type="radio" name="ans7" value="b"/> Normal Memory<br/>';
if($_POST['ans7']=="c")
print '<input type="radio" checked="checked" name="ans7">Low Memory<br/>';
else
print '<input type="radio" name="ans7" value="c"/>Low Memory<br/>';
if($_POST['ans7']=="d"){
print '<input type="radio" checked="checked" name="ans7">Conventional Memory<br/>';
$correct++;
}
else
print '<input type="radio" name="ans7" value="d"/>Conventional Memory<br/></p>';

//quesion 8
print '<p>8. Virtual memory is ..... ?</p>';
if($_POST['ans8']=="a")
print '<input type="radio" checked="checked" name="ans8">An extremely large main memory<br/>';
else
print '<p><input type="radio" name="ans8" value="a"/>An extremely large main memory<br/>';
if($_POST['ans8']=="b")
print '<input type="radio" checked="checked" name="ans8"> An extremely large secondary memory<br/>';
else
print '<input type="radio" name="ans8" value="b"/> An extremely large secondary memory<br/>';
if($_POST['ans8']=="c")
print '<input type="radio" checked="checked" name="ans8"> An illusion of extremely large main memory<br/>';
else
print '<input type="radio" name="ans8" value="c"/> An illusion of extremely large main memory<br/>';
if($_POST['ans8']=="d"){
print '<input type="radio" checked="checked" name="ans8"> A type of memory used in super computers<br/>';
$correct++;
}
else
print '<input type="radio" name="ans8" value="d"/> A type of memory used in super computers<br/></p>';

//quesion 9
print '<p>9. Which is not the state of the process ?</p>';
if($_POST['ans9']=="a")
print '<input type="radio" checked="checked" name="ans9"> Blocked<br/>';
else
print '<p><input type="radio" name="ans9" value="a"/> Blocked<br/>';
if($_POST['ans9']=="b")
print '<input type="radio" checked="checked" name="ans9">Running<br/>';
else
print '<input type="radio" name="ans9" value="b"/>Running<br/>';
if($_POST['ans9']=="c")
print '<input type="radio" checked="checked" name="ans9">Ready<br/>';
else
print '<input type="radio" name="ans9" value="c"/>Ready<br/>';
if($_POST['ans9']=="d"){
print '<input type="radio" checked="checked" name="ans9">Privileged<br/>';
$correct++;
}
else
print '<input type="radio" name="ans9" value="d"/>Privileged<br/></p>';

//quesion 10
print '<p>10. The number of processes completed per unit time is known as.... ?</p>';
if($_POST['ans10']=="a")
print '<input type="radio" checked="checked" name="ans10"> Output<br/>';
else
print '<p><input type="radio" name="ans10" value="a"/> Output<br/>';
if($_POST['ans10']=="b"){
print '<input type="radio" checked="checked" name="ans10">Throughput<br/>';
$correct++;
}
else
print '<input type="radio" name="ans10" value="b"/>Throughput<br/>';
if($_POST['ans10']=="c")
print '<input type="radio" checked="checked" name="ans10">Efficiency<br/>';
else
print '<input type="radio" name="ans10" value="c"/>Efficiency<br/>';
if($_POST['ans10']=="d")
print '<input type="radio" checked="checked" name="ans10">Capacity<br/>';
else
print '<input type="radio" name="ans10" value="d"/>Capacity<br/></p>';

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
echo"</h4></b></i>";
?>
</body>
</html>
