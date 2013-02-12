<!DOCTYPE html>
<html>
<head>
	<title>PHP Class :: tc5774</title>
	<meta charset="UTF-8" />
<?php
$thelist = "";

 if ($handle = opendir('.')) {
	while (false !== ($file = readdir($handle))) {
		if ($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != ".git" && $file != ".DS_Store") {
			$thelist .= '<li><a href="'.$file.'" target="_blank">'.$file.'</a></li>';
		}
	}
	closedir($handle);
}
?>
</head>
<body>
	<h1>tc5774 files (PHP Class):</h1>
	<ul>
		<?php echo $thelist; ?>
	</ul>
</body>
</html>