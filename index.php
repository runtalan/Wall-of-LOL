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
$db            = new database(DB_HOST,DB_USER,DB_PASS);

// Check last update from database

$tweetArray    = pollTwitter($TWEET_SEARCH, $TWEET_MAX);
$db->pushTweets($tweetArray);
$vars["page"]   = "index";
$vars["tweets"] = $db->getTweets();

$template->display($vars);
?>
