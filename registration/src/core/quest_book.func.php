<?php
  function organizeSaveMessage() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = isset($_POST["email"]) ? $_POST["email"] : "";
      $notice = [];

      checkEmail($notice);
      checkUserForExist($notice, $email);
      checkMessage($notice);

      if (count($notice) == 0) {
        saveMessage();
        notice("Successfully posted!");
      } else {
        errorHandler(implode(", ",$notice));
      }

    }
  }

  function saveMessage() {
    $file = fopen("../src/site/data/messages.json", "a+");
    fwrite($file, json_encode(generateMessage()));
    fclose($file);
  }

  function generateMessage() {
    $message = [];

    $message["email"] = $_POST["email"];
    $message["message"] = $_POST["message"];

    return $message;
  }

  function showMessages() {
    $data = file("../src/site/data/messages.json");

    if (!empty($data)) {
      $fileData = $data[0];

      $messages =  explode("}{", substr($fileData, 1, strlen($fileData) - 2));

      for($i=0; $i < count($messages); $i++ ) {
        $email = searchName(explode("\"",$messages[$i])[3]);
        $message = explode("\"",$messages[$i])[7];
        $avatar = searchAvatar(explode("\"",$messages[$i])[3]);

        showMessage($email, $message, $avatar);
      }
    }
  }

  function searchName($email){
    $fileData = file("../src/site/data/users.json")[0];

    $users =  explode("}{", substr($fileData, 1, strlen($fileData) - 2));
    for($i=0; $i < count($users); $i++ ) {
      if ($email == (explode("\"",$users[$i]))[11]) {
        return explode("\"",$users[$i])[7];
        break;
      }
    }
  }

  function searchAvatar($email) {
    $fileData = file("../src/site/data/users.json")[0];
    $users =  explode("}{", substr($fileData, 1, strlen($fileData) - 2));

    for($i=0; $i < count($users); $i++ ) {
      if ($email == (explode("\"",$users[$i]))[11]) {
        return explode("\"",$users[$i])[39];
        break;
      }
    }
  }

