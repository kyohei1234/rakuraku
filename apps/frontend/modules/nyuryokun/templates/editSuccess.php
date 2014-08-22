<section class="container">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
    <div class="content-panel">
      <h1 class="nyuryokun-title">らくらくにゅうりょくん</h1>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="table-wrapper">
          <?php include_partial('form_table', array('item' => $item, 'template' => $template)) ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      </div>
    </div>
    <div class="content-panel">
      <div class="nyuryokun-edit-btns">
        <?php echo link_to('<div class="btn">保存</div>', '#') ?>
        <?php echo link_to('<div class="btn">詳細設定</div>', '#') ?>
        <?php echo link_to('<div class="btn">リセット</div>', '#') ?>
      </div>
    </div>
  </div>
</section>

<script>

$(function() {

  $(document).on('click', '#new-template', function() {
    var name = $(this).prev().children('#template-name').attr('value');

    console.log(name);

    if (!name)
    {
      return;
    }
    
    var $form = $('#new-template-form');
    //ajaxで送信
    $.ajax({
      url: $form.attr('action'),
      type: $form.attr('method'),
      data: $form.serialize() + '&name=' + name,
    }).success(function(data){
      $('.table-wrapper').html(data);
    }).error(function(data){
      console.dir(data);
    });
  });

  $(document).on('click', '.new-row-btn', function() {
    var tr = $(this).parents('tr');
    var id = tr.attr('data-item-id');
    var template = tr.attr('data-item-template');
    var name = tr.find('#name').attr('value');

    if (!name)
    {
      return;
    }
    
    //ajaxで送信
    $.ajax({
      url: "<?php echo url_for('nyuryokun/newRow') ?>",
      type: 'POST',
      data: 'id=' + id + '&name=' + name + '&template=' + template,
    }).success(function(data){
      $('.table-wrapper').html(data);
    }).error(function(data){
      console.dir(data);
    });
  });

  $(document).on('click', '.row-up-btn', function() {
    var tr = $(this).parents('tr');
    var id = tr.attr('data-item-id');
    var template = tr.attr('data-item-template');
    
    //ajaxで送信
    $.ajax({
      url: "<?php echo url_for('nyuryokun/upRow') ?>",
      type: 'POST',
      data: 'id=' + id,
    }).success(function(data){
      $('.table-wrapper').html(data);
    }).error(function(data){
      console.dir(data);
    });
  });

  $(document).on('click', '.row-down-btn', function() {
    var tr = $(this).parents('tr');
    var id = tr.attr('data-item-id');
    var template = tr.attr('data-item-template');
    
    //ajaxで送信
    $.ajax({
      url: "<?php echo url_for('nyuryokun/downRow') ?>",
      type: 'POST',
      data: 'id=' + id,
    }).success(function(data){
      $('.table-wrapper').html(data);
    }).error(function(data){
      console.dir(data);
    });
  });

  $(document).on('click', '.delete-row-btn', function() {
    var tr = $(this).parents('tr');
    var id = tr.attr('data-item-id');
    
    //ajaxで送信
    $.ajax({
      url: "<?php echo url_for('nyuryokun/deleteRow') ?>",
      type: 'POST',
      data: 'id=' + id,
    }).success(function(data){
      $('.table-wrapper').html(data);
    }).error(function(data){
      console.dir(data);
    });
  });

  $(document).on("keypress", ".name-input", function(event) {
    if (event.which == 13)
    {
      var tr = $(this).parents('tr');
      var id = tr.attr('data-item-id');
      var template = tr.attr('data-template-id');
      var name = $(this).attr('value');

      if (!name)
      {
        return;
      }
      
      //ajaxで送信
      $.ajax({
        url: "<?php echo url_for('nyuryokun/newRow') ?>",
        type: 'POST',
        data: 'id=' + id + '&name=' + name + '&template=' + template,
      }).success(function(data){
        $('.table-wrapper').html(data);
      }).error(function(data){
        console.dir(data);
      });
    }
  });

})

</script>