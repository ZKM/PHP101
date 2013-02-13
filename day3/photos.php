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
	
	if (empty($_GET['action'])) $action = 'DISPLAY';
	else $action = strtoupper($_GET['action']);

	switch($action) {

		default:
		case 'DISPLAY': // display photos
		// get list of photos
		$query = 'SELECT id, filepath FROM photos';
		$images = @mysql_query($query);

		if (!$images) {
			echo "<p><strong>Query error:</strong><br /> $query</p>"; // query error
		}

		while($row = mysql_fetch_array($images)) {
				echo '<img src="' . $row['filepath'] . '" alt="" /><br />';
			}
		
		break;
		
		case 'PROCESS': //process file upload
		
		// following lines added for troubleshooting discussion 
			echo '<pre>' . print_r($_FILES,  true) . '</pre>';
			echo '<pre>' . print_r($_SERVER,  true) . '</pre>';
			echo '<pre>' . print_r($_POST,  true) . '</pre>';
		// end trouble
		
			$uploaddir = '/xampp/htdocs/PHP101/day3/img/'; // define upload directory path
			$pathname = $uploaddir . basename($_FILES['photo']['name']); // set server pathname for file
			
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $pathname)) {
				// successfule upload and move
				echo '<p>The file has been uploaded successfully.</p>';
				
				// save file location and other posted info to database
				$title = mysql_real_escape_string($_POST['title']);
				$caption = mysql_real_escape_string($_POST['caption']);
				$album_id = mysql_real_escape_string($_POST['albumid']);
				$filepath = mysql_real_escape_string($pathname);
				
					$query = 'INSERT INTO photos SET ' .
							"title = '$title', " .
							"caption = '$caption', " .
							"filepath = '$pathname' ";
							
						if (!@mysql_query($query)) {
							echo 'error.'; // query error
						} else {
							// success
							echo '<p>The photo has been saved.</p>';
							
							$photo_id = mysql_insert_id(); // get id of photo added
							
							$query = "INSERT INTO p2a SET " .
							"photo_id = '{$photo_id}', album_id = '{$album_id}' ";
							if (!@mysql_query($query)) {
								echo 'error.'; // query error
								// in reality you want to delete the photo to undo the previous
								// insert operation to maintain data integrity
								$q = "DELETE FROM photos WHERE id = '{$photo_id}' ";
								if (!@mysql_query($q)) {
									echo 'could not delete for some reason';
								}
								else {
								// success
								}
							} else {
							// success
							}
						}
						

				} else {
				// derp!
				echo '<p>There was an error uploading the file: <br /> <strong>Error Code:</strong><br />' . 
						$_FILES['photo']['error'] . '</p>';
			}
			
		break;
		
		case 'UPLOAD': // display upload form
			
			// get list of album info
			$query = 'SELECT id, title FROM albums';
			$albumList = @mysql_query($query);
			if (!$albumList) {
				echo "<p><strong>Query error:</strong><br /> $query</p>"; // query error
			}
		
		?>
		<h2>Upload Photo</h2>
		<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>?action=process" method="post">
			<label>
				<h3>Photo Title:</h3>
				<input type="text" name="title" />
			</label>
			<label>
				<h3>Photo Caption:</h3>
				<input type="text" name="caption" />
			</label>
			<label>
				<h3>Album:</h3>
				<select name="albumid">
					<option value="">--</option>
					<?php
						while($row = mysql_fetch_array($albumList)) {
							echo '<option value="' . $row['id'] . '">' . $row['title'] . '</option>';
						}
					?>
				</select>
			</label>
			<label>
				<h3>Upload Photo</h3>
				<input type="file" name="photo" accept="image/*"/>
			</label>
			<div><br /><br />
				<input type="submit" value="Save &amp; Upload" />
			</div>
		</form>
		
		<?php
		break;
		
	} // switch $action
	
 ?>
</body>
</html>