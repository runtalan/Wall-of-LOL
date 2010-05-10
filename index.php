<?php

include_once 'functions.php';

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
$vars["page"]  = "index";
$tweetTerms[0] = "lulz";
$tweetMax      = "10";
$db            = new database(DB_HOST,DB_USER,DB_PASS);
$tweetArray    = pollTwitter($tweetTerms, $tweetMax);
$db->pushTweets($tweetArray);
$vars["page"]   = "index";
$vars["tweets"] = $db->getTweets();

$template->display($vars);
?>
