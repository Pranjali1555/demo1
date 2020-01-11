<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
print '<form action="c_lanh2.php" method="post">';
//quesion 1
print '<p>1.
Determine output:<br>
void main()<br>
{<br>
      int const *p=5;<br>
      printf("%d", ++(*p));<br>
}<br>
</p>';
if($_POST['ans1']=="a")
print '<input type="radio" checked="checked" name="ans1">abstract<br/>';
else
print '<p><input type="radio" name="ans1" value="a"/>abstract<br/>';
if($_POST['ans1']=="b")
print '<input type="radio" checked="checked" name="ans1"> as<br/>';
else
print '<input type="radio" name="ans1" value="b"/> as<br/>';
if($_POST['ans1']=="c")
print '<input type="radio" checked="checked" name="ans1">foreach<br/>';
else
print '<input type="radio" name="ans1" value="c"/>foreach<br/>';
if($_POST['ans1']=="d"){
print '<input type="radio" checked="checked" name="ans1"> All of the above.<br/>';
$correct++;
}
else
print '<input type="radio" name="ans1" value="d"/> All of the above.<br/></p>';

//quesion 2
print '<p>2.Which of the following defines unboxing correctly?
</p>';
if($_POST['ans2']=="a")
print '<input type="radio" checked="checked" name="ans2">When a value type is converted to object type, it is called unboxing.
<br/>';
else
print '<p><input type="radio" name="ans2" value="a"/>When a value type is converted to object type, it is called unboxing.
<br/>';
if($_POST['ans2']=="b"){
print '<input type="radio" checked="checked" name="ans2"><br/>';
$correct++;
}
else
print '<input type="radio" name="ans2" value="b"/><br/>';
if($_POST['ans2']=="c")
print '<input type="radio" checked="checked" name="ans2">phpecho<br/>';
else
print '<input type="radio" name="ans2" value="c"/>phpecho<br/>';
if($_POST['ans2']=="d")
print '<input type="radio" checked="checked" name="ans2">php&<br/>';
else
print '<input type="radio" name="ans2" value="d"/>php&<br/></p>';

//quesion 3
print '<p>3.php start with.....</p>';
if($_POST['ans3']=="a")
print '<input type="radio" checked="checked" name="ans3">php<br/>';
else
print '<p><input type="radio" name="ans3" value="a"/>php<br/>';
if($_POST['ans3']=="b"){
print '<input type="radio" checked="checked" name="ans3">hyper text preprocesse<br/>';
$correct++;
}
else
print '<input type="radio" name="ans3" value="b"/>hyper text preprocesse<br/>';
if($_POST['ans3']=="c")
print '<input type="radio" checked="checked" name="ans3">phpecho<br/>';
else
print '<input type="radio" name="ans3" value="c"/>phpecho<br/>';
if($_POST['ans3']=="d")
print '<input type="radio" checked="checked" name="ans3">php&<br/>';
else
print '<input type="radio" name="ans3" value="d"/>php&<br/></p>';
//quesion 4
print '<p>1.php start with.....</p>';
if($_POST['ans4']=="a")
print '<input type="radio" checked="checked" name="ans4">php<br/>';
else
print '<p><input type="radio" name="ans4" value="a"/>php<br/>';
if($_POST['ans4']=="b"){
print '<input type="radio" checked="checked" name="ans4">hyper text preprocesse<br/>';
$correct++;
}
else
print '<input type="radio" name="ans4" value="b"/>hyper text preprocesse<br/>';
if($_POST['ans4']=="c")
print '<input type="radio" checked="checked" name="ans4">phpecho<br/>';
else
print '<input type="radio" name="ans4" value="c"/>phpecho<br/>';
if($_POST['ans4']=="d")
print '<input type="radio" checked="checked" name="ans4">php&<br/>';
else
print '<input type="radio" name="ans4" value="d"/>php&<br/></p>';

//quesion 5
print '<p>2.php start with.....</p>';
if($_POST['ans5']=="a")
print '<input type="radio" checked="checked" name="ans5">php<br/>';
else
print '<p><input type="radio" name="ans5" value="a"/>php<br/>';
if($_POST['ans5']=="b"){
print '<input type="radio" checked="checked" name="ans5">hyper text preprocesse<br/>';
$correct++;
}
else
print '<input type="radio" name="ans5" value="b"/>hyper text preprocesser<br/>';
if($_POST['ans5']=="c")
print '<input type="radio" checked="checked" name="ans5">phpecho<br/>';
else
print '<input type="radio" name="ans5" value="c"/>phpecho<br/>';
if($_POST['ans5']=="d")
print '<input type="radio" checked="checked" name="ans5">php&<br/>';
else
print '<input type="radio" name="ans5" value="d"/>php&<br/></p>';

