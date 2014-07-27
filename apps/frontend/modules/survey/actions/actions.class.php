<?php

class surveyActions extends sfActions
{
  public function executeIndex()
  {
    
  }

  public function executeUpdate()
  {
    $user = new User();

    $user->setName($this->getRequestParameter('name'));
    $user->setEmail($this->getRequestParameter('email'));

    $user->save();

    //ログイン
    $this->getUser()->signIn($user);

    $this->redirect('@survey_complete');
  }

  public function executeComplete()
  {

  }
}
