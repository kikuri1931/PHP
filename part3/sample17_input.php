<!DOCTYPE html>
<html>
<head>
	<title>Lecture1-3.3</title>
</head>
<body>
	<?php 
		if (isset($_COOKIE['my_id'])) {
			$my_id = $_COOKIE['my_id'];
		} else {
			$my_id = '';
		}
	?>
	<form action="sample17.php" method="post">
		<dl>
			<dt>ID</dt>
			<dd>
				<input type="text" name="my_id" id="my_id" value="<?php print($my_id);?>">
			</dd>
			<dt>パスワード</dt>
			<dd>
				<input type="password" name="password" id="password">
			</dd>
			<dt>IDの保存</dt>
		</dl>
		<p>
			<input type="checkbox" name="save" id="save" value="on">
			<label for="save">IDを保存する</label>
		</p>
		<input type="submit" value="送信する">
	</form>
</body>
</html>