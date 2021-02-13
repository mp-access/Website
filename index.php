<?php

//error_reporting(0);
//require __DIR__ . '/vendor/autoload.php';

// CONSTS
$URL_PUBLIC = "localhost:8080";

// Redirect to home
$title = "home";
$req = "home";

if(isset($_GET['url']))
{
  $req = $_GET['url'];
}

// Get request content
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

// Eval php
ob_start();
eval('?>'.$page);
$page = ob_get_contents();
ob_end_clean();

// Parse markdown
/*
$Parsedown = new Parsedown();
$content = $Parsedown->text($page);
*/

$title = ucwords(str_replace('_', ' ', $title));

// print template
include_once('./layout.php');

?>