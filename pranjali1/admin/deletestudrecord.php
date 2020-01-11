<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table>
<form action="deletestudrecord.php" method="post">
<tr><td>Name:</td><td><input type="text" name="Nm" />
</td></tr>
<tr><td><input type="submit" name="submit" value="submit" /></td></tr></form></table>
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

  $sql ="DELETE * FROM feedback WHERE Nm='$_POST[Nm]'";
 
if( mysql_query( $sql))
{
echo"record is deleted";
}


?>