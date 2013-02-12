<?php
$age = 15.56464;

switch (true) {
	case $age < 5:
		echo 'no school for you!';
	break;
	
	case $age > 4 && $age < 13:
		echo 'elem school';
	break;
	
	case $age > 12 && $age < 18:
		echo 'high school';
	break;
	
	case $age > 19: 
		echo 'college/adult';
	break;
	
	default:
		echo '???';
	break;
}