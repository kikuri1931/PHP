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
		$sql = 'SELECT COUNT(*) AS cnt FROM my_items';
		$recordSet = mysqli_query($db, $sql);
		$table = mysqli_fetch_assoc($recordSet);
		$maxPage = ceil($table['cnt']/5);
		if (
		  	isset($_GET["page"]) &&
		 	$_GET["page"] > 0 &&
		  	$_GET["page"] <= $maxPage
		) {
		  	$page = (int)$_GET["page"];
		} else {
		  	$page = 1;
		}
		$start = ($page - 1) * 5;
		$recordSet = mysqli_query($db, 'SELECT m.name, i.* FROM makers m, my_items i WHERE m.id=i.maker_id ORDER BY id DESC LIMIT '.$start.', 5');
	?>
	<h1>｜ 商品管理</h1>
	<table width="100%">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">メーカー</th>
			<th scope="col">商品名</th>
			<th scope="col">価格</th>
			<th scope="col">編集・削除</th>
		</tr>
		<?php 
			while ($table = mysqli_fetch_assoc($recordSet)) {	
		?>
		<tr>
			<td>
				<?php print(htmlspecialchars($table['id'])); ?>
			</td>
			<td>
				<?php print(htmlspecialchars($table['name'])); ?>
			</td>
			<td>
				<?php print(htmlspecialchars($table['item_name'])); ?>
			</td>
			<td>
				<?php print(htmlspecialchars($table['price'])); ?>
			</td>
			<td>
				<a href="update.php?id=<?php print(htmlspecialchars($table['id'])); ?>">編集</a>
			</td>
		</tr>
		<?php 
			} 
		?>
	</table>
		<ul class="paging">
			<?php if ($page > 1) { ?>
				<li class="paging-list">	
					<a href="index.php?page=<?php print($page - 1); ?>">前のページへ</a>
				</li>
			<?php } else { ?>
				<li class="paging-list">前のページへ</li>
			<?php } ?>

			<?php if($page < $maxPage) { ?>
				<li class="paging-list">
					<a href="index.php?page=<?php print($page + 1); ?>">次のページへ</a>
				</li>
			<?php } else { ?>
				<li class="paging-list">次のページへ</li>
			<?php } ?>	
		</ul>
</body>
</html>