<?php
//this script will do a REST/json query to twitter and store the results in the database.
//Behavior: This should check the current time and the last time that twitter was queried, if the current time plus some delay is greater, it is alright to query twitter again
//otherwise, just return the results from the last query.

//include some php login information

//Compare the current time to the time in the database and branch depending on the result.
$current_time = time();
//$last_query_time = mysql_query_to_get_the_time();

//simple little twitter query and dump to browser
$twitter_query = "http://search.twitter.com/search.json?ors=lol+rofl+lulz+XD&lang=en&rpp=10";
$result = file_get_contents($twitter_query);
$vars = json_decode($result, true);
var_dump($vars);
foreach ($vars as $value)
{
    echo $value;
    echo "<BR>";
}
foreach ($vars["results"][0] as $res)
{
    echo $res;
    echo "<BR>";
}
for ($i = 0; $i < count($vars); $i++)
{
    echo "<img src='".$vars['results'][$i]['profile_image_url']."'><br>";
    echo $vars['results'][$i]['text']."<BR>";
}

//sql insert functions for returned data

//sql read functions for retrieving from database

//REST functions

?>