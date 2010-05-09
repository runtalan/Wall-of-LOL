<?php

/* main.html */
class __TwigTemplate_4bc77acce81ef639c55e218a8e9ead86 extends Twig_Template
{
  public function display(array $context)
  {
    // line 1
    echo "<html>
\t<head>
\t\t<link href=\"css/main.css\" rel=\"stylesheet\" type=\"text/css\"></link>
\t\t<!-- jQuery leetness -->
\t\t<script src=\"lib/jquery/js/jquery-1.4.2.min.js\" language=\"javascript\" type=\"text/javascript\">
\t\t</script>
\t\t<title>";
    // line 7
    echo (isset($context['page']) ? $context['page'] : null);
    echo "</title>
\t</head>
\t<body>
\t\t<div class=\"center_column\" id=\"header\">
\t\t\t<img src=\"img/wol-logo\" alt=\"Wall of LoL\" id=\"logo\" />
\t\t\t
\t\t</div>
\t\t<div class=\"center_column\" id=\"content\">
\t\t\t<ul id=\"feed\" class=\"feed\">
\t\t\t\t<li class=\"tweet\">
\t\t\t\t\t<p class=\"tweet_avatar\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<span style=\"display: block; background-image: url('http://a1.twimg.com/profile_images/715882048/twitterProfilePhoto_normal.jpg'); height: 48px; width: 48px;\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"tweet_text\">
\t\t\t\t\t\t<a class=\"at_link\" href=\"/martinrue\">@martinrue</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"tweet_info\">
\t\t\t\t\t\t&mdash; <a class=\"from_user\" href=\"/ThursFlwerSpots\">ThursFlwerSpots</a> 
\t\t\t\t\t\t<a class=\"tweet_id\" href=\"/status/13691957569\">#13691957569</a> 
\t\t\t\t\t\t<span class=\"created_at\">13 seconds ago</span>
\t\t\t\t\t</p>
\t\t\t\t</li>\t\t\t
\t\t\t\t<li class=\"tweet\">
\t\t\t\t\t<p class=\"tweet_avatar\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<span style=\"display: block; background-image: url('http://a3.twimg.com/profile_images/431150135/retry_me_normal.jpg'); height: 48px; width: 48px;\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"tweet_text\">
\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"tweet_info\">
\t\t\t\t\t\t&mdash; <a class=\"from_user\" href=\"/ThursFlwerSpots\">ThursFlwerSpots</a> 
\t\t\t\t\t\t<a class=\"tweet_id\" href=\"/status/13691957569\">#13691957569</a> 
\t\t\t\t\t\t<span class=\"created_at\">13 seconds ago</span>
\t\t\t\t\t</p>
\t\t\t\t</li>
\t\t\t\t<li class=\"tweet\">
\t\t\t\t\t<p class=\"tweet_avatar\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<span style=\"display: block; background-image: url('http://a3.twimg.com/profile_images/458298247/paula_bross_normal.jpg'); height: 48px; width: 48px;\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"tweet_text\">
\t\t\t\t\t\t<a class=\"at_link\" href=\"/martinrue\">@martinrue</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"tweet_info\">
\t\t\t\t\t\t&mdash; <a class=\"from_user\" href=\"/ThursFlwerSpots\">ThursFlwerSpots</a> 
\t\t\t\t\t\t<a class=\"tweet_id\" href=\"/status/13691957569\">#13691957569</a> 
\t\t\t\t\t\t<span class=\"created_at\">13 seconds ago</span>
\t\t\t\t\t</p>
\t\t\t\t</li>\t\t\t
\t\t\t\t<li class=\"tweet\">
\t\t\t\t\t<p class=\"tweet_avatar\">
\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t<span style=\"display: block; background-image: url('http://a1.twimg.com/profile_images/870084110/DJKAOSNYC1_normal.jpg'); height: 48px; width: 48px;\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"tweet_text\">
\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"tweet_info\">
\t\t\t\t\t\t&mdash; <a class=\"from_user\" href=\"/ThursFlwerSpots\">ThursFlwerSpots</a> 
\t\t\t\t\t\t<a class=\"tweet_id\" href=\"/status/13691957569\">#13691957569</a> 
\t\t\t\t\t\t<span class=\"created_at\">13 seconds ago</span>
\t\t\t\t\t</p>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"center_column\" id=\"footer\">
\t\t\t
\t\t\t
\t\t</div>
\t</body>
</html>";
  }

  public function getName()
  {
    return "main.html";
  }

}
