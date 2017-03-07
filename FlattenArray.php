<?php
class FlattenArray
{
  public $output;
  
  public function __construct()
  {
    $this->output = array();
  }
  public function addItem ($item)
  {
    $this->output[] = $item;
  }
  public function flatten ($input)
  {
    $this->output = array();
    if (!is_array($input)) return $input;
  
    array_walk_recursive($input, 'addItem');
    return $this->output;
  }
}
