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
		// mysqli_query($db, 'INSERT INTO my_items SET maker_id=1, item_name="もも", price=210, keyword="缶詰,ピンク,甘い",
		// 	         sales=0, created="2010-08-01", modified="2010-08-01"') or die(mysqli_connect_error($db));
		// print('データを挿入しました');
		// mysqli_query($db, 'UPDATE my_items SET item_name="白桃" WHERE id=6') or die(mysqli_connect_error($db));
		// print('変更しました');
		// mysqli_query($db, 'DELETE FROM my_items WHERE id=6') or die(mysqli_connect_error($db));
		// print('データを削除しました');

		// $recordSet = mysqli_query($db, 'SELECT * FROM my_items');
		// $data = mysqli_fetch_assoc($recordSet);
		// print($data['item_name']);

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