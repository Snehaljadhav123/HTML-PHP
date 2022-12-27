<html><head></head>
<body><center><table><form name=f method=get action="slip16.php">
<tr><th colspan=2>Enter the details </th></tr>
<tr><td>Enter the roll no :</td><td><input type=text name=r ></td></tr>
<tr><td>Enter name:</td><td><input type=text name=n ></td></tr>
<tr><td>Java:</td><td><input type=text name=s1 ></td></tr>
<tr><td>Php:</td><td><input type=text name=s2 ></td></tr>
<tr><td>DS:</td><td><input type=text name=s3 ></td></tr>
<tr><td>OS:</td><td><input type=text name=s4 ></td></tr>
<tr><td>Python:</td><td><input type=text name=s5 ></td></tr>
<tr><td>Submit:</td><td><input type=submit name=s value=Proceed></td></tr></center></form></body></html>
<?php
$r=explode(",",$_GET['r']);
$n=explode(",",$_GET['n']);
$s1=explode(",",$_GET['s1']);
$s2=explode(",",$_GET['s2']);
$s3=explode(",",$_GET['s3']);
$s4=explode(",",$_GET['s4']);
$s5=explode(",",$_GET['s5']);
?>
<html>
<body>
<centre><table border=1>
<?php
$c=count($r);
echo "<tr><th>Roll no</th><th>Name</th><th>s1</th><th>s2</th><th>s3</th><th>s4</th><th>s5</th><th>total</th><th>per</th></tr>";
for($i=0;$i<$c;$i++)
{
$t=$s1[$i]+$s2[$i]+$s3[$i]+$s4[$i]+$s5[$i];$p=$t/5;
echo "<tr><td>".$r[$i]."</td><td>".$n[$i]."</td><td>".$s1[$i]."</td><td>".$s2[$i]."</td><td>".$s3[$i]."</td><td>".$s4[$i]."</td><td>".$s5[$i]."</td><td>".$t."</td><td>".$p."</td></tr>";
}
?>
</table>
</center>
</body>
</html>
