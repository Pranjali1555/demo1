<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
.button{
background-color:#0066FF;
border:none;
color:#CCFF00;
padding: 15px 32px;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:16px;
border-radius:12px;
}
</style>
</head>

<body bgcolor="#9966FF">

<center>
<img src="file/pranjali/5.jpg" height="300" width="75%" />
<?php
session_start();
echo"<center><h1><b><i>";
print"your score is ".$_SESSION['correct']."/10 <br/><br/>";

echo"</center></h1></b></i>";
?>
<form action="result1.php" method="post">
<input type="button" value="next"  onClick=window.open("endresult.html") class="button" name="submit" />
</form>
</body>
</html>
