<!DOCTYPE html>
<html>
 <head>
	<title>PHP Loops</title>
	<meta charset="UTF-8" />
 </head>
 <body>
<?php 
	echo '<h2>for loop:</h2>';
	for ($c=0; $c<10; $c++){
		echo $c . "\n";
	}
	
	
	echo '<h2>while loop:</h2>';
	$c=0;
	while ($c<10) {
		echo $c . "\n";
		$c++;
	}

	/* looping through a mysql database
	while ($row = mysql_fetch_array($results)){
	
	}
	*/

	
?>
 </body>
</html>