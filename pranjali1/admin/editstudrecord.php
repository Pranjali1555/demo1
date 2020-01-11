<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<form action="execeditstatus.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_POST['Nm'] ?>">
	Status:<br>
	<select name="status" class="ed">
	<option>Onboard</option>
	<option>Not Void</option>
	</select>
	<br>
	<input type="submit" value="Edit" id="button1">
</form>
</body>
</html>
