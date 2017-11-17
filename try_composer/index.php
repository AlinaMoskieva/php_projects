<?php
  require_once "vendor/autoload.php";
  Twig_Autoloader::register();

  $loader = new Twig_Loader_Filesystem("templates");

  $twig = new Twig_Environment($loader);

  $books = array(
  array("number" => "Книга 1", "name" => "Зелёная миля", "author" => "Стивен Кинг"),
  array("number" => 'Книга 2', "name" => "Унесенные ветром", "author" => "Маргарет Митчел"),
  array("number" => 'Книга 3', "name" => "Граф Монте-Кристо", "author" => "Александр Дюма")
);
  echo $twig->render("books.html", array("books" => $books));
