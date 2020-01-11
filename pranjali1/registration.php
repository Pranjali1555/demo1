

<?php
$servername="localhost";
$username="root";
$password="";
$db="student_info";

$mysql=new mysqli($servername,$username,$password,$db);
if($conn-> connect_error)
{
 die("connection not successful".$mysql-> connect_error);
 }

 $sql="INSERT INTO studentrecord(Instnm,Nm,Pw)VALUES('$_POST[Instnm]','$_POST[Nm]','$_POST[Pw]')";
 if($mysql->query($sql))
 {
 echo"insert record";
 if(isset($_POST['submit']))
{
  header("Location:loginexam.html");
  exit;
  }

 }
 
 
?>
