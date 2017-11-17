<?php
  require_once "../system/utils/common.func.php";
  showHeader();
  session_start();
?>
<h2 class="calk-title">Калькулятор</h2>
<form class="calk-form" action=""  method="POST">
  <input type="submit" name="number" value="0">
  <input type="submit" name="operator" value="/">
  <input type="submit" name="operator" value="*">
  <input type="submit" name="operator" value="-">
  <input type="submit" name="number" class="calk-first_number" value="1">
  <input type="submit" name="number" value="2">
  <input type="submit" name="number" value="3">
  <input type="submit" name="operator" value="+">
  <input type="submit" name="number" class="calk-first_number" value="4">
  <input type="submit" name="number" value="5">
  <input type="submit" name="number" value="6">
  <input type="submit" name="result" value="=">
  <input type="submit" name="number" class="calk-first_number" value="7">
  <input type="submit" name="number" value="8">
  <input type="submit" name="number" value="9">
</form>

<?php
  if (!isset($_SESSION["number1"])) {
    initSessionAttributes();
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    setSessionAttributes();
    if (isset($_POST["result"])) {
      write();
      resetSessionAttributes();
    }
  }
  showFooter();
?>
