<html><body>
<form method=post action="slip10.php">
Enter 1<sup>st</sup> Number:<input type=text name="str1"/><br>
Enter 2<sup>nd</sup> Number:<input type=text name="str2"/><br>


<input type=submit name="SUBMIT">
<input type=reset name="RESET"><br>
</form>
</body>
</html>

<?php
$n1=$_POST['str1']; 

$n2=$_POST['str2'];


function findmod($a,$b)
{
  echo "<P>The  value of variables is $a &  $b</P>";


$result = $a % $b;
 echo "<P>The modulus of these numbers  is $result</P>";



}

function findpow($a,$b)
{


   echo "The Power of two numers is".pow($a,$b);

}

function findsum($n)
{
   $sum = 0;
   for ( $i=1; $i<=$n; $i++)
     $sum = $sum + $i;
    echo "<P>The Sum of these numbers  is $sum</P>";

}

function findfact($n)
{
   $fact=1;
   for ( $i=1; $i<=$n; $i++)
     $fact = $fact * $i;
    echo "<P>The Factorial of second number  is $fact</P>";

}


findmod($n1,$n2);
findpow($n1,$n2);
findsum($n1);
findfact($n2);

?>


