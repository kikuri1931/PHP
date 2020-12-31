<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>practice1</title>
	<link rel="stylesheet" href="practice1.css">
</head>
<body>
	<?php 
		require('dbconnect.php');

		$sql = sprintf('UPDATE my_items SET maker_id=%d, item_name="%s", price=%d, keyword="%s" WHERE id=%d', 
			mysqli_real_escape_string($db, $_POST['maker_id']),
			mysqli_real_escape_string($db, $_POST['item_name']),
			mysqli_real_escape_string($db, $_POST['price']),
			mysqli_real_escape_string($db, $_POST['keyword']),
			mysqli_real_escape_string($db, $_POST['id'])
		);
		mysqli_query($db, $sql) or die(mysqli_error($db));
	?>
	<h1>｜ 商品情報変更</h1>
	<p>商品の情報を変更しました</p>

	<p>
		<a href="index.php">一覧に戻る</a>
	</p>
</body>
</html>