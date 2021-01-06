<!DOCTYPE html>
<html>
<head>
	<title>practice2</title>
	<link rel="stylesheet" href="practice2.css">
</head>
<body>
	<?php 
		session_start();

		if (!empty($_POST) || !empty($_FILES['image'])) {
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
			$fileName = $_FILES['image']['name'];
			if (!empty($fileName)) {
				$ext = substr($fileName, -3);
				if ($ext != 'jpg' && $ext != 'gif') {
					$error['image'] = 'type';
				}
			}

			if (empty($error)) {
				// 画像をアップロードする
				$image =date('YmdHis') . $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], '../member_picture/'.$image);

				$_SESSION['join'] = $_POST;
				$_SESSION['join']['image'] = $image;
				header('Location: check.php');
				exit();
			}
		}
	?>

	<h1>｜会員登録</h1>
	<p>次のフォームに必要事項をご記入ください。</p>
	
	<form method="post" enctype="multipart/form-data">
		<h4>
			ニックネーム<span class="required">必須</span>
		</h4>
		<input type="text" name="name" size="35" maxlength="255" 
			   value="<?php if (!empty($_POST)) { print(htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8')); } ?>">
		<?php if (!empty($error['name'])): ?>
			<p class="error">
				* ニックネームを入力してください
			</p>
		<?php endif; ?>

		<h4>
			メールアドレス<span class="required">必須</span>
		</h4>
		<input type="text" name="email" size="35" maxlength="255"
		       value="<?php if (!empty($_POST)) { print(htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8')); } ?>">
		<?php if (!empty($error['email'])): ?>
			<p class="error">
				* メールアドレスを入力してください
			</p>
		<?php endif; ?>

		<h4>
			パスワード<span class="required">必須</span>
		</h4>
		<input type="password" name="password" size="10" maxlength="20">
		<?php if (!empty($error) && empty($error['password'])): ?>
			<p class="error">
				* 恐れ入りますが、パスワードを改めて入力してください
			</p>
		<?php elseif (!empty($error['password']) && $error['password'] == 'blank'): ?>
			<p class="error">
				* パスワードを入力してください
			</p>
		<?php elseif (!empty($error['password']) && $error['password'] == 'length'): ?>
			<p class="error">
				* パスワードを4文字以上で入力してください
			</p>
		<?php endif; ?>

		<h4>写真など</h4>
		<input type="file" name="image" size="35">
		<?php if (!empty($error) && empty($error['image'])): ?>
			<p class="error">
				* 恐れ入りますが、画像を指定された場合は画像を改めて指定してください
			</p>
		<?php elseif(!empty($error['image'])): ?>
			<p class="error">
				* 写真などは「.gif」または「.jpg」の画像を指定してください
			</p>
		<?php endif; ?>

		<div class="submit">
			<input type="submit" value="入力内容を確認する">
		</div>
	</form>
</body>
</html>