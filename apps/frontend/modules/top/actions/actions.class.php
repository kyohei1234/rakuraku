<?php

/**
 * top actions.
 *
 * @package    rakuraku
 * @subpackage top
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class topActions extends sfActions
{
  public function executeTop()
  {

  }

  public function executePrivacyPolicy()
  {

  }

  public function executeUpdate()
  {

  }

  public function handleErrorUpdate()
  {
  	$this->forward('top', 'top');
  }
}
