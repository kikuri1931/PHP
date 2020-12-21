<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-4.4</title>
</head>
<body>
	<?php 
		$xmlTree = simplexml_load_file('http://h2o-space.com/category/news/feed');

		foreach ($xmlTree->channel->item as $item) {
			print('<li><a hlef="'.$item->link.'">'.$item->title.'</a></li>');
		}
	?>
</body>
</html>