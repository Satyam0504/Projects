
<html>
<title>
</title>
<body>
<?php 
$empeno=$_GET["t1"];
mysql_connect("localhost","root","") or die ("Sql not connected".mysql_error());
mysql_select_db("employee") or die ("DAtabase not found".mysql_error());
$qry="select * from emp where eno='$empeno'";
$res=mysql_query($qry) or die (mysql_error());
if ($value=mysql_num_rows($res)!=0)
{
while(($value=mysql_fetch_array($res))!=0)
{
	print_r($value);
	echo"<br> ENPLOYEE no :-".$value[0];
	echo"<br> ENPLOYEE name :-".$value[1];
	echo"<br> ENPLOYEE salary :-".$value[2];
	echo"<br> ENPLOYEE contact :-".$value[3];
	echo"<br> ENPLOYEE department :-".$value[4];
}
}
else
{
	echo "RECORD NOT FOUND";
}
echo " <br>YOU WANT TO DELETE RECORD";
?>
<form action="delete1.php" method="get"> 
<input type ="submit" value="yes">
	<input type="text" disabled="disabled" name="t1" value=" <?php echo $empeno; ?>">  
</form>
<?php
$ms=null;
if(isset($_GET["ms"]))
{
	$ms=$_GET["ms"];
}
echo $ms;
?>
</body>
</html>