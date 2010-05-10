<?php
class tweet
{
    //maybe this should be an array?
    public $profile_image_url = NULL;
    public $id = NULL;
    public $created_at = NULL;
    public $geo = NULL;
    public $iso_language_code = NULL;
    public $source = NULL;
    public $result_type = NULL;
    public $to_user = NULL;
    public $to_user_id = NULL;
    public $from_user = NULL;
    public $from_user_id = NULL;
    public $text = NULL;

    /**
    * Accepts an array of tweet elements
    * converts this into instance variables in the tweet object.
    * @param $tweet_array an array of elements of the tweet
    */
    //there is probably a better way to do this, like split them in the code that receives the response from twitter and send individual objects to this.
    function __construct($tweet_array)
    {
        foreach ($tweet_array as $key => $value)
        {

				
            if ($key != 'metadata')
            {
				$value = $value;
                $this->$key = $value;
            }
            else
            {
                $this->result_type = $value["result_type"];
            }
        }
    }

    /**
    * dumps out the instance variables to the screen
    * @return null
    */
    //dumps out all of the variables so we can look at them.
    function debugDump()
    {
        echo "<img src='".$this->profile_image_url."'><BR>";
        echo $this->id."<BR>";
        echo $this->created_at."<BR>";
        echo $this->geo."<BR>";
        echo $this->iso_language_code."<BR>";
        echo $this->source."<BR>";
        echo $this->result_type."<BR>";
        echo $this->to_user."<BR>";
        echo $this->to_user_id."<BR>";
        echo $this->from_user."<BR>";
        echo $this->from_user_id."<BR>";
        echo $this->text."<BR>";
    }
}
?>