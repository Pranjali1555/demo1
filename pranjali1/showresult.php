<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

$servername="localhost";
$username="root";
$password="";
$db="student_info";
/*$Inm=$_POST['Instnm'];
$Na=$_POST['Nm'];*/
$conn=mysqli_connect($servername,$username,$password,$db);

if($conn->connect_error)
{
die("connection not successful".$conn->connect_error);
}
echo"connection is successful";
  $sql ="SELECT Instnm,Nm FROM studentrecord WHERE Instnm='$_POST[Instnm]' AND Nm='$_POST[Nm]'";
 
  $result=mysqli_query($conn,$sql);
 
  if(mysqli_num_rows($result)>0)
  {
  while($row=mysqli_fetch_assoc($result))
  {
  echo"name:-".$row[Nm ];
  }
  }
  
   else
   {
    echo"error";
	}

?>
<h1></h1>
</body>
</html>
