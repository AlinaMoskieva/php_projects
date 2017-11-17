<?php
  require_once "../system/utils/common.func.php";
  showHeader();
?>
<form action="" method="POST">
  <input type="text" name="name" placeholder="Input your name" autofocus="true"required><br>
  <input type="email" name="email" placeholder="Input your email"><br>
  <select>
    <option value="russia">Russia</option>
    <option value="poland">Poland</option>
    <option value="germany">Germany</option>
    <option value="austia">Austia</option>
  </select><br>
  <input type="password" name="password" placeholder="Input your password" required><br>
  <input type="password" name="password_check" placeholder="Input your password secondly" required><br>
  <input type="text" name="disabled" placeholder="disabled" disabled><br>
  <input type="checkbox" name="check1" checked> Yes
  <input type="checkbox" name="check2">Yes<br>
  <input type="radio" name="male" value="male" checked> Male
  <input type="radio" name="female" value="female"> Female
  <input type="radio" name="other" value="other"> Other <br>
  <input type="hidden" name="secret">
  <input type="submit">
</form>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    organizeCheckParams();
  }
  showFooter();
?>
