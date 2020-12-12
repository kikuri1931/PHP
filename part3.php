<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="part3.css">
	<title>part3</title>
</head>
<body>
	<h1>Lecture1-1.1</h1>
	<?php 
		print('PHPを勉強中です！');
	?>

	<h1 class="interval">Lecture1-1.2</h1>
	<?php 
		print('<h2 class="lecture1-1-2-title">画面にHTMLを表示する</h2>');
		print('<p>PHPはHTMLの中に埋め込んで記述することができます。</p>');
		print('<p>改行するときは、<br>brタグを記述します。');
	?>

	<h1 class="interval">Lecture1-1.3</h1>
	<?php 
		date_default_timezone_set('Asia/Tokyo');
		print('現在は ' . date('G時 i分 s秒') . ' です。' . '<br>');
		print('今日は' . date('Y年 n月 j日') . 'です。')
	?>
</body>
</html>