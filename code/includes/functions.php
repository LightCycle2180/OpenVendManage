<?php

function theme_set() {
	$completeurl = "includes/settings.xml";
	$xml = simplexml_load_file($completeurl);
	$theme = $xml->theme;
	//echo $theme;
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"includes/" . $theme . ".css\"/>" ;
	}


function is_beta() {
	$completeurl = "includes/settings.xml";
	$xml = simplexml_load_file($completeurl);
	$beta = $xml->beta;
	//echo $theme;
	if($beta==1)
		{
		//echo "success";
		echo "<h5>THIS IS ALPHA SOFTWARE DO NOT USE AS PRODUCTION.<br>This has NOT been bug tested, and could start a nuclear war!</h5>" ;
		}
	}


?>