//quesion 6
print '<p>3.php start with.....</p>';
if($_POST['ans6']=="a")
print '<input type="radio" checked="checked" name="ans6">php<br/>';
else
print '<p><input type="radio" name="ans6" value="a"/>php<br/>';
if($_POST['ans6']=="b"){
print '<input type="radio" checked="checked" name="ans6">hyper text preprocesse<br/>';
$correct++;
}
else
print '<input type="radio" name="ans6" value="b"/>hyper text preprocesse<br/>';
if($_POST['ans6']=="c")
print '<input type="radio" checked="checked" name="ans6">phpecho<br/>';
else
print '<input type="radio" name="ans6" value="c"/>phpecho<br/>';
if($_POST['ans6']=="d")
print '<input type="radio" checked="checked" name="ans6">php&<br/>';
else
print '<input type="radio" name="ans6" value="d"/>php&<br/></p>';
//quesion 7
print '<p>1.php start with.....</p>';
if($_POST['ans7']=="a")
print '<input type="radio" checked="checked" name="ans7">php<br/>';
else
print '<p><input type="radio" name="ans7" value="a"/>php<br/>';
if($_POST['ans7']=="b"){
print '<input type="radio" checked="checked" name="ans7">hyper text preprocesse<br/>';
$correct++;
}
else
print '<input type="radio" name="ans7" value="b"/>hyper text preprocesse<br/>';
if($_POST['ans7']=="c")
print '<input type="radio" checked="checked" name="ans7">phpecho<br/>';
else
print '<input type="radio" name="ans7" value="c"/>phpecho<br/>';
if($_POST['ans7']=="d")
print '<input type="radio" checked="checked" name="ans7">php&<br/>';
else
print '<input type="radio" name="ans7" value="d"/>php&<br/></p>';

//quesion 8
print '<p>2.php start with.....</p>';
if($_POST['ans8']=="a")
print '<input type="radio" checked="checked" name="ans8">php<br/>';
else
print '<p><input type="radio" name="ans8" value="a"/>php<br/>';
if($_POST['ans8']=="b"){
print '<input type="radio" checked="checked" name="ans8">hyper text preprocesse<br/>';
$correct++;
}
else
print '<input type="radio" name="ans8" value="b"/>hyper text preprocesser<br/>';
if($_POST['ans8']=="c")
print '<input type="radio" checked="checked" name="ans8">phpecho<br/>';
else
print '<input type="radio" name="ans8" value="c"/>phpecho<br/>';
if($_POST['ans8']=="d")
print '<input type="radio" checked="checked" name="ans8">php&<br/>';
else
print '<input type="radio" name="ans8" value="d"/>php&<br/></p>';

//quesion 9
print '<p>3.php start with.....</p>';
if($_POST['ans9']=="a")
print '<input type="radio" checked="checked" name="ans9">php<br/>';
else
print '<p><input type="radio" name="ans9" value="a"/>php<br/>';
if($_POST['ans9']=="b"){
print '<input type="radio" checked="checked" name="ans9">hyper text preprocesse<br/>';
$correct++;
}
else
print '<input type="radio" name="ans9" value="b"/>hyper text preprocesse<br/>';
if($_POST['ans9']=="c")
print '<input type="radio" checked="checked" name="ans9">phpecho<br/>';
else
print '<input type="radio" name="ans9" value="c"/>phpecho<br/>';
if($_POST['ans9']=="d")
print '<input type="radio" checked="checked" name="ans9">php&<br/>';
else
print '<input type="radio" name="ans9" value="d"/>php&<br/></p>';

//quesion 10
print '<p>3.php start with.....</p>';
if($_POST['ans10']=="a")
print '<input type="radio" checked="checked" name="ans10">php<br/>';
else
print '<p><input type="radio" name="ans10" value="a"/>php<br/>';
if($_POST['ans10']=="b"){
print '<input type="radio" checked="checked" name="ans10">hyper text preprocesse<br/>';
$correct++;
}
else
print '<input type="radio" name="ans10" value="b"/>hyper text preprocesse<br/>';
if($_POST['ans10']=="c")
print '<input type="radio" checked="checked" name="ans10">phpecho<br/>';
else
print '<input type="radio" name="ans10" value="c"/>phpecho<br/>';
if($_POST['ans10']=="d")
print '<input type="radio" checked="checked" name="ans10">php&<br/>';
else
print '<input type="radio" name="ans10" value="d"/>php&<br/></p>';
session_start();
foreach($_POST as $value){
if(isset($value)){
$done++;
}
}
if($done!=11)
print'<input type="submit" onClick=window.open("result7.php") value="check ans" name="submit"/><br/><br/>';
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
