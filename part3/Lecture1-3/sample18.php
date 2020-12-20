<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-3.4</title>
</head>
<body>
	<?php 
		session_start();

		if (isset($_POST['my_id'])) {
			$_SESSION['my_id'] = $_POST['my_id'];
		}
	?>
	<p>
		ようこそ<?php print(htmlspecialchars($_SESSION['my_id'])); ?>さん
	</p>
	<a href="sample18_second.php">次のページへ</a>
</body>
</html>