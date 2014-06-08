<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>

		<?php include_http_metas() ?>
		<?php include_metas() ?>

		<?php include_title() ?>

		<link rel="shortcut icon" href="/favicon.ico" />

	</head>

	<body>
		
		<!-- ヘッダー -->
		<header>
			<div>赤坂ウェブサービス</div>
			<!-- <form method="get" action="#" class="search">
				<div>
					<input type="text" name="example" class="textBox"><input type="submit" value="検索" class="btn">
				</div>
			</form> -->
		</header>  

		<!-- コンテンツ -->
		<?php echo $sf_data->getRaw('sf_content') ?>

		<!-- フッター -->
		<footer>
			<nav>
				<div><a href="kan.html">会社概要</a></div>
				<div><a href="kan.html">サービス</a></div>
				<div><a href="kan.html">プライバシーポリシー</a></div>
				<div><a href="kan.html">サイトマップ</a></div>
				<div><a href="kan.html">お知らせ</a></div>
				<div><a href="kan.html">お問い合わせ</a></div>
			</nav>
		</footer> 

	</body>
</html>
