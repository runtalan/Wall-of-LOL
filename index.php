<?php

/* Twig Set-Up -- just ignore me */
require_once './lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('./tpl/');
$twig = new Twig_Environment($loader, array(
  'cache' => './cache/',
  'auto_reload' => true
));
$template = $twig->loadTemplate('main.html');


// Build Variable Array
$vars["page"] = "index";
$template->display($vars);
?>>