<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>practice1</title>
</head>
<body>
	<p>登録する商品を記入してください。</p>
	<form id="frmInput" name="frmInput" method="post" action="input_do.php">
		<dl>
			<dt>
				<label for="maker_id">メーカーID</label>
			</dt>
			<dd>
				<input type="text" name="maker_id" id="maker_id" size="10" maxlength="10">
			</dd>
			<dt>
				<label for="item_name">商品名</label>
			</dt>
			<dd>
				<input type="text" name="item_name" id="item_name" size="35" maxlength="255">
			</dd>
			<dt>
				<label for="price">価格</label>
			</dt>
			<dd>
				<input type="text" name="price" id="price" size="10" maxlength="10">円
			</dd>
			<dt>
				<label for="keyword">キーワード</label>
			</dt>
			<dd>
				<input type="text" name="keyword" id="keyword" size="50" maxlength="255">
			</dd>
		</dl>
		<input type="submit" value="送信する">
	</form>
</body>
</html>