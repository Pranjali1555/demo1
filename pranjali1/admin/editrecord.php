<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
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
	$Instnm = $_POST['Instnm'];
	$Nm=$_POST['Nm'];
	$Pw=$_POST['Pw'];
	
	mysql_query("UPDATE studentrecord SET Instnm='$Instnm', Nm='$Nm', Pw='$Pw'");
	header("location: editstudrecord.php");
?>