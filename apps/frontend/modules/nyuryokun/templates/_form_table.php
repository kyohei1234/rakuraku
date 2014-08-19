<?php if (!$item): ?>
  <?php echo form_tag('nyuryokun/newRow', 'id=new-template-form') ?>
    <div class="btn" id="new-template">新しいテンプレートを作成</div>
  </form>
<?php else: ?>
  <table class="table table-striped table-hover">
    <tbody>
      <?php do { ?>
        <tr class="item-tr" data-item-id="<?php echo $item->getId() ?>" data-template-id="<?php echo $item->getTemplateId() ?>">
          <td><?php echo input_tag('name', '', array('value' => $item->getName(), 'class' => 'name-input')) ?></td>
          <td class="td-btn"><div class="new-row-btn"><i class="fa fa-plus-circle"></i></div><div class="delete-row-btn"><i class="fa fa-times"></i></div><div class="row-up-btn"><i class="fa fa-arrow-up"></i></div><div class="row-down-btn"><i class="fa fa-arrow-down"></i></div></td>
        </tr>
      <?php } while($item = $item->getItemRelatedByNextItemId()); ?>
    </tbody>
  </table>
<?php endif; ?>