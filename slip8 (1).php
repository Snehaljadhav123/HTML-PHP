<html>
<body>
<form method=post action="slip8.php">
Enter Large string:<input type=text name="str1"/><br>
Enter small string:<input type=text name="str2"/><br>
<input type=submit name="SUBMIT">
<input type=reset name="RESET"><br>
</form>
</body>
</html>
<?php
$s1=$_POST['str1'];
$s2=$_POST['str2'];

if(strpos($s1,$s2)==0)

echo "<b>first occurance of \$large string is:$s2</b><br>";
else
echo "<b> \$small string is not present at starting:</b><br>";

$a=strpos($s1,$s2);
echo "<b>first occurance of \$small string is:$a</b><br>";

if(strcasecmp($s1,$s2)==0)
{
echo"EQUAL";
}
else
{
echo"NOTEQUAL";
}



?>

