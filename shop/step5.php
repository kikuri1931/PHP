<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>practice1</title>
</head>
<body>
	<?php 
		$db = mysqli_connect('localhost', 'root', '', 'mydb') or die(mysqli_connect_error());
		mysqli_set_charset($db, 'utf8');
		$recordSet = mysqli_query($db, 'SELECT * FROM my_items');
		$data = mysqli_fetch_assoc($recordSet);
		print($data['item_name']);

		$recordSet = mysqli_query($db, 'SELECT * FROM my_items');
		while ($data = mysqli_fetch_assoc($recordSet)) {
			print($data['item_name'].'<br>');
		}

		$recordSet = mysqli_query($db, 'SELECT COUNT(id) AS record_count FROM my_items');
		$data = mysqli_fetch_assoc($recordSet);
		print('件数は'.$data['record_count'].'件です');
	?>
</body>
</html>