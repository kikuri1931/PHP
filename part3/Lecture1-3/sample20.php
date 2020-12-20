<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-3.6</title>
</head>
<body>
	<?php 
		if (rand(0, 1) == 0) {
			header('Location: sample20-1.html');
		} else {
			header('Location: sample20-2.html');
		}
	?>
</body>
</html>