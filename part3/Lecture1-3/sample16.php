<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lecture1-3.2</title>
</head>
<body>
	<table>
		<?php 
			for ($i=1; $i <= 10; $i++) { 
				if ($i % 2) {
					print('<tr style="background-color: #bce0f2"');
				}
				print('<tr>');
				print('<td>'.$i.'</td>');
				print('<td>'.$i.'行目の情報です</td>');
				print('</tr>');
			}
		?>
	</table>
	<?php 
		$week = array('金', '土', '日', '月', '火', '水', '木');

		for ($i=1; $i <= 31; $i++) { 
			print($i.'日('.$week[$i%7].')<br>');
		}
	?>
</body>
</html>