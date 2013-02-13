<?php
	// connect to database server
	$dbLink = @mysql_connect('localhost','root','xampp');
	if (!$dbLink) exit('<p><strong>Error:</strong> Connecting to database server.</p>');
	
	// select database
	if (!@mysql_select_db('tc5774')) exit('<p><strong>Error:</strong> Selecting database.');
?>

<!DOCTYPE html>
<html>
 <head>
	<title>MySQL QUERY Form</title>
	<meta charset="UTF-8" />
	<style type="text/css">
		body {
			font-family: "Lucida Console", "Lucida Sans Typewriter", Monaco, "Bitstream Vera Sans Mono", monospace;
			font-size:14px;
			line-height:1.5em;
		}	
	</style>
 </head>
 <body>
 <?php 
	// is form data present?
	if (!empty($_POST)) {
		// process form data
				
		// build query
		$title = $_POST['title'];
		$description = $_POST['description'];
		
		$query = 'INSERT INTO albums SET ' . 
					"title = '$title', " .
					"description = '$description' ";
		
		// send query to server
		$result = @mysql_query($query);
		
		// check query result
		if (!$result) {
			// query error - display debug or friendly message
			echo '<p><strong>Query error</strong> - no soup for you! *snap*</p>';
		} else {
			// success!
			echo '<p>The record has been saved.</p>';
		}		
		
		// process results if any
		
	} else {
		//display blank form
	?>
	<form action="albums.php" method="post">
		<label>
			<span>Album Title:</span>
			<input type="text" name="title" />
		</label>
		<label>
			<span>Album Description:</span>
			<input type="text" name="description" />
		</label>
		<div>
			<input type="submit" value="Save Changes" />
		</div>
	</form>
<?php
	} // if form data present
?>
 </body>
</html>