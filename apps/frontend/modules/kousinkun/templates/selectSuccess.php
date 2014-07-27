

<div>
	<article class="survey">
		<div class="surver-wrapper">
			<h2>✰✰らくらく更新くん✰✰</h2>
			<?php echo form_tag('@kousinkun_show', array('class' => 'form-horizontal')) ?>

      <div class="main-wrapper">
        <div class="preview-top">プレビュー</div>
        <div class="main">
          <!-- <i class="fa fa-clock-o clock-preview"></i> -->
          <div class="clock-preview"><?php echo image_tag('simple_black.png', 'absolute=true') ?></div>
          <div class="kousin-main">
            <div class="month-value"></div>
            <div class="month-unit">月</div>
            <div class="date-value"></div>
            <div class="date-unit">日</div>
            <div class="updated">更新！</div>
          </div>
        </div>
      </div>



      <!-- <div class="form-group select-color">
        <label class="col-sm-10">使用する画像を選択してください:<span class="required"> *必須</span></label>
        <div class="col-sm-10">
        	<?php //foreach (KousinkunUtil::$clock_image_array as $color_key => $color_value): ?>
        	<label class="radio-inline"><?php //echo radiobutton_tag('clock_image', $color_key, $sf_params->get('clock_image') == $color_key) ?><i class="fa fa-clock-o fa-4x" style="color:<?php //echo $color_value ?>"></i></label>
        	<?php //endforeach ?>
        </div>
      </div> -->

      <div id="kousinkun-group" class="form-group select-color">
        <label class="col-sm-10">使用する画像を選択してください:<span class="required"> *必須</span></label>
        <div class="col-sm-10">
          <?php foreach (KousinkunUtil::$clock_image_array as $image_key => $image_value): ?>
          <label class="radio-inline clock-inline"><?php echo radiobutton_tag('clock_image', $image_key, $sf_params->get('clock_image') == $image_key) ?><div class="clock-image" data-image = "<?php echo $image_value ?>"><?php echo image_tag($image_value, 'absolute=true') ?></div></label>
          <?php endforeach ?>
        </div>
      </div>


      <div class="form-group select-font">
        <label class="col-sm-10">文字の色を選択してください:<span class="required"> *必須</span></label>
        <div class="col-sm-10">
          <?php foreach (KousinkunUtil::$font_color_array as $font_color_key => $font_color): ?>
          <label class="radio-inline"><?php echo radiobutton_tag('font_color', $font_color_key, $sf_params->get('font_color') == $font_color) ?><span class="font-radio" style="color:<?php echo $font_color ?>">６月２５日更新！</span></label>
          <?php endforeach ?>
        </div>
      </div>


      <div class="form-group select-font">
        <label class="col-sm-10">フォントを選択してください:<span class="required"> *必須</span></label>
        <div class="col-sm-10">
          <?php foreach (KousinkunUtil::$font_array as $font_key => $font_value): ?>
          <label class="radio-inline"><?php echo radiobutton_tag('font_family', $font_key, $sf_params->get('font_family') == $font_key) ?><span class="font-radio" style="font-family:<?php echo $font_value ?>">６月２５日更新！</span></label>
          <?php endforeach ?>
        </div>
      </div>

      <div class="form-group select-font">
        <label class="col-sm-10">枠線の有無を選択してください:<span class="required"> *必須</span></label>
        <div class="col-sm-10">
          <label class="radio-inline"><?php echo radiobutton_tag('has_border', 1, $sf_params->get('has_border') == 1) ?><span class="font-radio">有</span></label>
          <label class="radio-inline"><?php echo radiobutton_tag('has_border', 2, $sf_params->get('has_border') == 2) ?><span class="font-radio">無</span></label>
        </div>
      </div>




      <div class="">
      	<button type="submit" class="btn btn-success form-submit">送信</button>
      </div>






			</form>
		</div>
	</article>
</div>


