<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
a{
font-size:20px;
color:#330033;
}

.button{
background-color:#CC0066;
border:none;
color:#CCFF00;
padding: 10px 25px;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:16px;
border-radius:12px;
}

</script>
</style>
</head>
<body>
<table border="0" cellspacing="0" width="50%" bgcolor="#FF66CC"  align="center">
<TR><td></td><TD><font size="+1">
<a href="index1.php" ><b>student record</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></TD>
<TD><font size="+1">
<a href="feedback1.php" ><b>feedback</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></TD>
</TR></table>

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

  $sql ="SELECT * FROM studentrecord ";
  echo"<body bgcolor='#999900'>";
echo"<h1 align='center'>Student Record</h1>";
echo "<table border='3' align='center' bordercolor='black' width='900px;' >

<tr height='10px' bgcolor='sky blue'>
<th><font size='4'><b>Institute Name</th>
<th><font size='4'><b>Name</th>
<th><font size='4'><b>Password</th>

<th><font size='4'><b>Delete</th>
</tr>";
echo'<tr align="center">';
 
  $result=mysqli_query($conn,$sql);
 
  if(mysqli_num_rows($result)>0)
  {
  while($row=mysqli_fetch_assoc($result))
  {
echo '<td align="left" >'.$row['Instnm'].'</td>';
echo '<td align="left">'. $row['Nm'].'</td>';
echo '<td align="left">'. $row['Pw'].'</td>';


echo'<td align="left"><a href="deletestudrecord.php">Delete</a></td>';

echo '</tr>';
}
echo "</table>";

  
  }
  else{
  echo"error";
  }
?>
<form action="#" method="post" align="center">
&nbsp;&nbsp;&nbsp;&nbsp;


<input type="button" name="logout" onclick="parent.location='http://localhost/pranjali1/index.html'" value="logout" class="button"/>
<input type="button" name="next" onclick="parent.location='feedback1.php'" value="Next" class="button"/>
</form>
</body>
</html>