<!DOCTYPE html>
<html>
 <head>
	<title>Sample Page</title>
	<meta charset="UTF-8" />
 </head>
 <body>
<?php
	$number = rand();
for ($number = 0; $number < 4201; $number++) {
	// find the last digit of the number using the modulo
	$lastDigit = $number % 10;
	/*
	// find the last two numbers
	$n = $number / 100;		// divide number by 100 
//	echo $n . '<br>';
	$n = $n - floor($n);	// subtract integer portion from number
//	echo $n . '<br>';
	$n = $n * 100; 			// multiply by 100
	*/
	$n = round((($number / 100) - floor($number / 100)) * 100);	
	//round ro solve binary calculation issues
//	echo $n . '<br>';
//	echo "last digit is: $lastDigit";

switch(true) {
	case $lastDigit == 1 && $n !=11:
		$ordinal = 'st';
	break;

	case $lastDigit == 2 && $n !=12:
		$ordinal = 'nd';
	break;
	
	case $lastDigit == 3 && $n !=13:
		$ordinal = 'rd';
	break;
	
	default:
		$ordinal = 'th';
	break;
}	

echo $number . $ordinal . "\n";
}
	
?>

 </body>
</html>