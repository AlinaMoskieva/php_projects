<html>
 <head>
  <title>PHP</title>
  <link rel="stylesheet" type="text/css" href="style/mult.css">
 </head>
 <body>
    <?php
      echo '<div class="sort__block">';
      echo '<h2 class="sort__title">Сортировка пузырьком</h2>';
      $arr = array(1, 2, 3, 4, 5, 6, 7, 8);
      shuffle($arr);
      for($i = 0; $i < count($arr); $i++){
        for($j = $i; $j < count($arr); $j++){
          if($arr[$i]>$arr[$j]){
            $x = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $x;
          }
        }
      }
      foreach ($arr as $a) {
        echo ($a)."&nbsp";
      }
      echo "</div>";


      echo '<div class="sort__block">';
      echo '<h2 class="sort__title">Сортировка вставками</h2>';
      $arr = array(1, 2, 3, 4, 5, 6, 7, 8);
      shuffle($arr);
      for($i = 1; $i < count($arr); $i++){
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 && $arr[$j] > $key) {
          $arr[$j+1] = $arr[$j];
          $j--;
        }
        $arr[$j+1] = $key;
      }

      foreach ($arr as $a) {
        echo ($a)."&nbsp";
      }
      echo "</div>";
    ?>
 </body>
</html>
