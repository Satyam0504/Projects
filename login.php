<html>
<body bgcolor="LIGHTBLUE">
<center>
<?php
$a= $_POST["user"];
$b=$_POST["pass"];
session_start();
$_SESSION["user"]="satyam";
include("connection.php");
$qry="select * from login where username='$a' and password='$b'";
$res=mysql_query($qry) or die (mysql_error());
	if(($value=mysql_fetch_array($res))>0 && isset($_SESSION["User"]))
	{
        echo "<br><br>"."UserName&nbsp;:&nbsp; " . $value["username"]."<br><br>"."Phone Number&nbsp;:&nbsp;".$value["phonenumber"]."<br><br>"."Mode of Payment&nbsp;:&nbsp;".$value["paymentmode"];
	}
    else
	{
		echo "<br><br><br><br><h1>NO Match Found!!!!!!!!!!!!!!!!!!</h1>";
	}
	?>
		
<br><br><br><br><br><br>
<div><button class="button5 button6" onClick="self.close(); window.open('index.php')">Logout         </button><br><br><br></div>
</body>
</html>
		