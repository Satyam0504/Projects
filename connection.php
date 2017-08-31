<?php
mysql_connect("localhost","root","") or die ("SQL SERVER NOT CONNECTED".mysql_error());
mysql_select_db("employee") or die("DATABASE NOT SELECTED".mysql_error());
?>