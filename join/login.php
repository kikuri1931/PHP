<?php 
require('dbconnect.php');

session_start();

if (!empty($_POST)) {
	// ログイン処理
	if ($_POST['email'] != '' && $_POST['password'] != '') {
		$sql = sprintf('SELECT * FROM members WHERE email="%s" AND password="%s"', 
						mysqli_real_escape_string($db, $_POST['email']),
						mysqli_real_escape_string($db, sha1($_POST['password']))
						);
		$record = mysqli_query($db, $sql) or die(mysqli_error($db));
		if ($table = mysqli_fetch_assoc($record)) {
			// ログイン成功
			$_SESSION['id'] = $table['id'];
			$_SESSION['time'] = time();
			header('Location: index.php');
			exit();
		} else {
			$error['login'] = 'failed';
		}
	} else {
		$error['login'] = 'blank';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>practice2</title>
	<link rel="stylesheet" href="join/practice2.css">
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
		<input type="text" name="email" size="35" maxlength="255" value="<?php if (!empty($_POST)) {echo htmlspecialchars($_POST['email']);} ?>">
		<?php if (!empty($error['login']) && $error['login'] == 'blank'): ?>
			<p class="error">
				* メールアドレスとパスワードを入力してください
			</p>
		<?php elseif (!empty($error['login']) && $error['login'] == 'failed'): ?>
			<p class="error">
				* ログインに失敗しました。正しくご記入ください。	
			</p>
		<?php endif; ?>

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