<?php use_helper('Validation') ?>

<article class="top-article">
  <section class="top-video">
  	<div class="video-wrapper">
  		<video src="videos/movie6.mp4" loop autoplay>
  		</video>
  	</div>
  </section>

  <section class="top-characteristics">
    <div class="row">
      <?php echo link_to('<div class="btn">今すぐ登録する</div>', '@register') ?>
      <!-- <div class="characteristics-item">
        <div>
          <i class="fa fa-desktop"></i>
        </div>
        <h4>テキストテキストテキスト</h4>
        <p>テキストテキストテキスト</p>
      </div>
      <div class="characteristics-item">
        <div>
          <i class="fa fa-smile-o"></i>
        </div>
        <h4>テキストテキストテキスト</h4>
        <p>テキストテキストテキスト</p>
      </div>
      <div class="characteristics-item">
        <div>
          <i class="fa fa-file-image-o"></i>
        </div>
        <h4>テキストテキストテキスト</h4>
        <p>テキストテキストテキスト</p>
      </div> -->
    </div>
  </section>

  <section class="top-method">
    <div class="row">
      <h3 class="method-title">商品データ表作成ツール</h3>
      <p>RMSを使った面倒な商品情報の入力はもういらない！<br>らくらくにゅうりょくんはRMSでのめんどうなHTML入力をすることなく、商品情報表を出力することができる、販売促進ツールです。</p>
      <div class="method-list">
        <div class="method-item">
          <div class="method-item-inner">
            <div class="method-text">HTML不要！</div>
          </div>
        </div>
        <div class="method-item">
          <div class="method-item-inner">
            <div class="method-text">たったの3分！</div>
          </div>
        </div>
        <div class="method-item">
          <div class="method-item-inner">
            <div class="method-text">商品情報表を出力！</div>
          </div>
        </div>
      </div>
      <?php echo link_to('<div class="btn">もっと詳しく</div>', '@nyuryokun_show') ?>
      <?php echo link_to('<div class="btn">テンプレートを作成する</div>', '@nyuryokun_edit') ?>
    </div>
  </section>

  <section class="top-curriculum">
    <div class="row">
      <h2>Coming Soon</h2>
      <div class="curriculum-item">
        <div>
          <i class="fa fa-calendar"></i>
        </div>
        <h4>営業日カレンダー</h4>
        <p>見やすいカレンダーで営業日をわかりやすく！</p>
      </div>
      <div class="curriculum-item">
        <div>
          <i class="fa fa-pencil-square-o"></i>
        </div>
        <h4>レビューボックス</h4>
        <p>お客様に頂いたレビューを簡単に表示！</p>
      </div>
      <div class="curriculum-item">
        <div>
          <i class="fa fa-sort-numeric-asc"></i>
        </div>
        <h4>アイテムランキング</h4>
        <p>人気のある商品をリストにして順番に！</p>
      </div>
    </div>
  </section>
</article>