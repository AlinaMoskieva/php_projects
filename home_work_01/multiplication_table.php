<html>
  <head>
    <title>PHP</title>
    <link rel="stylesheet" type="text/css" href="style/mult.css">
  </head>
  <body>
    <?php
      echo '<div class="mult__block">';
      echo '<h2 class="mult__title">Таблица умножения</h2>';
      $i = 1;
      while ($i <= 10) {
        echo '<table class="mult__table"><tr>';
        $j = 1;
        while ($j <= 10) {
          echo "<tr><td>".($i)."</td><td>&times;</td><td>".($j)."</td><td>=</td><td>".($i*$j)."</td></tr>";
          $j++;
        }
        if ($i!= 10) {
          echo '</tr><tr>';
        }
        $i++;
        echo '</table>';
      }
      echo '</div>';
    ?>
  </body>
</html>
