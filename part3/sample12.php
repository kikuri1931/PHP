<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-2.6</title>
</head>
<body>
	ご予約日: <br>
	<?php 
		foreach ($_REQUEST['reserve'] as $reserve) {
			print(htmlspecialchars($reserve, ENT_QUOTES).'<br>');
		}
	?>
</body>
</html>