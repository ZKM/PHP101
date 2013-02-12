<!DOCTYPE html>
<html>
 <head>
	<title>Functions</title>
	<meta charset="UTF-8" />
 </head>
 <body>
<?php
		function foo($x, $y=2) {
			$a = pow($x,$y);
			return $a;
		}	
		
		$a = 7;
		echo foo($a,7) . "<br>	";
		echo $a;
?>
 </body>
</html>