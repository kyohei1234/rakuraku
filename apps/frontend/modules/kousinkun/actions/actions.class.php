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
    $this->clock_image = KousinkunUtil::$clock_image_array[$this->getRequestParameter('clock_image')];
    $this->font_family = KousinkunUtil::$font_array[$this->getRequestParameter('font_family')];
    $this->font_color = KousinkunUtil::$font_color_array[$this->getRequestParameter('font_color')];
    $this->border = $this->getRequestParameter('has_border') == 1 ? '1px solid rgb(99, 95, 95)' : '0';
  }

  public function executeSelect()
  {

  }
}
