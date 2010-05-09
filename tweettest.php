<?php
require_once "classes/tweet.php";
$twitter_query = "http://search.twitter.com/search.json?ors=lol+rofl+lulz+XD+lmao&lang=en&rpp=10";
$result = file_get_contents($twitter_query);
$tweet = new tweet($result, 0);
$tweet->debugDump();
?>