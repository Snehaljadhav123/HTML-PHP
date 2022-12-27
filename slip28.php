<html><body>
<form method=post action="slip28.php">
<b><h1>------------STUDENT DETAILS-------------</h1></b><br>
Enter File name:<input type=text name="str1"/><br>
<input type=submit name="SUBMIT">
<input type=reset name="RESET"><br>



</form>
</body>
</html>

<?php
$file1=$_POST['str1'];

$data=file($file1);

$name=$data[0];
$age=$data[1];
$std=$data[2];
$eid=$data[3];
$m1=$data[4];
$m2=$data[4];
$m3=$data[4];
$m4=$data[4];
$m5=$data[4];
$m6=$data[4];
$total=$m1+$m2+$m3+$m4+$m5+$m6;
$per=$total/6;


$arr=array("Name:"=>$name,"Age:"=>$age,"Course"=>$std,"Email_id"=>$eid,"Total"=>$total,"Percentage"=>$per);
echo '<table border="1" >';
foreach($arr as $k=>$v)
{
Echo'<tr><td>'.$k.'</td><td>'.$v.'</td></tr>';

}





?>
