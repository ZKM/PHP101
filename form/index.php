<!DOCTYPE html>
<html>
 <head>
	<title>Form</title>
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
	<h1 style="display:none; color:red;">You don't have Kids</h1>
	<form action="process.php" action="get">
		<div id="kids">
			<div>Do you have kids?</div>
			<label for="kd_n">No</label> <input id="kd_n" type='radio' name='kids' value='0' checked />
			<label for="kd_y">Yes</label> <input id="kd_y" type='radio' name='kids' value='1' />
		</div>
		<div id="numKids">
			<div>How old is your oldest child</div>
			<input type="text" name="age" placeholder="child's age" />
		</div>
		<input type="submit" value="Submit" name="submit" />
	</form>
 </body>
</html>