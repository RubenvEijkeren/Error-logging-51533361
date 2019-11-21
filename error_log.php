<!DOCTYPE html>
<html>
<head>
	<title>error logging</title>
</head>
<body>
	<?php
	try {
		throw new Exception("Division by zero.");
		
	} catch (Exception $e) {
		echo "<h1> Er is iets fout gegaan!</h1>";
		error_log("Division by zero.", 3, './errors.log');
	}

	?>
</body>
</html>