<?php
$a=$_GET["t0"];
$b=$_GET["t1"];
$c=$_GET["t2"];
$d=$_GET["t3"];
$e=$_GET["t4"];
mysql_connect("localhost","root","") or die ("SQL server not connected".mysql_error());
mysql_select_db("employee") or die ("Database not connected".mysql_error());
$qry="Insert into emp (eno,ename,sal,contact,dept) values ('$a','$b','$c','$d','$e')";
mysql_query($qry) or die(mysql_error());
echo "<br> RECORD SUCESSFULLY ADDED";
?>