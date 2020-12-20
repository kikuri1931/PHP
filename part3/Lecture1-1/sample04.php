<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-1-4</title>
</head>
<body>
	<?php 
		print('お名前： ' . htmlspecialchars($_POST['my_name'], ENT_QUOTES));
	?>
</body>
</html>