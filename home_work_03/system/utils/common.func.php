<?php
  function showPageBlock($name){
    if (file_exists("../system/templates/".($name))){
      include "../system/templates/".($name);
    } else {
      exit ("404 ".($name));
    }
  }

  function showGoods() {
    $type = $_POST["customer_type"];

    if ($type == "entity") {
      showPageBlock("entity_goods.inc.php");
    } elseif ($type == "individual") {
      showPageBlock("individual_goods.inc.php");
    }
  }

  function showMessage() {
    echo "Product successfully ordered!";
  }

  function redirect($url, $statusCode = 303) {
     header('Location: ' . $url, true, $statusCode);
     die();
  }
?>
