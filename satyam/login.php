

<?php
$uname=$_POST["t2"];
$pass=$_POST["t1"];
mysql_connect("localhost","root","") or die ("SQL SERVER NOT CONNECTED".mysql_error());
mysql_select_db("employee") or die ("DATABASE NOT SELECTED".mysql_error());
$qry="select * from login where username ='$uname' and password ='$pass'";
$res=mysql_query($qry) or die (mysql_error());
if(isset($res))
{
	while(($value=mysql_fetch_array($res))!=0)
	{
     header("location:welcome.php");
	}
}
else
{
	header("location:welcome.php?msg=INVALID USERNAME AND PASSWORD");
}
?>
