<section>
	
	<article class="heading">
		<div>
			<div class="heading-top">
				<div class="heading-title">楽天の煩雑なRMSを誰でも簡単に</div>
				<?php echo image_tag('topimage.jpg') ?>
			</div>
			<div class="heading-bottom">
			</div>
		</div>
	</article>

	<!-- アンケート -->
	<article class="survey">
		<div class="surver-wrapper">
			<?php echo form_tag('top/update') ?>
				<div>名前</div>
				<?php echo input_tag('name', '') ?>
				<div>アドレス</div> 
				<?php echo input_tag('address', '') ?>
				<div>楽天市場での店舗運営において、販売促進ツールを使用したことがありますか。</div>
				<select name="q1">
				<option value="ans0"></option>
				<option value="ans1">現在使用している。</option>
				<option value="ans2">以前、使用していたことがある。</option>						
				<option value="ans3">使用したことがない。</option>
				<option value="ans4">このアンケートで販売促進ツールについて初めて知った。</option>
				</select>
				<div>1つ前の質問で、2または3を選んだ方にお聞きします、何故使用していないまたは使用をやめたのですか？</div> 
				<?php echo checkbox_tag('q2', 1, false) ?>ツールの値段が高い<br/>
				<?php echo checkbox_tag('q2', 1, false) ?>使っても売り上げが上がらなかった（上がらないと思った)<br/>
				<?php echo checkbox_tag('q2', 1, false) ?>店舗のイメージとツールのデザインが合わなかった<br/>
				<?php echo checkbox_tag('q2', 1, false) ?>ツールの使い勝手が悪い<br/>
				<?php echo checkbox_tag('q2', 1, false) ?>その他<br/>
				<?php echo textarea_tag('name', '', 'size=100x10') ?>
				<div>現在、当社では楽天RMSでの入力を簡略化するツールの開発を進めております。そこで楽天RMSでのHTMLの入力に煩雑さを感じたことはありますか。</div>
				<?php echo select_tag('payment',
				  '<option selected="selected">
				<option value="ans0"></option>
				<option value="ans1">入力するのがとても煩雑に感じる</option>
				<option value="ans2">入力するのが煩雑に感じる</option>
				<option value="ans3">普通</option>
				<option value="ans4">入力するのは楽だ</option>
				<option value="ans4">入力するのはとても楽だ</option>') ?>
				<div>店舗を運営する中で、欲しいと思ったツール、サービスはありますか。</div> 
				<?php echo checkbox_tag('q4', 1, false) ?>RMSでの入力を簡潔化するツール<br/>
				<?php echo checkbox_tag('q4', 1, false) ?>サイトの更新日を表示するツール<br/>
				<?php echo checkbox_tag('q4', 1, false) ?>画像編集を容易にできるツール<br/>
				<?php echo checkbox_tag('q4', 1, false) ?>バナー広告を表示するツール<br/>
				<?php echo checkbox_tag('q4', 1, false) ?>ホーム画面や商品画面のレイアウトのテンプレート<br/>
				<?php echo checkbox_tag('q4', 1, false) ?>出荷予定日を表示するツール<br/>
				<?php echo checkbox_tag('q4', 1, false) ?>ショップのレビューを表示するツール<br/>
				<?php echo checkbox_tag('q4', 1, false) ?>その他(自由記述)<br/>
				<?php echo textarea_tag('name', '', 'size=100x10') ?>
				<div>その他、販売促進ツールに関するご意見や当社へのご要望等ございましたらご自由にお書きください。</div> 
				<?php echo textarea_tag('name', '', 'size=100x10') ?>
				<INPUT TYPE="submit" VALUE="送信">
				<INPUT TYPE="reset" VALUE="クリア">
			</form>	
		</div>
	</article>
	
	<!-- サービス内容 -->
	<article class="item-list">
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
	</article>

</section>