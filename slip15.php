<?php
$str1=$_POST['str'];
echo "***Finding Substring***<br>";
$str2=substr($str1,0,5);
echo "<br>First five characters from string are:".$str2."<br>";
echo "<br>***Lowercase***"."<br>";
print("\n".strtolower($str1));
echo "<br><br>***Padding***<br>";
print("\n".str_pad($str1,15,"-",STR_PAD_BOTH));
echo "<br><br>***Remove White Spaces<br>";
print("\n".rtrim($str1));
echo "<br><br>***Reverse the String***<br>";
print("\n".strrev($str1));
?>



