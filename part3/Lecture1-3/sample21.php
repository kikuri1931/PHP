<!DOCTYPE html>
<html>
<head>
	<title>Lecture1-3.7</title>
</head>
<body>
	<?php 
		print('<p>3000円のものから 100円値引きした場合は、'.floor(100 / 3000 * 100).'引きです</p>');
	?>
	<p>その他の計算</p>
	<ul>
		<?php 
			print('<li>元の計算式→'. 100 / 3000 * 100 .'</li>');
			print('<li>切り上げ (ceil)→'.ceil(100 / 3000 * 100).'</li>');
			print('<li>四捨五入 (round)→'.round(100 / 3000 * 100, 1).'</li>');
		?>
	</ul>
</body>
</html>