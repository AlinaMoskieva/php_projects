<?php
  $i = 1;
  while ($i < 10) {
    $j = 1;
    while ($j < 10) {
      echo ($j)."x".($i)."=".($i*$j);
      if ($j == 9) {
        echo " \n";
      }
      elseif (($i*$j) < 10) {
        echo "    ";
      }
      else {
        echo "   ";
      }

      $j++;
    }
    $i++;
  }
?>
