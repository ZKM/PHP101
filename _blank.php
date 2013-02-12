<!DOCTYPE html>
<html>
 <head>
	<title>Sample Page</title>
	<meta charset="UTF-8" />
 </head>
 <body>
<?php
function getOridinal($number) {
	$lastDigit = $number % 10;
	$n = round((($number / 100) - floor($number / 100)) * 100);	
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
	return $ordinal
}
	
?>
 </body>
</html>