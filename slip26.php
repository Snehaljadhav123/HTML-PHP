<html>
<body bgcolor="red">
<form method="post" action="slip26.php">
Enter hospital name<input type="text" name="t1">
<br><input type="submit">
</form>
</body>
</html>
<?php
$hname=$_POST['t1'];
$con=pg_connect("dbname=college user=postgres");
$q="select dname,dcity from doctor,hospital where doctor.hno=hospital.hno and hospital.hname='$hname'";
$rs=pg_query($q) or die("error");
echo "Hospital Name:$hname<br>";
echo "<table border=1>";
echo "<tr><th>Doctor Name</th><th>Doctor city</th></tr>";
while($row=pg_fetch_row($rs))
{
echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
// echo "min=$row[0] <br>";
//echo "max=$row[1] <br>";
//echo "sum=$row[2] <br>";
}
?>
