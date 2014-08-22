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
  //新規登録
  public function executeRegister()
  {

  }

  //データベースに登録
  public function executeUpdate()
  {
    $user = new User();

    $user->setName($this->getRequestParameter('name'));
    $user->setEmail($this->getRequestParameter('email'));
    $user->setPassword($this->getRequestParameter('password'));

    $user->save();

    //ログイン
    $this->getUser()->signIn($user);

    $this->redirect('@nyuryokun_top');
  }

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
      $this->redirect('@nyuryokun_top');
    }

  }

  //ログアウト
  public function executeLogout()
  {
    $this->getUser()->signOut();

    $this->redirect('@homepage');
  }

  //バリデーション欄連
  public function handleErrorLogin()
  {
    return sfView::SUCCESS;
  }

  public function handleErrorUpdate()
  {
    return $this->forward('user', 'register');
  }
}
