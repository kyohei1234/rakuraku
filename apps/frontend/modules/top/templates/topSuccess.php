<?php use_helper('Validation') ?>

<section>

	<div class="video-wrapper">
		<video src="videos/movie2.mp4" loop controls>
		</video>
	</div>

	<article class="heading">
		<div>
			<div class="heading-top">
				<span class="heading-title">楽天の煩雑なRMSを誰でも簡単に</span>
			</div>
		</div>
	</article>


	<!-- アンケート -->
	<!-- <article class="survey">
		<div class="surver-wrapper">
			<h2>アンケート</h2>
			<?php echo form_tag('top/update', array('class' => 'form-horizontal')) ?>

			<div class="form-group">
        <label class="col-sm-10">名前:<span class="required"> *必須</span></label>
        <div class="col-sm-4">
        	<?php echo form_error('name') ?>
        	<?php echo input_tag('name', $sf_params->get('name'), array('class' => 'form-control', 'placeholder' => '')) ?>
        	<div class="help-block">１５文字以内</div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-10" for="email">メールアドレス:<span class="required"> *必須</span></label>
        <div class="col-sm-4">
        	<?php echo form_error('email') ?>
        	<?php echo input_tag('email', $sf_params->get('email'), array('class' => 'form-control', 'placeholder' => '')) ?>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-10">① 楽天市場での店舗運営において、販売促進ツールを使用したことがありますか。:<span class="required"> *必須</span></label>
        <?php echo form_error('q1') ?>
        <div class="col-sm-4">
          <?php echo select_tag('q1', options_for_select(QuestionUtil::$q1_array, $sf_params->get('q1')), array('class' => 'form-control'))?>
        </div>
      </div>


      <div class="checkbox-wrapper">
        <div class="form-bold">
        	② 質問①で、2または3を選んだ方にお聞きします。何故使用していないのですか？または使用をやめたのですか？:
        	<span class="required"> *必須</span>
        </div>
        <?php echo form_error('q2') ?>
        <div class="checkbox">
        	<?php foreach (QuestionUtil::$q2_array as $key => $value): ?>
        		<?php $q2_params = $sf_params->get('q2') ? $sf_params->get('q2') : array('') ?>
	        	<label>
	        		<?php echo checkbox_tag('q2[]', $key, in_array($key, $q2_params)).'&nbsp;'.$value ?>
	        	</label>
	        	<br>
        	<?php endforeach ?>
        </div>
        <div class="">
						<?php echo textarea_tag('q2_text', '', array('class' => 'form-control', 'placeholder' => 'その他を選んだ方はその理由をお書きください。', 'rows'=>'10', 'cols'=>'1')) ?>
					</div>
      </div>


      <div class="form-group">
        <label class="col-sm-10">
        	③ 現在、当社では楽天RMSでの入力を簡略化するツールの開発を進めております。そこで楽天RMSでのHTMLの入力に煩雑さを感じたことはありますか。:
        	<span class="required"> *必須</span>
        </label>
        <?php echo form_error('q3') ?>
        <div class="col-sm-4">
          <?php echo select_tag('q3', options_for_select(QuestionUtil::$q3_array, $sf_params->get('q3')), array('class' => 'form-control'))?>
        </div>
      </div>


      <div class="checkbox-wrapper">
        <div class="form-bold">
        	④ 店舗を運営する中で、欲しいと思ったツール、サービスはありますか。:
        	<span class="required"> *必須</span>
        </div>
        <?php echo form_error('q4') ?>
        <div class="checkbox">
        	<?php foreach (QuestionUtil::$q4_array as $key => $value): ?>
        	<?php $q4_params = $sf_params->get('q4') ? $sf_params->get('q4') : array('') ?>
	        	<label>
	        		<?php echo checkbox_tag('q4[]', $key, in_array($key, $q4_params)).'&nbsp;'.$value ?>
	        	</label>
	        	<br>
        	<?php endforeach ?>
        </div>
        <div class="">
						<?php echo textarea_tag('q4_text', '', array('class' => 'form-control', 'placeholder' => 'その他、販売促進ツールに関するご意見や当社へのご要望等ございましたらご自由にお書きください。', 'rows'=>'10')) ?>
				</div>
      </div>
      <div class="submit-wrapper">
      	<button type="submit" class="btn btn-success form-submit">送信</button>
      </div>

			</form>
		</div>
	</article> -->


	<!-- サービス内容 -->
	<!-- <article class="item-list">
		<div class="item-row">
			<div class="item-column">
				<div class="item-top">
				</div>
				<div class="item-bottom">
				</div>
			</div>
			<div class="item-column">
				<div class="item-top">
				</div>
				<div class="item-bottom">
				</div>
			</div>
			<div class="item-column">
				<div class="item-top">
				</div>
				<div class="item-bottom">
				</div>
			</div>
		</div>
		<div class="item-row">
			<div class="item-column">
				<div class="item-top">
				</div>
				<div class="item-bottom">
				</div>
			</div>
			<div class="item-column">
				<div class="item-top">
				</div>
				<div class="item-bottom">
				</div>
			</div>
			<div class="item-column">
				<div class="item-top">
				</div>
				<div class="item-bottom">
				</div>
			</div>
		</div>
	</article> -->

</section>