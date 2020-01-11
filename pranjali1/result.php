<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#9966FF">
<center>
<img src="file/pranjali/5.jpg" height="300" width="75%" />
<?php

session_start();
echo"<center><h1><b><i>";
print"your score is ".$_SESSION['correct']."/10 <br/><br/>";
print'the correct answer:<br>1.<br>2.<br>3.<br>4.';
echo"</center></h1></b></i>";
?>
</body>
</html>
