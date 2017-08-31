<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$msg=null;
if(isset($_GET["msg"]))
{
	$msg=$_GET["msg"];
}
echo $msg;
?>
<body background="85.jpg">
<center> EMPLOYEE INFO </center>
<form action='emp2.php' method='get'>
<input type='submit' value='REGISTER' >
</form>
<br>
<form action='emp.php' method='get'>
<input type='submit' value='UPDATE' >
</form>
<br>
<form action='emp1.php' method='get'>
<input type='submit' value='DELETE' >
</form>
<br>
<form action="emp3.php" method="get">
<input type="submit" value="SHOW DATA">
</form>
</body>
</html>