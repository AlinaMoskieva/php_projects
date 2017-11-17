<?php
  function organizeCheckParams() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $amount = isset($_POST["amount"]) ? $_POST["amount"] : "";
      if ($amount > 0) {
        checkProductColor();
      }
      else {
        echo "Please, enter product amount";
      }
    }
  }

  function checkCustomerType(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $type = isset($_POST["customer_type"]) ? $_POST["customer_type"] : "";
      if ($type == "entity" || $type == "individual") {
        showGoods();
      }
      else {
        echo "Please select your customer type";
      }
    }
  }

  function checkProductColor() {
    $color = isset($_POST["color"]) ? $_POST["color"] : "";
    echo $color;
    if ($color != "") {
      redirect("order_product.php");
    }
    else {
      echo "Please, choose color";
    }
  }

  function checkOrderForm() {
    if ($_SERVER["REQUEST_METHOD"] == "POST")  {
      $country = isset($_POST["country"]) ? $_POST["country"] : "";
      if ($country != "") {
        checkCity();
      }
      else {
        echo "Please, select your country";
      }
    }
  }

  function checkCity() {
    $city = isset($_POST["city"]) ? $_POST["city"] : "";
    if (strlen($city) > 3) {
      checkStreet();
    }
    else {
      echo "Please, input your city";
    }
  }

  function checkStreet() {
    $street = isset($_POST["street"]) ? $_POST["street"] : "";
    if (strlen($street) > 3) {
      checkHouseNumber();
    }
    else {
      echo "Please, input your street";
    }
  }

  function checkHouseNumber() {
    $house_number = isset($_POST["house_number"]) ? $_POST["house_number"] : "";

    if ($house_number > 0 ) {
      checkIndex();
    }
    else {
      echo "Please, input your house number";
    }
  }

  function checkIndex() {
    $index = isset($_POST["index"]) ? $_POST["index"] : "";

    if ($index > 0 ) {
      checkPhone();
    }
    else {
      echo "Please, input your index";
    }
  }

  function checkPhone() {
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";

    if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
      showMessage();
    }
    else {
      echo "Please, input your phone";
    }
  }
