<?php
  function passValidation() {
    $notice = [];

    checkName($notice);
    checkNick($notice);
    checkEmail($notice);
    checkGender($notice);
    checkCountry($notice);
    checkPasswords($notice);
    checkTerms($notice);
    checkAvatarSize($notice);
    checkAvatarExtension($notice);

    return $notice;
  }

  function checkAvatarSize(&$notice) {
    if ($_FILES["avatar"]["size"] > 100000 || $_FILES["avatar"]["error"] == 2) {
      array_push($notice, "Avatar is too large..");
    }
  }

  function checkAvatarExtension(&$notice) {
    $allowExtension = array("png" ,"jpg");
    $filename = $_FILES["avatar"]["name"];

    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $allowExtension)) {
      array_push($notice, "Avatar has not allowed extension");
    }
  }

  function checkName(&$notice) {
    if (!isset($_POST["name"]) && !strlen($_POST["name"]) > 4) {
      array_push($notice, "Name  error");
    }

  }

  function checkNick(&$notice) {
    if (!isset($_POST["nickname"]) && !strlen($_POST["nickname"]) > 4) {
      array_push($notice, "Nickname  error");
    }
  }

  function checkMessage(&$notice) {
    if (!isset($_POST["message"]) && !strlen($_POST["message"]) > 3) {
      array_push($notice, "Message  error");
    }
  }

  function checkUserForExist(&$notice, $email) {
    if (!strpos(file_get_contents("../src/site/data/users.json"), $email)) {
      array_push($notice, "Sign up before chating!");
    }
  }

  function checkEmail(&$notice) {
    if (isset($_POST["email"]) && !filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
      array_push($notice, "Email error");
    }
  }

  function checkGender(&$notice) {
    if (!isset($_POST["gender"])) {
      array_push($notice, "Gender error");
    }

  }

  function checkCountry(&$notice) {
    if (!isset($_POST["country"])) {
      array_push($notice, "Country error");
    }

  }

  function checkPasswords(&$notice) {
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $secondly = isset($_POST["password_check"]) ? $_POST["password_check"] : "";

    if (strlen($password) < 5) {
      array_push($notice, "Password lenght must be more than 5");
    }

    if ($password != $secondly ) {
      array_push($notice, "Passwords aren't equals");
    }
  }

  function checkTerms(&$notice) {
    if (!isset($_POST["terms"])) {
       array_push($notice, "You should be agree with our terms");
    }
  }
