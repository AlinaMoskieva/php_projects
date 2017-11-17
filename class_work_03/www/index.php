<?php
  require_once "../system/utils/common.func.php";
  require_once "../system/utils/validation.func.php";
  showPageBlock("header.inc.php");
  showPageBlock("customer_type_form.inc.php");
  checkCustomerType();
  showPageBlock("footer.inc.php");
?>
