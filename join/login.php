<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>practice2</title>
	<link rel="stylesheet" href="practice2.css">
</head>
<body>
	<h1>｜ログインする</h1>
	<div id="lead">
		<p>メールアドレスとパスワードを記入してログインしてください。</p>
		<p>入会手続きがまだの方はこちらからどうぞ。</p>
		<p>
			&raquo;
			<a href="join/">入会手続きをする</a>
		</p>
	</div>

	<form method="post">
		<h4>メールアドレス</h4>
		<input type="text" name="email" size="35" maxlength="255">

		<h4>パスワード</h4>
		<input type="password" name="password" size="35" maxlength="255">

		<h4>ログイン情報の記録</h4>
		<input type="checkbox" name="save" id="save" value="on">
		<label for="save">次回からは自動的にログインする</label>

		<div>
			<input type="submit" value="ログインする">
		</div>
	</form>
</body>
</html>