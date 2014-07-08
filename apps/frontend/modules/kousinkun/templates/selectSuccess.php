

<div>
	<article class="survey">
		<div class="surver-wrapper">
			<h2>らくらく更新くん</h2>
			<?php echo form_tag('@kousinkun_show', array('class' => 'form-horizontal')) ?>



      <div class="form-group select-color">
        <label class="col-sm-10">色を選択してください:<span class="required"> *必須</span></label>
        <div class="col-sm-10">
        	<?php foreach (KousinkunUtil::$color_array as $color_key => $color_value): ?>
        	<label class="radio-inline"><?php echo radiobutton_tag('clock_color', $color_key, $sf_params->get('clock_color') == $color_key) ?><i class="fa fa-clock-o fa-4x" style="color:<?php echo $color_value ?>"></i></label>
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

