<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-3.4</title>
</head>
<body>
	<?php session_start(); ?>
	<p>
		<?php print($_SESSION['my_id']); ?>さんの情報はまだ残っています
	</p>
	<p>
		<a href="sample18_logout.php">ログアウトする</a>
	</p>
</body>
</html>