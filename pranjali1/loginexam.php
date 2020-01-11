
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
  {

   if(isset($_POST['submit']))
{
  header("Location:welcome.html");
  exit;
  }
 
   echo"Welcome for login exam";
   }
   else
   {
    echo"error";
	}
	
	
echo date("l,dS F Y,h:i:s A");

	?>
