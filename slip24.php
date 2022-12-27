<html>
<head>
<title>Append </title>
</head>
<body>
<form method=post action="slip24.php">
Enter first file : <input type=text name="file1"><br><br>
Enter second file : <input type=text name="file2"><br><br>

<input type=submit value="Append">
</form>
</body>
</html>

<?php
$file1=$_POST['file1'];
$file2=$_POST['file2'];
$f1= fopen($file1,"a") or exit("Unable to open file!");
$f2=fopen($file2,"r") or exit("Unable to open file!");

echo"Appending....";
while(($ch=fgetc($f2))!==false)
fwrite($f1,$ch);

fclose($f1);
fclose($f2);

echo"File appended successfully!";

?>
