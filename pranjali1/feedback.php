
<?php
$servername="localhost";
$username="root";
$password="";
$db="student_info";
$mysql =new mysqli($servername,$username,$password,$db);
if($mysql-> connect_error)
{
 die("connection not successful".$mysql-> connect_error);
 }
 
 
 $sql="INSERT INTO feedback(Fnm,Lnm,email,Mob,Txtemp)VALUES('$_POST[Fnm]','$_POST[Lnm]','$_POST[email]','$_POST[Mob]','$_POST[Txtemp]')";
 if($mysql->query($sql))
 {
if(isset($_POST['submit']))
{
  header("Location:feedback.html");
  exit;
  }

 }
?>
