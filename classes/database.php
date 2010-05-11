<?php
// change back to config.php , and remove all other shit
include_once("config.php");

class database
{
	
	// property declarations
	protected $username;
	protected $host;
	protected $password;
	protected $is_connected;
	protected $link;
	
	// constructor
	function __construct($host,$user,$pass)
	{
		$this->host = $host;
		$this->username = base64_decode($user);
		$this->password = base64_decode($pass);
		$this->link = $this->connect();
		mysql_select_db(DB_NAME, $this->link); // select database.
	}
	
	// destructor
	function __destruct()
	{
		$this->disconnect();
	}
	
	public function connect()
	{
		$link = mysql_connect($this->host, $this->username, $this->password);
		return $link;
	}
	
	public function disconnect()
	{
		return mysql_close($this->link);
	}
	
	
	// looks in the database for the latest tweet,
	public function getLatestTweetTimeStamp()
	{
		$qry = "SELECT created_at FROM tweets ORDER BY created_at DESC LIMIT 1";
		$re  = mysql_query($qry);
		return mysql_result($re, 0);
	}
	
	// pulls tweets from database, and returns an multi dimensional array;
	public function getTweets()
	{
		function parseAtLink($tweetxt)
		{
			$firstChar = substr($tweetxt, 0, 1);
			if ($firstChar == "@")
			{
				$explode_tweet = explode(" ", $tweetxt);
				$atLink = $explode_tweet[0];
				$tweetxt = str_replace($atLink, "", $tweetxt);
				return $tweetxt;
			}
			else
			{
				return $tweetxt;
			}
		}
		
		$qry    = "SELECT * from tweets ORDER BY created_at DESC LIMIT 10";
		$re     = mysql_query($qry) or die(mysql_error());
		$time   = time();
		$tweets = array();
		while ($row = mysql_fetch_array($re, MYSQL_ASSOC)) {
			$tweet["profile_image_url"] = $row["profile_image_url"];
			$tweet["tweetID"]           = $row["tweetID"];
			$tweet["created_at"]        = $row["created_at"];
			$tweet["geo"]               = $row["geo"];
			$tweet["iso_language"]      = $row["iso_language"];
			$tweet["source"]            = $row["source"];
			$tweet["result_type"]       = $row["result_type"];
			$tweet["to_user"]           = $row["to_user"];
			$tweet["to_user_id"]        = $row["to_user_id"];
			$tweet["from_user"]         = $row["from_user"];
			$tweet["from_user_id"]      = $row["from_user_id"];
			$tweet["tweet_txt"]         = parseAtLink($row["tweet_txt"]);	
			$tweet["fuzzy_timestamp"]   = getFuzzyTime($time, $row["created_at"]);
			$tweet["tweet_txt"]         = htmlspecialchars_decode($tweet["tweet_txt"]);
			array_push($tweets,$tweet);
		}
		mysql_free_result($re);
		return $tweets;
	}
	
	// pushes array of tweet objects to databases
	public function pushTweets($tweetArray)
	{
		foreach($tweetArray as $tweet)
		{
			$profile_image_url = $tweet->profile_image_url;
			$tweetID           = $tweet->id;
			$created_at        = $tweet->created_at;
			$created_at		   = from_apachedate($created_at);
			$geo               = $tweet->geo;
			$iso_language      = $tweet->iso_language;
			$source            = $tweet->source;
			$result_type       = $tweet->result_type;
			$to_user           = $tweet->to_user;
			$to_user_id        = $tweet->to_user_id;
			$from_user         = $tweet->from_user;
			$from_user_id      = $tweet->from_user_id;
			$tweet_txt         = htmlspecialchars($tweet->text, ENT_QUOTES);

			$qry = "INSERT INTO tweets (profile_image_url, tweetID, created_at, geo, iso_language_code, source, result_type, to_user, to_user_id, from_user, from_user_id, tweet_txt) VALUES ('".$profile_image_url."', '".$tweetID."', '".$created_at."', '".$geo."', '".$iso_language."', '".$source."', '".$result_type."', '".$to_user."', '".$to_user_id."', '".$from_user."', '".$from_user_id."', '".$tweet_txt."');";
			
			if (!DEBUG) mysql_query($qry);
		}
	}
}




?>
