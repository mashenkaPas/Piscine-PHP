<?php
class  Tyrion extends Lannister{
  function sleepWith($person)
  {
  if ($person instanceof Sansa )
      echo "Let's do this.\n";
  if ($person instanceof Cersei)
    echo "Not even if I'm drunk !\n";
  if ($person instanceof Jaime)
    echo "Not even if I'm drunk !\n";
}

}
?>
