<!DOCTYPE html>
<html>
<head>
	<title>Lecture1-2.4</title>
</head>
<body>
	<form method="get">
		<dl>
			<dt>商品</dt>
			<dd>
				<?php 
					$items = array('a-1'=>'ガム', 'b-1'=>'チョコレート', 'c-3'=>'クッキー');

					foreach ($items as $itemKey => $itemValue) {
						print('<input type="checkbox" id="'.$itemKey.'"><label for="'.$itemKey.'">'.$itemValue.'</label>');
					}
				?>
			</dd>
		</dl>
		<input type="submit" value="送信する">
	</form>

	<form method="get">
		<dl>
			<dt>コンピュータ</dt>
			<dd>
				<select>
					<?php 
					$computers = array('win'=>'Windows', 'mac'=>'Macintosh', 'iphone'=>'iPhone', 'ipad'=>'iPad', 'android'=>'Android');

					foreach ($computers as $computerKey => $computerValue) {
						print('<option value="'.$computerKey.'">'.$computerValue.'</option>');
					}
				?>
				</select>
			</dd>
		</dl>
		<input type="submit" value="送信する">
	</form>
</body>
</html>