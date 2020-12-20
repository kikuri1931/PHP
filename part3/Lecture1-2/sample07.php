<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-2.1</title>
</head>
<body>
	<select name="age" id="age">
		<?php 
			for ($i=10; $i <= 70 ; $i++) { 
				print('<option value="'.$i.'">'.$i.'歳</option>');
			}
		?>
	</select>

	<select name="even_age" id="even_age">
		<?php
			for ($i=10; $i <= 70 ; $i=$i+2) { 
				print('<option value="'.$i.'">'.$i.'歳</option>');
			}
		?>
	</select>
</body>
</html>