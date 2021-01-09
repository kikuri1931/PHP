<?php 
session_start();
require('../dbconnect.php');

if (isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time()) {
	// ログインしている
	$_SESSION['time'] = time();

	$sql = sprintf('SELECT * FROM members WHERE id=%d', mysqli_real_escape_string($db, $_SESSION['id']));
	$record = mysqli_query($db, $sql) or die(mysqli_error($db));
	$member = mysqli_fetch_assoc($record);
} else {
	// ログインしていない
	header('Location: ../login.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ひとこと掲示板</title>
	<link rel="stylesheet" href="../join/practice2.css">
</head>
<body>
	<div id="wrap">
		<div id="head">
			<h1>| ひとこと掲示板</h1>
		</div>
		<div id="content">
			<form method="post">
				<h4><?php echo htmlspecialchars($member['name']); ?>さん、メッセージをどうぞ</h4>
				<textarea name="message" cols="50" rows="5"></textarea>
				<div>
					<input type="submit" value="送信する">
				</div>
			</form>
		</div>
	</div>
</body>
</html>