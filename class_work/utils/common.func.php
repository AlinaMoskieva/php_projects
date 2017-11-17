<?php
  function showPage($content){
    echo $content;
  }

  function showHeader(){
    if (file_exists('templates/header.inc.php')){
      include 'templates/header.inc.php';
    } else {
      exit ('Error');
    }
  }

  function showFooter(){
    require 'templates/footer.inc.php';
  }
