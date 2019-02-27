<?php
class NightsWatch implements IFighter
{
  private $arr;

  public function fight()
  {
    foreach ($this->arr as $key => $value) {
      $value->fight();
    }
  }

  public function recruit($person)
  {
    if ($person instanceof IFighter)
    {
      $this->arr[] = $person;
    }
  }

}
?>
