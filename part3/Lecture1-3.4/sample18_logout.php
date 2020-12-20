<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-3.4</title>
</head>
<body>
	<?php 
		session_start();

		session_unset();
		header('Location: sample18_input.html');
		exit();
	?>
</body>
</html>