<?php

/**
 * Subclass for representing a row from the 'template' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Template extends BaseTemplate
{
  public function __toString()
  {
    if ($this->getName())
    {
      return $this->getName();
    }
    else
    {
      return '';
    }
  }
}
