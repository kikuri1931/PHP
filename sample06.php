<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-1.6</title>
</head>
<body>
	<?php 
		$name = htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES);
	?>
	<p>ようこそ<?php print($name); ?>さん。</p>
	<ul>
		<li>
			<a href="#"><?php print($name); ?>さんのマイページを見る</a>
		</li>
	</ul>
	<?php 
		$sum = 8 + 2;
		print($sum);
	?>
</body>
</html>