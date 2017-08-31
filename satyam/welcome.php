<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$msg=null;
if(isset($_GET["msg"]))
{
	$msg=$_GET["msg"];
}
echo $msg;
?>
<form action="login.php" method="get">
<pre>
USERNAME <input type="text" name="t1">
PASSWORD <input type="password" name="t2">
</pre>
<input type="submit" value="submit">
<hr>
</form>

</body>
</html>