<?php
$array=array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");
echo "Associative array : Ascending order sort by value <br>";
asort($array);
foreach($array as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."<br>";
}
echo "Associative array : Ascending order sort by Key <br>";
ksort($array);
foreach($array as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."<br>";
}
echo "Associative array : Descending order sorting by Value<br>";
arsort($array);
foreach($array as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."<br>";
}
echo "Associative array : Descending order sorting by Key<br>";
krsort($array);
foreach($array as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."<br>";
}
?>