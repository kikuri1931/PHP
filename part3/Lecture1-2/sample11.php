<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-2.5</title>
</head>
<body>
	<?php 
		if (!empty($_REQUEST['my_name'])) {
			print('正しく入力されています');
		} else {
			print('名前を入力してください<br>');
		}
	?>
</body>
</html>