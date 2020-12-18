<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-1.5</title>
</head>
<body>
	<?php 
		print('性別：' . htmlspecialchars($_POST['gender'], ENT_QUOTES));
	?>
</body>
</html>