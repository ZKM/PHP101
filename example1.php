<?php
/*
	Block comments can span multiple lines
*/
$pageTitle = 'My Page'; // variable assignment
define ('MY_DOMAIN','http://localhost/tc5774/'); // constant declaration

?>
<!DOCTYPE html>
<html>
 <head>
	<title><?php echo 'Page Title';?></title>
	<meta charset="UTF-8" />
 </head>
 <body>
	<h1>Welcome!</h1>
	<p>This is a sample paragraph.</p>
	<?php 
		echo '<p>This space is for rent</p>';

		echo '<p>';
		echo date('d/m/y');
		echo '</p>';
		
		$someText = 'Another line for rent.';
		echo '<p>' . $someText . '</p>';
		echo "<p>$someText</p>";
		echo "<p>{$someText}lorem ipsum blah blah</p>";
		
		$a = 1;
		echo 
		"<ul>
			<li>" . $a++ . "</li>
			<li>" . $a . "</li> 
			<li>" . ++$a . "</li> 
			<li>" . $a+=7;
		echo "</li></ul>";
		
		echo "\n<p>" . MY_DOMAIN . "</p>\n";
		
		//echo 'don't do this.';
		echo "don't do this.\r\n";
		echo 'don\'t do this.' . "\r\n";
		
		$sideA = '10';
		$sideB = 3;
		
		echo '<p>The area is ' . $sideA * $sideB . ' . </p>';
		$weekdays = array('Sun',  'Mon', 'Tue'); //numeric array
		
		echo '<p>The second day is ' . $weekdays[1] . '.</p>';
		
		//$weekdays[0] = 'Bob'; // direct assignment of an element 0 to a new value
		$weedays[] = 'Wed'; // apend to the end of the array 
		
		array_push($weekdays, 'Thu', 'Fri', 'Sat');
		
		print_r($weekdays);
		
		echo "<br>\n";
		
		$pillbox = array(
			'Sun' => 'white',
			'Mon' => 'white',
			'Tue' => 'none',
			'Wed' => 'purple',
			'Thu' => 'orange',
			'Fri' => 'red',
			'Sat' => 'green'
		);
		
		print_r($pillbox);
		echo "<br>\n";
		
		$dayName = date('D');	
		$staticDay = 'Tue';	
		
		echo '<p>Friday\'s pill is ' . $pillbox['Fri'] . '.</p>';
		echo '<p>Tuesday\'s pill is ' . $pillbox[$staticDay] . '.</p>';
		echo '<p>Today\'s pill is ' . $pillbox[$dayName] . '.</p>';
		echo '<p>Today\'s pill is ' . $pillbox[$weekdays[date('w')]] . '.</p>';

	?>
	
	
 </body>
</html>