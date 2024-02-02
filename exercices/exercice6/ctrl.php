<?php
include_once('wrk.php');
class Ctrl
{
  private $wrk;
  public function __construct()
  {
    $this->wrk = new Wrk();
  }

  public function getEquipes()
  {
    return $wrk->getEquipesFromDB();
  }
}

?>