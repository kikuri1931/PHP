<?php 
	session_start();
	require('../dbconnect.php');

	if (!isset($_SESSION['join'])) {
		header('Location: index.php');
		exit();
	}
	if (!empty($_POST)) {
		// 登録処理する
		$sql = sprintf('INSERT INTO members SET name="%s", email="%s", password="%s", picture="%s", created="%s"',
		                mysqli_real_escape_string($db, $_SESSION['join']['name']),
		                mysqli_real_escape_string($db, $_SESSION['join']['email']),
		                mysqli_real_escape_string($db, sha1($_SESSION['join']['password'])),
		                mysqli_real_escape_string($db, $_SESSION['join']['image']),
		                date('Y-m-d H:i:s')
		                );
		mysqli_query($db, $sql) or die(mysqli_error($db));
		unset($_SESSION['join']);

		header('Location: thanks.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>practice2</title>
	<link rel="stylesheet" href="practice2.css">
</head>
<body>
	<h1>｜会員登録</h1>
	<p>
		記入した内容を確認して、「登録する」ボタンをクリックしてください。
	</p>
	<form method="post">
		<input type="hidden" name="action" value="submit">
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
		<?php if (file_exists("../member_picture/".htmlspecialchars($_SESSION['join']['image'], ENT_QUOTES, 'UTF-8'))): ?>
			<img src="../member_picture/<?php print(htmlspecialchars($_SESSION['join']['image'], ENT_QUOTES, 'UTF-8')); ?>" width="100" height="100">
		<?php else: ?>
			<p>写真はありません</p>
		<?php endif; ?>

		<div class="submit">
			<a href="index.php?action=rewrite">&laquo;&nbsp;書き直す</a>｜
			<input type="submit" value="登録する">
		</div>
	</form>
</body>
</html>