<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>practice1</title>
	<link rel="stylesheet" href="practice1.css">
</head>
<body>
	<?php 
		require('dbconnect.php');

		$id = $_REQUEST['id'];
		$sql = sprintf("SELECT * FROM my_items WHERE id=%d", mysqli_real_escape_string($db, $id));
		$recordSet = mysqli_query($db, $sql);
		$data = mysqli_fetch_assoc($recordSet);
	?>
	<h1>｜ 商品情報変更</h1>
	<p>変更する内容を記入してください。</p>
	<form id="frmUpdate" name="frmUpdate" method="post" action="update_do.php">
		<dl>
			<dt>
				<label for="maker_id">メーカーID</label>
			</dt>
			<dd>
				<input type="text" name="maker_id" id="maker_id" size="10" maxlength="10" value="<?php print(htmlspecialchars($data['maker_id'], ENT_QUOTES)); ?>">
			</dd>
			<dt>
				<label for="item_name">商品名</label>
			</dt>
			<dd>
				<input type="text" name="item_name" id="item_name" size="35" maxlength="255" value="<?php print(htmlspecialchars($data['item_name'], ENT_QUOTES)); ?>">
			</dd>
			<dt>
				<label for="price">価格</label>
			</dt>
			<dd>
				<input type="text" name="price" id="price" size="10" maxlength="10" value="<?php print(htmlspecialchars($data['price'], ENT_QUOTES)); ?>">円
			</dd>
			<dt>
				<label for="keyword">キーワード</label>
			</dt>
			<dd>
				<input type="text" name="keyword" id="keyword" size="50" maxlength="255" value="<?php print(htmlspecialchars($data['keyword'], ENT_QUOTES)); ?>">
			</dd>
		</dl>
		<input type="submit" value="変更する">
		<input type="hidden" name="id" value="<?php print(htmlspecialchars($data['id'], ENT_QUOTES)); ?>">
	</form>
</body>
</html>