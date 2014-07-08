<?php

/**
 * user actions.
 *
 * @package    rakuraku
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class userActions extends sfActions
{
  //ログイン
  public function executeLogin()
  {
    //最初の表示
    if ($this->getRequest()->getMethod() != sfRequest::POST)
    {
      return sfView::SUCCESS;
    }

    //myLoginValidatorでログイン処理

    //フォームから返ってきた場合
    else
    {
      $this->redirect('@homepage');
    }

  }

  //ログアウト
  public function executeLogout()
  {
    $this->getUser()->signOut();

    $this->redirect('@homepage');
  } 
}
