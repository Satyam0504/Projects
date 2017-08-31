<?php
$empeno=$_GET["t1"];
mysql_connect("localhost","root","") or die ("Sql not connected".mysql_error());
mysql_select_db("employee") or die ("DAtabase not found".mysql_error());
$qry1=" delete from emp where eno='$empeno' ";
    mysql_query($qry1) or die("query error".mysql_error());
    header("location:delete.php?ms=Record deleted");

?>