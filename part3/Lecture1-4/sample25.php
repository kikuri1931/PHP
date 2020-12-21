<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-4.3</title>
</head>
<body>
	<?php 
		$news = file_get_contents('./news_data/news.txt');
	?>

	<?php 
		print($news);
	?>

	<?php 
		readfile('./news_data/news.txt');
	?>

	<?php 
		$doc = file_get_contents('./news_data/news.txt');
		$doc .= "<br>2010-06-02 ニュースを追加しました";
		file_put_contents('./news_data/news.txt', $doc);

		readfile('./news_data/news.txt');
	?>
</body>
</html>