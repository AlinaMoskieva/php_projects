<?php
  require_once "../system/utils/common.func.php";
  require_once "../system/utils/validation.func.php";
  showPageBlock("header.inc.php");
  showPageBlock("product_form.inc.php");

  organizeCheckParams();
  showPageBlock("footer.inc.php");
?>
