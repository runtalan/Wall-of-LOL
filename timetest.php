<?php
	date_default_timezone_set('UTC');
	$str = strtotime("Mon, 10 May 2010 21:57:08 +0000");
	
	$str2 = time();
	
	echo from_apachedate("Mon, 10 May 2010 21:57:08 +0000");
	
	function from_apachedate($date)
	{
	        list($D, $d, $M, $y, $h, $m, $s, $z) = sscanf($date, "%3s, %2d %3s
	%4d %2d:%2d:%2d %5s");
	        return strtotime("$d $M $y $h:$m:$s $z");

	}
	

?>