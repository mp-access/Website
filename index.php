<?php

// default redirect to home
$title = "home";
$req = "home";

if(isset($_GET['url']))
{
  $req = $_GET['url'];
}

// get request content
$file_path = './pages/' . $req . '.php';

if(file_exists($file_path))
{
  $parts = explode("/", $req);
  $title = end($parts);
  $page = file_get_contents($file_path, true);
}
else
{
  var_dump($req);
  $title = "404";
  $page = file_get_contents('./pages/404.php', true);
}

// eval php
ob_start();
eval('?>'.$page);
$page = ob_get_contents();
ob_end_clean();

$title = ucwords(str_replace('_', ' ', $title));

// render layout
include_once('./layout.php');

?>