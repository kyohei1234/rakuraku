<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <?php include_http_metas() ?>
  <?php include_metas() ?>

  <?php include_title() ?>

  <link rel="shortcut icon" href="/favicon.ico" />
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</head>

<body id="top-body">

  <div id="contents">

    <!-- ヘッダー -->
    <header id="top-header">
      <div class="top-header-inner">
        <div class="top-header-title"><?php echo link_to('Akasaka Web Service', '@homepage') ?></div>
        <nav class="top-header-menu">
          <!-- ログイン時 -->
          <?php if ($sf_user->isAuthenticated()) : ?>
            <div class="menu-item">              
                <?php echo $sf_user->getMember() ?>
            </div>
            <div class="menu-item"><?php echo link_to('ログアウト', '@logout') ?></div>

          <!-- 未ログイン時 -->
          <?php else : ?>
            <div class="menu-item"><?php echo link_to('ログイン', '@login') ?></div>
          <?php endif; ?>
        </nav>
      </div>
    </header>

    <!-- コンテンツ -->
    <main>
      <?php echo $sf_data->getRaw('sf_content') ?>
    </main>
    
    <!-- フッター -->
    <footer id="top-footer">
      <div class="row">
        <div class="top-footer-title">Akasaka Web Service</div>
        <nav class="top-footer-menu">
          <div class="footer-menu-item">会社概要</div>
          <div class="footer-menu-item">サービス</div>
          <div class="footer-menu-item">プライバシーポリシー</div>
          <div class="footer-menu-item">お問い合わせ</div>
          <div class="footer-menu-item">© 2014 Akasaka Web Service</div>
        </nav>
      </div>
    </footer>

  </div>

</body>
</html>