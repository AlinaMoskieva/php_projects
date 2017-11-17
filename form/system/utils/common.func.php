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

  function organizeCheckParams() {
    checkEmail();
    checkName();
    checkPasswords();
    checkCheckbox();
    checkRadio()
  }

  function checkEmail() {
    if (filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
      echo "Email tested";
    }
    else {
      echo "Email error";
    }
  }

  function checkName() {
    if (strlen($_POST["name"]) > 0) {
      echo "Name tested";
    } else {
      echo "Name error";
    }
  }

  function checkPasswords() {
    if (strlen($_POST["password"]) > 0 && $_POST["password"] === $_POST["password_check"]) {
      echo "Passwords tested";
    } else {
      echo "Passwords error";
    }
  }

  function checkCheckbox() {
    if (isset($_POST["check1"])) {
      echo "Check1 checked";
    }
    elseif (isset($_POST["check2"])) {
       echo "Check2 checked";
     } else {
      echo "Nothing checked";
    }
  }

