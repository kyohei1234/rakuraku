<?php use_helper('Validation') ?>
<!-- アンケート -->

<article class="survey">
  <div class="surver-wrapper">
    <h2>ログイン</h2>
    <?php echo form_tag('@login', array('class' => 'form-horizontal')) ?>

    <div class="form-group">
      <label class="col-sm-10" for="email">メールアドレス:<span class="required"> *必須</span></label>
      <div class="col-sm-4">
        <?php echo form_error('email') ?>
        <?php echo input_tag('email', $sf_params->get('email'), array('class' => 'form-control', 'placeholder' => '')) ?>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-10">パスワード:<span class="required"> *必須</span></label>
      <div class="col-sm-4">
        <?php echo form_error('password') ?>
        <?php echo input_password_tag('password', $sf_params->get('password'), array('class' => 'form-control', 'placeholder' => '')) ?>
      </div>
    </div>

    <button type="submit" class="btn form-submit">ログイン</button>

  </div>
</article>