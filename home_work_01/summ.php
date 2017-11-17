<html>
  <head>
    <title>PHP</title>
    <link rel="stylesheet" type="text/css" href="style/mult.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </head>
  <body>
    <?php
      echo '<div class="summ__block">';
      echo '<h2 class="summ__title">Сумма. Классная работа</h2>';
      $degree = 2;
      $j = 1;
      $CHAIN_AMOUNT = 16;
      $i = 0;
      $summ = 0;
      $sign = "";
      while ($j <= $CHAIN_AMOUNT) {
        echo '<div class="number">';
        echo '<span class="fraction">1/'.($j).'&sup'.($degree).'</span></div>';
        echo '<div class="sign">';

        if ($i % 2 == 0) {
          $sign ="-";
          $summ+= 1/(pow($j, $degree));
        }
        else {
          $sign ="+";
          $summ-= 1/(pow($j, $degree));
        }
        if ($CHAIN_AMOUNT - $j == 2 || $CHAIN_AMOUNT - $j == 1){
          $sign = "=";
        }
        echo ($sign).'</div>';

        $j+=2;
        $i++;
      }
      echo '<span class="result">'.($summ).'</span>';
      echo '</div>';


      echo '<div class="summ__block">';
      echo '<h2 class="summ__title">Сумма. Домашняя работа</h2>';
      $NESTING = 6;
      $x = deg2rad(90);
      $result = 0;

      for ($i = 1; $i < $NESTING; $i++) {
        $result += cos($x) + $x;
      }
      echo '<span>'.($result).'</span>';
      echo '</div>';

    ?>
    <script type="text/javascript">
      $('.fraction').each(function(key, value) {
        $this = $(this)
        var split = $this.html().split("/")
        if( split.length == 2 ){
          $this.html('<span class="top">'+split[0]+'</span><span class="bottom">'+split[1]+'</span>')
        }
      });
    </script>
  </body>
</html>
