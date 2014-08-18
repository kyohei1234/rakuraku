<?php

/**
 * Subclass for performing query and update operations on the 'item' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ItemPeer extends BaseItemPeer
{
  //テンプレート最初のitemを取得
  public static function doSelectFirstItem($items)
  {
    $c = new Criteria();

    $id_array = array();

    foreach($items as $item)
    {
      if ($item->getNextItemId())
      {
        array_push($id_array, $item->getNextItemId());
      }
    }

    $c->add(ItemPeer::ID, $id_array, Criteria::NOT_IN);

    return ItemPeer::doSelectOne($c);
  }
}
