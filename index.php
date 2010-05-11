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
$db = new database(DB_HOST,DB_USER,DB_PASS);


// Poll Twitter, Push to Database if too much time has elapsed since last push.
$last_updated = $db->getLatestTweetTimestamp(); // in epoch time
$time = time(); // grab time now (epoch)
if (($time - $last_updated ) > TWEET_POLL)
{
	$tweet_array    = pollTwitter($TWEET_SEARCH, TWEET_MAX_DISPLAY);
	$db->pushTweets($tweet_array);	
}

$vars["page"]   = "index";

// Pull set of Tweets from DB to Display.
$vars["tweets"] = $db->getTweets();

$template->display($vars);
?>
