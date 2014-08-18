<?php

/**
 * nyuryokun actions.
 *
 * @package    rakuraku
 * @subpackage nyuryokun
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class nyuryokunActions extends sfActions
{
  public function executeShow()
  {
    
  }

  public function executeEdit()
  {
    $user = $this->getUser()->getMember();

    $items = $user->getItems();

    $this->item = ItemPeer::doSelectFirstItem($items);

    ChromePhp::log($items);
    ChromePhp::log($this->item);
  }

  public function executeNewRow()
  {
    $user = $this->getUser()->getMember();

    //新しいテンプレートを作成する場合
    if (!$this->getRequestParameter('id'))
    {
      $template = new Template();
      $template->setUserId($user->getId());
      $template->save();

      $item = new Item();
      $item->setUserId($user->getId());
      $item->setTemplateId($template->getId());
      $item->save();
    }
    else
    {
      //受け取ったアイテム
      $previous_item = ItemPeer::retrieveByPk($this->getRequestParameter('id'));
      //受け取ったアイテムの次にあるアイテム
      $next_item = $previous_item->getItemRelatedByNextItemId();

      //新しく生成されるアイテム
      $item = new Item();

      $item->setUserId($user->getId());
      $item->setTemplateId($this->getRequestParameter('template'));
      if ($next_item)
      {
        $item->setNextItemId($next_item->getId());
      }
      
      $item->save();

      $previous_item->setNextItemId($item->getId());
      $previous_item->setName($this->getRequestParameter('name'));  
      $previous_item->save();
    }

    $items = $user->getItems();
    $this->item = ItemPeer::doSelectFirstItem($items);
  }

  public function executeDeleteRow()
  {
    $user = $this->getUser()->getMember();

    $item = ItemPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($item);

    //1つ前のitemを取得
    $previous_items = $item->getItemsRelatedByNextItemId();
    //最初の要素を取得
    $previous_item = reset($previous_items);

    if ($previous_item)
    {
      $previous_item->setNextItemId($item->getNextItemId());
      $previous_item->save();
    }

    $item->delete();

    $items = $user->getItems();
    $this->item = ItemPeer::doSelectFirstItem($items);

    $this->setTemplate('newRow');
  }

  public function executeUpRow()
  {
    $user = $this->getUser()->getMember();

    $item = ItemPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($item);

    //1つ前のitemを取得
    $previous_items = $item->getItemsRelatedByNextItemId();
    //そのitemの最初の要素を取得
    $previous_item = reset($previous_items);

    if ($previous_item)
    {
      //1つ前のitemを取得
      $previous_previous_items = $previous_item->getItemsRelatedByNextItemId();
      //そのitemの最初の要素を取得
      $previous_previous_item = reset($previous_previous_items);

      if ($previous_previous_item)
      {
        $previous_previous_item->setNextItemId($item->getId());
        $previous_previous_item->save();
      }


      $previous_item->setNextItemId($item->getNextItemId());
      $previous_item->save();

      $item->setNextItemId($previous_item->getId());
      $item->save();
    }

    $items = $user->getItems();
    $this->item = ItemPeer::doSelectFirstItem($items);
    
    $this->setTemplate('newRow');
  }

  public function executeDownRow()
  {
    $user = $this->getUser()->getMember();

    $item = ItemPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($item);

    //1つ後のitemを取得
    $next_item = $item->getItemRelatedByNextItemId();

    //1つ前のitemを取得
    $previous_items = $item->getItemsRelatedByNextItemId();
    //そのitemの最初の要素を取得
    $previous_item = reset($previous_items);

    if ($previous_item)
    {
      $previous_item->setNextItemId($item->getNextItemId());
      $previous_item->save();
    }
    
    $item->setNextItemId($next_item->getNextItemId());
    $item->save();

    $next_item->setNextItemId($item->getId());
    $next_item->save();

    $items = $user->getItems();
    $this->item = ItemPeer::doSelectFirstItem($items);
    
    $this->setTemplate('newRow');
  }
}
