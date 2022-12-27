<html>
</title>
<body><center>
<table><form name=f method=get action="slip20.php">
<tr><th colspan=2>Menu</th></tr>
<tr><td>1.Split array into chunks</td>
<td><input type=radio name=r value=1></td></tr>
<tr><td>2.Sort array by value without changing key</td>
<td><input type=radio name=r value=2></td></tr>
<tr><td>3.Filter even elements</td><td><input type=radio name=r value=3></td></tr>
<tr><td>SUBMIT</td><td><input type=submit name=s value=go></td></tr>
<center>
</form></table></body></html>
<?php
$c=$_GET['r'];
$a=array('pen'=>15,'pencil'=>5,'rubber'=>3,'book'=>30);
$a1=array('ira'=>15,'nia'=>57,'ria'=>3,'alia'=>30);
$a2=array(15,48,10,155,2,78);
switch($c)
{
case 1:   echo"<br>Array in chunks of two <br>";   
	print_r(array_chunk($a,2,true));   echo"<br><br>";
	   print_r(array_chunk($a1,2,true));   echo"<br><br>";
  	 break;
case 2:   print_r($a);   asort($a);//array sort by values   
	echo"<br>Array in ascending order<br>";  
	 print_r($a);
	   arsort($a);//reverse array sort by values  
	  echo"<br>Array in desecending order<br>";
	   print_r($a);
                 break;
 case 3:   function iseven($v)  
                { 
                  return (!($v & 1));
                 }
                 print_r($a2);
                 echo "<br>";
	echo"<br>Filter the even elements from an array.<br>";
	   print_r(array_filter($a2,'iseven'));
                  break;
 }
?>
