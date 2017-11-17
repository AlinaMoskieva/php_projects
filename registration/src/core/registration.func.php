<?php
  function register(){
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = isset($_POST["email"]) ? $_POST["email"] : "";

        if (checkForRegistered($email)) {
          $notice = passValidation();
          noticeCheck($notice);
        }
      }
    }

  function checkForRegistered($email) {
    if (strpos(file_get_contents("../src/site/data/users.json"), $email)){
      errorHandler("You are already registered");
      return false;
    }
    else {
      return true;
    }
  }

  function noticeCheck($notice) {
    if (count($notice) == 0) {
      if (saveUser()) {
        notice("Successfully registered");
      }
    }
    else {
      errorHandler(implode(", ",$notice));
    }
  }

  function saveUser() {
    $file = fopen("../src/site/data/users.json", "a+");

    $saveName = saveAvatar();

    fwrite($file, json_encode(generateUserInfo($saveName)));
    fclose($file);

    return true;
  }

  function generateUserInfo($saveName) {
    $info = [];

    $info["name"] = $_POST["name"];
    $info["nickname"] = $_POST["nickname"];
    $info["email"] = $_POST["email"];
    $info["gender"] = $_POST["gender"];
    $info["country"] = $_POST["country"];
    $info["password"] = encryptPassword();
    $info["news"] = $_POST["news"];
    $info["terms"] = $_POST["terms"];
    $info["originalAvatar"] = $_FILES['avatar']['name'];
    $info["saveAvatar"] = $saveName;

    return $info;
  }

  function encryptPassword() {
    return str_rot13($_POST["password"].$_POST["gender"]);
  }

  function saveAvatar() {
    $uploaddir = '../src/site/data/uploads/';
    $uploadfile = $uploaddir . genereteAvatarName();

    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile)) {
      return $uploadfile;
    } else {
      return "";
    }
  }

  function genereteAvatarName() {
    $chars = "abdefhiknrstyzABDEFGHKNQRSTYZ23456789";
    $numChars = strlen($chars);

    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    $name = "";

    for ($i = 0; $i < 8; $i++) {
      $name .= substr($chars, rand(1, $numChars) - 1, 1);
    }

    return $name.time().".".$ext;
  }
