<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>practice1</title>
</head>
<body>
	<?php 
		require('dbconnect.php');

		$sql = sprintf("DELETE FROM my_items WHERE id=%d", mysqli_real_escape_string($db, $_REQUEST['id']));
		mysqli_query($db, $sql) or die(mysqli_error($db));
	?>
	<p>商品の情報を削除しました</p>
</body>
</html>