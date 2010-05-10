<?php

chdir(".."); // change working directory
include_once("config.php");
include_once("classes/database.php");
include_once("classes/tweet.php");
include_once("functions.php");
echo "testing functions.php";

$arr = array("lulz", "XD");
$tweets = pollTwitter($arr, 10);
echo "<br>structure: <br><br><br>";
print_r($tweets);
echo "<br><br><br>var dump: <br>";
var_dump($tweets);
?>