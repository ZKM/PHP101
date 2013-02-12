<!DOCTYPE html>
<html>
 <head>
	<title>Array loops</title>
	<meta charset="UTF-8" />
 </head>
 <body>
<?php
 $weekdays = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat'); //numeric array

 echo '<h2>for loop</h2>';
 $l = count($weekdays);
 for($c=0; $c <$l; $c++) {
	echo $weekdays[$c] . "\n";
 }

echo '<h2>foreach loop</h2>';
foreach($weekdays as $day) {
	echo $day . "\n";
}

echo '<h2>foreach [GET] loop</h2>';
// URL Example ..php?param1=value1&param2=value2
foreach($_GET as $key => $value) {
	echo $key . ' = ' . $value . "\n";
}


 
 ?>
 </body>
</html>