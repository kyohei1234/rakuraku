<section class="container">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
    <div class="content-panel">
      <h1 class="nyuryokun-title">らくらくにゅうりょくん</h1>
      <div class="nyuryokun-btns">
        <?php echo link_to('<div class="btn">新しいテンプレートを作成</div>', '@nyuryokun_create') ?>
      </div>
      <?php foreach($templates as $template): ?>
        <div><?php echo $template ?></div>
        <div class="nyuryokun-edit-btns">
          <?php echo link_to('<div class="btn">テンプレートを編集</div>', '@nyuryokun_edit?id='.$template->getId()) ?>
          <?php echo link_to('<div class="btn">表を作成</div>', '#') ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>