<!DOCTYPE html>
<html>
<head>
	<title>Lecture1-4.2</title>
</head>
<body>
	<?php 
		$success = file_put_contents('./news_data/news.txt', '2010-06-01 ホームページをリニューアルしました');
	?>

	<?php 
		if ($success) {
			print('<p>ファイルの書き込みが完了しました。</p>');
		} else {
			print('<p>書き込みに失敗しました。ディレクトリの権限などを確認してください。</p>');
		}
	?>
</body>
</html>