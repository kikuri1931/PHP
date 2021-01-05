<!DOCTYPE html>
<html>
<head>
	<title>practice2</title>
	<link rel="stylesheet" href="practice2.css">
</head>
<body>
	<?php 
		session_start();

		if (!empty($_POST)) {
			// エラー項目の確認
			if ($_POST['name'] == '') {
				$error['name'] = 'blank';
			}
			if ($_POST['email'] == '') {
				$error['email'] = 'blank';
			}
			if (strlen($_POST['password']) < 4) {
				$error['password'] = 'length';
			}
			if ($_POST['password'] == '') {
				$error['password'] = 'blank';
			}

			if (empty($error)) {
				$_SESSION['join'] = $_POST;
				header('Location: check.php');
				exit();
			}
		}
	?>

	<h1>｜会員登録</h1>
	<p>次のフォームに必要事項をご記入ください。</p>
	
	<form method="post" enctype="multipart/form=data">
		<h4>
			ニックネーム<span class="required">必須</span>
		</h4>
		<input type="text" name="name" size="35" maxlength="255" value="<?php if (!empty($_POST)) {print(htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'));} ?>">
		<?php if (!empty($error['name'])): ?>
			<p class="error">*ニックネームを入力してください</p>
		<?php endif; ?>

		<h4>
			メールアドレス<span class="required">必須</span>
		</h4>
		<input type="text" name="email" size="35" maxlength="255">
		<h4>
			パスワード<span class="required">必須</span>
		</h4>
		<input type="password" name="password" size="10" maxlength="20">
		<h4>写真など</h4>
		<input type="file" name="image" size="35">
		<div class="submit">
			<input type="submit" value="入力内容を確認する">
		</div>
	</form>
</body>
</html>