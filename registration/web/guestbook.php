<?php
  require_once "../src/core/all.func.php";
  showPageBlock("header.inc.php");
  showPageBlock("guestbook_form.inc.php");
  organizeSaveMessage();
  showMessages();
  showPageBlock("footer.inc.php");
?>
