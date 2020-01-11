<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<html>
<head>
<meta name="viewport" content="width=device-width" initial-scale="1.0">
<link href="style1.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
function fun()
{
if(isset($_POST['submit']))
{
  header("Location:result.html");
  exit;
  }
  }
  </script>
<style type="text/css">
a{
font-size:20px;

color:skyblue;
}
b{
color:blue;
}
.button{
background-color:blue;
border:none;
color:white;
padding: 10px 25px;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:16px;
}
h3{
color:blue;
}
</style>
</head>
<body bgcolor="white">
<table border="0" cellspacing="0" width="100%" bgcolor="black">
<TR><TD>
<center><h1><i><b><font color="yellow" style="font-style=Arial Rounded MT Bold" size="40">Online Electricity Bill Payment</font></h1>


<img src="2.jpg" height="200" width="1200"/>
</TD></TR></table>
<table border="0" cellspacing="0" width="100%" bgcolor="skyblue">
<TR><TD><font size="+1">
<a href="registration.html" ><b>Registration</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></TD>

<TD><font size="+1">
<a href="view_bill.php" ><b>View Customers</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></TD>


<TD><font size="+1"><a href="calculatebill.html" ><b>Calculate Bill</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></TD>


<TD><font size="+1"><a href=".php"><b>Update per unit cost</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></TD>

<TD><font size="+1"><a href="index.html"><b>Logout</b></a></TD></TR></table><br /><BR /></font>



<?php

$servername="localhost";
$username="root";
$password="";
$db="e_bill";

$conn=mysqli_connect($servername,$username,$password,$db);

if($conn->connect_error)
{
die("connection not successful".$conn->connect_error);
}

  $sql ="SELECT * FROM registration ";
  echo"<body bgcolor='#999900'>";
echo"<h1 align='center'>Customers Record</h1>";
echo "<table border='3' align='center' bordercolor='black' width='900px;' >

<tr height='10px' bgcolor='sky blue'>
<th><font size='4'><b>Customers No.</th>
<th><font size='4'><b>Name</th>
<th><font size='4'><b>Contact No.</th>
<th><font size='4'><b>Email</th>
<th><font size='4'><b>Address</th>
</tr>";
echo'<tr align="center">';
 
  $result=mysqli_query($conn,$sql);
 
  if(mysqli_num_rows($result)>0)
  {
  while($row=mysqli_fetch_assoc($result))
  {
echo '<td align="left" >'.$row['cno'].'</td>';
echo '<td align="left">'. $row['name'].'</td>';
echo '<td align="left">'. $row['mobile'].'</td>';
echo '<td align="left" >'.$row['email'].'</td>';
echo '<td align="left">'. $row['address'].'</td>';


echo '</tr>';
}
echo "</table>";

  
  }
  else{
  echo"error";
  }
?>




</body>
</html>