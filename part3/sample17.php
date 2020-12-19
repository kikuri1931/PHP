<!DOCTYPE html>
<html>
<head>
	<title>Lecture1-3.3</title>
</head>
<body>
	<?php 
		$myId = $_POST['my_id'];
		$password = $_POST['password'];
		$save = $_POST['save'];

		// Cookieに保存

		if ($save == 'on') {
			setcookie('my_id', $myId, time() + 60 * 24 * 14);
			$message = 'ログイン情報を記録しました';
		} else {
			setcookie('my_id', '');
			$message = '記録しませんでした';
		}
	?>
	<p><?php print($message); ?></p>
	<p><a href="./sample17_input.php">戻る</a></p>
</body>
</html>