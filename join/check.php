<?php 
	session_start();

	if (!isset($_SESSION['join'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>practice2</title>
	<link rel="stylesheet" href="practice2.css">
</head>
<body>
	<h1>｜会員登録</h1>
	<p>
		記入した内容を確認して、「登録する」ボタンをクリックしてください。
	</p>
	<form method="post">
		<h4>ニックネーム</h4>
		<p>
			<?php 
				print(htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES, 'UTF-8'));
			?>
		</p>
		<h4>メールアドレス</h4>
		<p>
			<?php 
				print(htmlspecialchars($_SESSION['join']['email'], ENT_QUOTES, 'UTF-8'));
			?>
		</p>
		<h4>パスワード</h4>
		<p>【表示されません】</p>
		<h4>写真など</h4>
		<img src="../member_picture/<?php print(htmlspecialchars($_SESSION['join']['image'], ENT_QUOTES, 'UTF-8')); ?>" width="100" height="100">
		<div class="submit">
			<a href="index.php?action=rewrite">&laquo;&nbsp;書き直す</a>｜
			<input type="submit" value="登録する">
		</div>
	</form>
</body>
</html>