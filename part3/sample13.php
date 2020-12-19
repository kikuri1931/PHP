<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-2.7</title>
</head>
<body>
	<?php 
		$age = mb_convert_kana($_REQUEST['age'], 'n', 'UTF-8');

		if (is_numeric($age)) {
			print($age.'歳');
		} else {
			print('※年齢は数字でご記入ください');
		}
	?>
</body>
</html>