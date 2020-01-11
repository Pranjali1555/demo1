<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body  bgcolor="#CC6699">
<?php
echo"<i><b><h4>";
print '<form action="stqa.php" method="post">';
//quesion 1
print '<p>1. The number of hardware interrupts that the processor 8085 consists of is</p>';
if($_POST['ans1']=="a")
print '<input type="radio" checked="checked" name="ans1">1<br/>';
else
print '<p><input type="radio" name="ans1" value="a"/>1<br/>';
if($_POST['ans1']=="b")
print '<input type="radio" checked="checked" name="ans1"> 3<br/>';
else
print '<input type="radio" name="ans1" value="b"/>3<br/>';
if($_POST['ans1']=="c")
print '<input type="radio" checked="checked" name="ans1">5<br/>';
else
print '<input type="radio" name="ans1" value="c"/>5<br/>';
if($_POST['ans1']=="d"){
print '<input type="radio" checked="checked" name="ans1">7<br/>';
$correct++;
}
else
print '<input type="radio" name="ans1" value="d"/> 7<br/></p>';

//quesion 2
print '<p>2. The register that stores all the interrupt requests in it in order to serve them one by one on priority basis is</p>';
if($_POST['ans2']=="a")
print '<input type="radio" checked="checked" name="ans2">Interrupt Request Register<br/>';
else
print '<p><input type="radio" name="ans2" value="a"/>Interrupt Request Register<br/>';
if($_POST['ans2']=="b"){
print '<input type="radio" checked="checked" name="ans2">In-Service Register<br/>';
$correct++;
}
else
print '<input type="radio" name="ans2" value="b"/>In-Service Register<br/>';
if($_POST['ans2']=="c")
print '<input type="radio" checked="checked" name="ans2">Priority resolver<br/>';
else
print '<input type="radio" name="ans2" value="c"/>Priority resolver<br/>';
if($_POST['ans2']=="d")
print '<input type="radio" checked="checked" name="ans2"> Interrupt Mask Register<br/>';
else
print '<input type="radio" name="ans2" value="d"/> Interrupt Mask Register<br/></p>';

//quesion 3
print '<p>3. The register that stores the bits required to mask the interrupt inputs is</p>';
if($_POST['ans3']=="a")
print '<input type="radio" checked="checked" name="ans3"> In-service register<br/>';
else
print '<p><input type="radio" name="ans3" value="a"/> In-service register<br/>';
if($_POST['ans3']=="b"){
print '<input type="radio" checked="checked" name="ans3">Priority resolver<br/>';
$correct++;
}
else
print '<input type="radio" name="ans3" value="b"/>Priority resolver<br/>';
if($_POST['ans3']=="c")
print '<input type="radio" checked="checked" name="ans3"> Interrupt Mask register<br/>';
else
print '<input type="radio" name="ans3" value="c"/> Interrupt Mask register<br/>';
if($_POST['ans3']=="d")
print '<input type="radio" checked="checked" name="ans3">none<br/>';
else
print '<input type="radio" name="ans3" value="d"/>none<br/></p>';
//quesion 4
print '<p>4. The interrupt control logic</p>';
if($_POST['ans4']=="a")
print '<input type="radio" checked="checked" name="ans4">manages interrupts<br/>';
else
print '<p><input type="radio" name="ans4" value="a"/>manages interrupts<br/>';
if($_POST['ans4']=="b"){
print '<input type="radio" checked="checked" name="ans4">manages interrupt acknowledge signals<br/>';
$correct++;
}
else
print '<input type="radio" name="ans4" value="b"/>manages interrupt acknowledge signals<br/>';
if($_POST['ans4']=="c")
print '<input type="radio" checked="checked" name="ans4">accepts interrupt acknowledge signal<br/>';
else
print '<input type="radio" name="ans4" value="c"/>accepts interrupt acknowledge signal<br/>';
if($_POST['ans4']=="d")
print '<input type="radio" checked="checked" name="ans4">all of the mentioned<br/>';
else
print '<input type="radio" name="ans4" value="d"/>all of the mentioned<br/></p>';

//quesion 5
print '<p>5. In cascaded mode, the number of vectored interrupts provided by 8259A is</p>';
if($_POST['ans5']=="a")
print '<input type="radio" checked="checked" name="ans5">4<br/>';
else
print '<p><input type="radio" name="ans5" value="a"/>4<br/>';
if($_POST['ans5']=="b"){
print '<input type="radio" checked="checked" name="ans5">16<br/>';
$correct++;
}
else
print '<input type="radio" name="ans5" value="b"/>16<br/>';
if($_POST['ans5']=="c")
print '<input type="radio" checked="checked" name="ans5">8<br/>';
else
print '<input type="radio" name="ans5" value="c"/>8<br/>';
if($_POST['ans5']=="d")
print '<input type="radio" checked="checked" name="ans5">64<br/>';
else
print '<input type="radio" name="ans5" value="d"/>64<br/></p>';

