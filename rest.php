<?php
	include("functions.php");
	$allowed_functions = array("poll");
	$func = trim($_GET["func"]);

	if (in_array($func, $allowed_functions))
	{
		$func();
	}
	else
	{
		echo "<h1>Whatchoo talkin' bout Willis?</h1>";
	}
	
	function poll()
	{
		global $TWEET_SEARCH; // global!
		
		$last_tweet_ts_received = $_GET["last_tweet_ts_rcvd"];
		
		// pull latest from database
		$db = new database(DB_HOST,DB_USER,DB_PASS);
		$last_updated = $db->getLatestTweetTimestamp();
		
		if ($last_tweet_ts_received >= $last_updated) // if ltrcvd is older than last_updated.. then rePoll
		{
			$tweet_array    = pollTwitter($TWEET_SEARCH, TWEET_MAX_DISPLAY);
			$db->pushTweets($tweet_array);
		}

		if ($last_updated != $last_tweet_ts_received)
		{
			$tweet = $db->getTweets(1);
			echo json_encode($tweet);
		}


	}
	

?>
