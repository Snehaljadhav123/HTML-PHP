<?php
include('slip12.inc');
$n1=$_POST['str1'];
$n2=$_POST['str2'];
$cl=$_POST['st'];
switch($cl)
{
case 'add':
echo "<b> Addition is : ".add($n1,$n2)."</b><br>";
break;
case'sub':echo "<b> Subtraction is :".sub($n1,$n2)."</b><br>";
break;
case 'mul':
echo "<b>Multiplication is : ".mul($n1,$n2)."</b><br>";
break;
case 'div':
echo "<b>Division is : ".div($n1,$n2)."</b><br>";
break;
}
?>
