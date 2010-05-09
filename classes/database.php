<?php
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
		$this->is_connected = true;
		$this->link = $this->connect();

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
	
	// pulls tweets from database, and returns an array of Tweet objects
	public function getTweets()
	{
		
	}
	
	// pushes array of tweet objects to databases
	public function pushTweets($tweetArray)
	{
		
	}
}


$db = new database(DB_HOST,DB_USER,DB_PASS);


?>