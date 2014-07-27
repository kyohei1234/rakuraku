<?php

class myUser extends sfBasicSecurityUser
{
  public function signIn($user)
  {
    $this->setAttribute('member_id', $user->getId(), 'member');
    $this->setAuthenticated(true);

    $this->addCredential('member');
    $this->setAttribute('name', $user->getName(), 'member');
  }

  public function signOut()
  {
    $this->getAttributeHolder()->removeNamespace('member');

    $this->setAuthenticated(false);
    $this->clearCredentials();
  }

  public function getMemberId()
  {
    return $this->getAttribute('member_id', '', 'member');
  }

  public function getMember()
  {
    return UserPeer::retrieveByPk($this->getMemberId());
  }

  public function getName()
  {
    return $this->getAttribute('name', '', 'member');
  }
}
