<?php

if ($_GET["kids"]) {
	switch (true) {
		case $_GET["kids"] < 5:
			echo 'no school for you!';
		break;
		
		case $_GET["kids"] > 4 && $_GET["kids"] < 13:
			echo 'elem school';
		break;
		
		case $_GET["kids"] > 12 && $_GET["kids"] < 18:
			echo 'high school';
		break;
		
		case $_GET["kids"] > 19: 
			echo 'college/adult';
		break;
		
		default:
			echo '<pre>error..</pre>';
		break;
	}
}
else {
	echo '<p>Go make some kids and come back later.</p>';
}