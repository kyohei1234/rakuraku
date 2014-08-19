<?php use_helper('Validation') ?>
<!-- アンケート -->

<article class="survey">
  <div class="surver-wrapper">
    <h2>ログイン</h2>
    <?php echo form_tag('@survey_update', array('class' => 'form-horizontal')) ?>

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

  </div>
</article>