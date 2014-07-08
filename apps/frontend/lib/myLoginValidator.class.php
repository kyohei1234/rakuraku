<?php
 
class myLoginValidator extends sfValidator
{    
  public function initialize($context, $parameters = null)
  {
    // 親クラスを初期化する
    parent::initialize($context);
 
    // デフォルトを設定する
    $this->setParameter('login_error', 'Invalid input');
 
    $this->getParameterHolder()->add($parameters);
 
    return true;
  }
 
  public function execute(&$value, &$error)
  {
    //パスワードを$passwordに格納
    $password_param = $this->getParameter('password');
    $password = $this->getContext()->getRequest()->getParameter($password_param);
 
    //メールアドレスを$valueに格納
    $email = $value;
 
    $c = new Criteria();
    $c->add(UserPeer::EMAIL, $email);
    $user = UserPeer::doSelectOne($c);
 
    // そのemailを持つユーザーが存在するか？
    if ($user)
    {
      // passwordはOKか？
      if (sha1($user->getSalt().$password) == $user->getSha1Password())
      {
        $this->getContext()->getUser()->signIn($user);
 
        return true;
      }
    }
 
    $error = $this->getParameter('login_error');
    return false;
  }
}