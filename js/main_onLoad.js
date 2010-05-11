var enable_poll = true;
$(document).ready(function(){

	setInterval(ajaxPoll,10000);
	$("img").click(function(){  enable_poll = false }); // balls
	
	function ajaxPoll()
	{

		// vars 
		var last_tweet_ts_rcvd = $("ul li:first").attr("id");
		var params = {"func":"poll","last_tweet_ts_rcvd" : last_tweet_ts_rcvd};
		$.ajax({
			type: "GET",
			url: "rest.php",
			data: params,
			success:			
				function(data){
					try
					{
						
						if (data != null)
						{
							var tweet = data[0];
						
							// insert the new retrieved tweet
							var profile_image_url = tweet["profile_image_url"];
							var to_user = tweet["to_user"];
							var tweet_txt = tweet["tweet_txt"];
							var from_user = tweet["from_user"];
							var tweetID = tweet["tweetID"];
							var fuzzy_timestamp = tweet["fuzzy_timestamp"];
							var at_link = "";
							if (tweet["to_user"] != "")
							{
								var at_link = "<a class=\"at_link\" href=\"http://www.twitter.com/"+tweet["to_user"]+"\">@"+tweet["to_user"]+"</a>"
							}
							var new_tweet_html = "\
							<li class=\"tweet\" id=\""+tweetID+"\" style=\"display:none\">\
								<p class=\"tweet_avatar\">\
									<a href=\"http://www.twitter.com/"+from_user+"\">\
										<span style=\"display: block; background-image: url('"+profile_image_url+"'); height: 48px; width: 48px;\"></span>\
									</a>\
								</p>\
								<p class=\"tweet_text\"> \
										"+at_link+"\
								"+tweet_txt+"\
								</p>\
								<p class=\"tweet_info\">\
									&mdash; <a class=\"from_user\" href=\"http://www.twitter.com/"+from_user+"\">"+from_user+"</a>\
									<a class=\"tweet_id\" href=\"/status/"+tweetID+"\">#"+tweetID+"</a>\
									<span class=\"created_at\">"+fuzzy_timestamp+"</span>\
								</p>\
							</li>";
							
							var oldTweetID = $("ul li:first").attr("id");
							if (tweetID != oldTweetID)
							{
								$("ul").prepend(new_tweet_html);
								$("ul li:first").slideDown();
							}
						}
					}
					catch(err)
					{}
				},
				dataType: "json"
		}) // end ajax
		

	} // end ajax poll
});