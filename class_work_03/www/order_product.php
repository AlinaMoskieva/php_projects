<?php
  require_once "../system/utils/common.func.php";
  require_once "../system/utils/validation.func.php";

  showPageBlock("header.inc.php");
  showPageBlock("order_form.inc.php");

  checkOrderForm();
  showPageBlock("footer.inc.php");
?>