//quesion 6
print '<p>6. When the PS(active low)/EN(active low) pin of 8259A used in buffered mode, then it can be used as a</p>';
if($_POST['ans6']=="a")
print '<input type="radio" checked="checked" name="ans6">input to designate chip is master or slave<br/>';
else
print '<p><input type="radio" name="ans6" value="a"/>input to designate chip is master or slave<br/>';
if($_POST['ans6']=="b"){
print '<input type="radio" checked="checked" name="ans6">buffer enable<br/>';
$correct++;
}
else
print '<input type="radio" name="ans6" value="b"/>buffer enable<br/>';
if($_POST['ans6']=="c")
print '<input type="radio" checked="checked" name="ans6"> buffer disable<br/>';
else
print '<input type="radio" name="ans6" value="c"/> buffer disable<br/>';
if($_POST['ans6']=="d")
print '<input type="radio" checked="checked" name="ans6">none<br/>';
else
print '<input type="radio" name="ans6" value="d"/>none<br/></p>';
//quesion 7
print '<p>7. Once the ICW1 is loaded, then the initialisation procedure involves</p>';
if($_POST['ans7']=="a")
print '<input type="radio" checked="checked" name="ans7"> edge sense circuit is reset<br/>';
else
print '<p><input type="radio" name="ans7" value="a"/> edge sense circuit is reset<br/>';
if($_POST['ans7']=="b"){
print '<input type="radio" checked="checked" name="ans7">IMR is cleared<br/>';
$correct++;
}
else
print '<input type="radio" name="ans7" value="b"/>IMR is cleared<br/>';
if($_POST['ans7']=="c")
print '<input type="radio" checked="checked" name="ans7">slave mode address is set to 7<br/>';
else
print '<input type="radio" name="ans7" value="c"/>slave mode address is set to 7<br/>';
if($_POST['ans7']=="d")
print '<input type="radio" checked="checked" name="ans7">all of the mentioned<br/>';
else
print '<input type="radio" name="ans7" value="d"/>all of the mentioned<br/></p>';

//quesion 8
print '<p>8. When non-specific EOI command is issued to 8259A it will automatically</p>';
if($_POST['ans8']=="a")
print '<input type="radio" checked="checked" name="ans8"> set the ISR<br/>';
else
print '<p><input type="radio" name="ans8" value="a"/> set the ISR<br/>';
if($_POST['ans8']=="b"){
print '<input type="radio" checked="checked" name="ans8">reset the ISR<br/>';
$correct++;
}
else
print '<input type="radio" name="ans8" value="b"/>reset the ISR<br/>';
if($_POST['ans8']=="c")
print '<input type="radio" checked="checked" name="ans8">set the INTR<br/>';
else
print '<input type="radio" name="ans8" value="c"/>set the INTR<br/>';
if($_POST['ans8']=="d")
print '<input type="radio" checked="checked" name="ans8"> reset the INTR<br/>';
else
print '<input type="radio" name="ans8" value="d"/> reset the INTR<br/></p>';

//quesion 9
print '<p>9. In the application where all the interrupting devices are of equal priority, the mode used is</p>';
if($_POST['ans9']=="a")
print '<input type="radio" checked="checked" name="ans9">automatic rotation<br/>';
else
print '<p><input type="radio" name="ans9" value="a"/>automatic rotation<br/>';
if($_POST['ans9']=="b"){
print '<input type="radio" checked="checked" name="ans9"> automatic EOI mode<br/>';
$correct++;
}
else
print '<input type="radio" name="ans9" value="b"/> automatic EOI mode<br/>';
if($_POST['ans9']=="c")
print '<input type="radio" checked="checked" name="ans9">specific rotation<br/>';
else
print '<input type="radio" name="ans9" value="c"/>specific rotation<br/>';
if($_POST['ans9']=="d")
print '<input type="radio" checked="checked" name="ans9">EOI<br/>';
else
print '<input type="radio" name="ans9" value="d"/>EOI<br/></p>';

//quesion 10
print '<p>10. 8086 microprocessor is.....bit</p>';
if($_POST['ans10']=="a")
print '<input type="radio" checked="checked" name="ans10">4<br/>';
else
print '<p><input type="radio" name="ans10" value="a"/>4<br/>';
if($_POST['ans10']=="b"){
print '<input type="radio" checked="checked" name="ans10">16<br/>';
$correct++;
}
else
print '<input type="radio" name="ans10" value="b"/>16<br/>';
if($_POST['ans10']=="c")
print '<input type="radio" checked="checked" name="ans10">32<br/>';
else
print '<input type="radio" name="ans10" value="c"/>32<br/>';
if($_POST['ans10']=="d")
print '<input type="radio" checked="checked" name="ans10">64<br/>';
else
print '<input type="radio" name="ans10" value="d"/>64<br/></p>';

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
