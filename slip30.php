<?php
$cname=$_POST['t1'];
echo"Cname".$cname;
$con=pg_connect("dbname=college user=postgres");
echo "Connected to database";
$q="select sname,class from student1,comp,s_c where student1.sid=s_c.sid and s_c.cno=comp.cno and comp.cname='$cname'and rank=1";
$rs=pg_query($q) or die("error");
echo "Compitition Name:$cname<br>";
echo "<table border=1>";
echo "<tr><th>Student Name</th><th>class</th></tr>";
while($row=pg_fetch_row($rs))
{
echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
}
?>

