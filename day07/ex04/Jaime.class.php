<?php

class Jaime extends Lannister
{
  function sleepWith($person)
  {
      if ($person instanceof Tyrion)
        echo "Not even if I'm drunk !\n";
     if ($person instanceof  Sansa)
        echo "Let's do this.\n";
      if ($person instanceof Cersei)
      echo "With pleasure, but only in a tower in Winterfell, then.\n";
 }
}
 ?>
