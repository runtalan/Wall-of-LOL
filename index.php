<?php

// <!-- TWIG SETUP -->
require_once './lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('./tpl/');
$twig = new Twig_Environment($loader, array(
  'cache' => './cache/',
  'auto_reload' => true
));
$template = $twig->loadTemplate('main.html');
// <! -- END TWIG -->


// <!-- MAIN -->
$vars["page"] = "index";
$template->display($vars);
?>