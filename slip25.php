<html><body>
<form method=post action="slip25.php">
 File name:<input type=text name="str1"/><br><br>
 
<input type=radio name="st[]" value="s1"> THE SIZE OF FILE</input><br>
<input type=radio name="st[]" value="s2"> LAST ACCESS,CHANGED,MODIFIED</input><br>
<input type=radio name="st[]" value="s3"> TYPE OF FILE</input><br>
<input type=radio name="st[]" value="s4"> DELETE FILE</input><br>

<input type=submit name="SUBMIT">
<input type=reset name="RESET"><br>
</form>
</body>
</html>

<?php
$file1=$_POST['str1'];
//$file2=$_POST['str2'];
$cl=$_POST['st'];


for($i=0;$i<count($cl);$i++)
{
 if($cl[$i]=='s1')
{
$c=filesize($file1);
echo"File size:<input type=text value=$c><p>"."byte";

}

else if($cl[$i]=='s2')
{
$c=date("d M Y,h:m:s",fileatime($file1));
echo"<b>Last Acees:</b>$c><br>";

$c1=date("d M Y,h:m:s",filectime($file1));
echo"<b>Last Changed:</b>$c1<br>";

$c2=date("d M Y,h:m:s",filemtime($file1));
echo"<b>Last Modified:</b>$c2";
}


else if($cl[$i]=='s3')
{

$a=filetype($file1);
Echo "File type=$a";
}

else if($cl[$i]=='s4')
{
unlink($file1);
echo"File is deleted";

}

}


?>
