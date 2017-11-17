<?php
  function showHeader(){
    if (file_exists("../system/templates/header.inc.php")){
      include "../system/templates/header.inc.php";
    } else {
      exit ("404 header.inc.php ");
    }
  }

  function showFooter(){
    if (file_exists("../system/templates/footer.inc.php")){
      include "../system/templates/footer.inc.php";
    } else {
      exit ("404 footer.inc.php");
    }
  }

  function calculate($number1, $number2, $operator) {
    if ($number2 == 0) {
      echo "Деление на ноль невозможно";
    }
    switch($operator) {
      case "+":
        echo ($number1+$number2);
        break;
      case "-":
        echo ($number1-$number2);
        break;
      case "*":
        echo ($number1*$number2);
        break;
      case "/":
        echo ($number1/$number2);
        break;
    }
  }

  function convert($session_number, $number) {
    if ($session_number == 0) {
      return $number;
    }
    else {
      return intval(strval($session_number).strval($number));
    }
  }

  function setSessionAttributes() {
    if ($_SESSION["operator"] == "") {
      if (isset($_POST["number"])) {
        $_SESSION["number1"] = convert($_SESSION["number1"], $_POST["number"]);
      }

      if (isset($_POST["operator"])) {
        $_SESSION["operator"] = $_POST["operator"];
      }
    }
    else {
      if (isset($_POST["number"])) {
        $_SESSION["number2"] = convert($_SESSION["number2"], $_POST["number"]);
      }
    }
  }

  function write() {
    echo "<div class='calc-math'>";
    echo $_SESSION["number1"];
    echo $_SESSION["operator"];
    echo $_SESSION["number2"];
    echo "=";
    calculate($_SESSION["number1"], $_SESSION["number2"], $_SESSION["operator"]);
    echo "</div>";
  }

  function resetSessionAttributes() {
    $_SESSION["number1"] = 0;
    $_SESSION["number2"] = 0;
    $_SESSION["operator"] = "";
  }

  function initSessionAttributes() {
    $_SESSION["number1"] = 0;
    $_SESSION["number2"] = 0;
    $_SESSION["operator"] = "";
  }