<script>
    var border;
    var font_color;
    var font_family;
    var clock_image;

    $('input:radio[name="clock_image"]').change(function(){
      clock_image = $(this).next().find('img').attr('src');
      addCss(border, clock_image, font_family, clock_image);
    });

    $('input:radio[name="font_color"]').change(function(){
      font_color = $(this).next().css('color');
      addCss(border, font_color, font_family, clock_image);
    });

    $('input:radio[name="font_family"]').change(function(){
      font_family = $(this).next().css('font-family');
      addCss(border, font_color, font_family, clock_image);
    });

    $('input:radio[name="has_border"]').change(function(){
      border = $(this).val() == 1 ? '1px solid rgb(99, 95, 95)' : '0px';
      addCss(border, font_color, font_family, clock_image);
    });

    addCss(border, font_color, font_family, clock_image);


    function addCss(border, font_color, font_family, clock_image){
      if (typeof border === 'undefined') {
        border = '0px';
      };
      if (typeof font_color === 'undefined') {
        font_color = 'black';
      };
      if (typeof font_family === 'undefined') {
        font_family = 'serif';
      };
      if (typeof clock_image === 'undefined') {
        clock_image = "<?php echo url_for('images/simple_black.png', true) ?>";
      };

      $('.clock-preview').find('img').attr('src', clock_image);

      $('.main').css({'font-size':'25px', 'display':'inline-block', 'padding':'4px', 'height':'50px', 'border': border, 'margin':'10px 0 0 10px'});

      $('.main-wrapper').css({'padding':'0 0 10px 0', 'background-color':'#ffffff', 'margin-bottom':'20px', 'width':'400px', 'border':'1px solid blue'});

      $('.kousin-main').css({'display':'inline-block', 'color': font_color, 'font-family': font_family});
      $('.preview-top').css({'background-color':'blue', 'color':'white', 'padding':'0 0 0 20px'});
      $('.clock-preview').css({'vertical-align':'super', 'display':'inline-block'});


      $('.kousin-main div').css({'float':'left'});
    }

    //更新日のクラス
    function Koushin()
    {
      this.year;
      this.month;
      this.date;
      this.day;
    }

    //jQueryで値を表示
    $(function() {
      var koushin = new Koushin();

      //今日の日付を取得
      var localtime = new Date();
      //年
      koushin.year = localtime.getFullYear();
      //月
      koushin.month = localtime.getMonth() + 1;
      //日
      koushin.date = localtime.getDate();
      //曜日
      koushin.day = localtime.getDay();

      //日付を最後の営業日に
      getLastWorkDate(koushin);



      //表示
      $('.month-value').html(koushin.month);
      $('.date-value').html(koushin.date);

      console.log($('.month-value').css('all'));
    });

    //最後の営業日をkoushinに格納する関数
    function getLastWorkDate(koushin)
    {
      //日数を減らす
      decrementDate(koushin);

      //月数を減らす
      decrementMonth(koushin);
    }

    //曜日に応じて日数を減らす関数
    function decrementDate(koushin)
    {
      switch (koushin.day)
      {
        //月曜の場合
        case 1:
          koushin.date -= 3;
          break;
        //日曜の場合
        case 0:
          koushin.date -= 2;
          break;

        //それ以外
        default:
          koushin.date -= 1;
          break;
      }
    }

    //月をまたがるときに月数を減らす関数
    function decrementMonth(koushin)
    {
      //日数が0以下になっていたら
      if (koushin.date < 1)
      {
        //月数を1減らす
        koushin.month -= 1;
        //1月だった場合は12月に
        if (koushin.month == 0)
        {
          koushin.month = 12;
        }
        //新しい日付を代入
        koushin.date = numOfDays[isLeap(koushin.year)][koushin.month - 1] + koushin.date;
      }

    }

    //閏年判定
    function isLeap(year)
    {
      if (year % 4 ==0 && year % 100 != 0 || year % 400 == 0)
        return 1;
      return 0;
    }

    //月の日数(1が閏年)
    var numOfDays = new Array(2);
    numOfDays[0] = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    numOfDays[1] = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];




  </script>
