<html>
<body>
<form action="slip18.php" method="get">
<center>
<h1>***Array Opearations ***</h1>
<h3><input type="radio" name="op" value="1">Reverse the order of each elt's key-value pair</h3>
<h3><input type="radio" name="op" value="2">Traverse the elements in array in random order</h3>
<h3><input type="radio" name="op" value="3">Display the elements of array along with key</h3>
<h3><input type="radio" name="op" value="4">Convert the array  elements into indivisual variable</h3>


<input type="submit" value="Submit">
</center>
</form>
</body>
</html>



<?php

        $op = $_GET['op'];
       $input = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
     switch($op)
     {
               case 1 :  $flipped = array_flip($input);
                                                                 					print_r($flipped);
                                                                  					break;
               case 2 :  shuffle($input);
                          print_r($input);
                          break;
               case 3 :  foreach($input as $key=>$value)
               			 {
                        		echo"key:$key  val:$value.<br>";
                		  }
					break;
               case 4:  extract($input);
				  echo "\$Peter = $Peter; \$Ben = $Ben; 						   \$Joe = $Joe";
                        break;
      }
?>