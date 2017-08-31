<?php
$a=$_GET["t0"];
$b=$_GET["t2"];
$c=$_GET["t3"];
$d=$_GET["t4"];
$e=$_GET["t5"];
mysql_connect("localhost","root","") or die ("SQL server not connected".mysql_error());
mysql_select_db("employee") or die ("Database not connected".mysql_error());
$qry="update emp set ename='$b', sal='$c',contact='$d',dept='$e' where eno='$a'";
mysql_query($qry) or die(mysql_error());
echo "<br> RECORD SUCESSFULLY UPDATED";

?>