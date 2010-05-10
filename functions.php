<?php
//
// functions.php
//
// engine for walloflol
// leveraged by webservices.php
//

/*
include("config.php");
include("classes/database.php");
include("classes/tweet.php");
*/

include_once("config.php");
include_once("classes/database.php");
include_once("classes/tweet.php");

// <--- DATABASE FUNCTIONS --->
/*
    function: updateDatabaseEntries
 	description: performs a twitter search
    
	parameters:
    $tweet_array - an array of tweet objects to push to to the database
 	$database_object - an object of type 'database' to push to
*/
function updateDatabaseEntries($tweet_array, $database_object)
{

	
}


/*
    function: purgeDatabase
 	description: clears the database

	parameters:
 	$database_object - an object of type 'database' to purge
*/
function purgeDatabase($database_object)
{
	
}


// <--- TWITTER CALLS --->
/* 
	function: pollTwitter
	description: makes a REST call to Twitter.  returns an array of tweet objects.

	parameters:
	$terms - an array of search terms
	$num - the number of results to get
*/
function pollTwitter($terms, $num)
{
    $tweet_array;
    $tweets;
    
    //$twitter_query = "http://search.twitter.com/search.json?ors=lol+rofl+lulz+XD+lmao&lang=en&rpp=10";
    //build the url
    
    $twitter_query = "http://search.twitter.com/search.json?ors=";
    for ($i = 0; $i < count($terms)-1; $i++)
    {
        $twitter_query .= $terms[$i]."+";
    }
    $twitter_query .= $terms[count($terms)-1];
    $twitter_query .= '&lang=en&rpp='.$num;
    
    //get the results and store them
    //TODO: possibly check to see if this fails and throw an exception.
    $result = file_get_contents($twitter_query);

    //break the results apart and make them into an array
    $vars = json_decode($result, true);
    for ($i = 0; $i < $num; $i++)
    {
        foreach ($vars['results'][$i] as $key => $val)
        {
            $tweet_array[$i][$key] = $val;
        }
    }

    //turn the array into objects!
    for ($i = 0; $i < $num; $i++)
    {
        $tweets[$i] = new tweet($tweet_array[$i]);
    }

    //return our array of tweet objects
    return $tweets;
}
?>