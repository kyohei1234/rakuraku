<?php

/**
 * kousinkun actions.
 *
 * @package    rakuraku
 * @subpackage kousinkun
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class kousinkunActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeShow()
  {
  	$this->clock_color = KousinkunUtil::$color_array[$this->getRequestParameter('clock_color')];
  	$this->font_family = KousinkunUtil::$font_array[$this->getRequestParameter('font_family')];

  }

  public function executeSelect()
  {

  }
}
