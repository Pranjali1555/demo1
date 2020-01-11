<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<style type="text/css">
h1{
    font-size:45px;
	color:#FF99CC;
	font:face;
	}
h2{
     font-size:25px;
	 color:#6633CC;
	 azimuth:center-left;
	 }
</style>
</head>

<body background="file/Desktop-Blue-HD-Wallpapers.jpg">
<form action="_self" method="post" onsubmit="submit" >
<h1 align="center"><u>Login Exam</u></h1>

<table align="center"></td><td>
<tr align="right"><td><h2>Name:</h2></td><td>
<input type="text" name="nm"/><br /></td></tr><tr align="right"><td>&nbsp;&nbsp;
<h2>Password:</h2></td><td>
<input type="password" name="pw"/><br /></td></tr>&nbsp;&nbsp;&nbsp;<tr><td><br /><br />
<input type="submit" value="submit" name="submit" accesskey="showresult.php" />&nbsp;&nbsp;&nbsp;

<input type="reset" name="clear"/><br /></td></tr></table></center>
</form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$db="student_info";

$conn=mysqli_connect($servername,$username,$password,$db);

if($conn->connect_error)
{
die("connection not successful".$conn->connect_error);
}
echo"connection is successful";
  $sql ="SELECT Nm,Pw FROM studentrecord WHERE Nm='$_POST[Nm]' AND Pw='$_POST[Pw]'";
 
  if($conn->query($sql)==true)
  
/*if(isset($_POST['submit']))
{
  target("Location:showresult.php");
  exit;
  }
  }*/
  ?>
