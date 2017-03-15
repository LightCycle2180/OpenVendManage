<?php session_start(); ob_start(); ?>

<?php

session_start();

include("../includes/sqlconnect.inc");

// add routine is here


if( $_REQUEST["mode"] == "add"){


$location = trim($_POST['location']);
$address = trim($_POST['address']);
$city = trim($_POST['city']);
$state = trim($_POST['state']);
$zipcode = trim($_POST['zipcode']);
$cust_name_first = trim($_POST['cust_name_first']);
$cust_name_last = trim($_POST['cust_name_last']);
$cust_phone = trim($_POST['cust_phone']);
$cust_email = trim($_POST['cust_email']);


	
$query="INSERT INTO locations(name,address,city,state,zip,cust_name_first,cust_name_last,cust_phone,cust_email) VALUES ('$location','$address','$city','$state','$zipcode','$cust_name_first','$cust_name_last','$cust_phone','$cust_email')";

if (!mysql_query($query)){
	die('Error: ' . mysql_error());
	}else {
	header("location:../admin_locations.php");
	}

}
// delete routine is here
/*

WE DONT SUPPORT THIS CRAP YET. DONT MESS UP AND DONT LOSE LOCATIONS/CUSTOMERS. YOU'RE STUCK WITH WHAT YOU GOT BUDDY!


if( $_REQUEST["mode"] == "remove"){

		$delgid = $_SESSION['editgameid'];
		$query="DELETE FROM games WHERE gameid='$delgid'";

		if (!mysql_query($query)) {
			die('Error: ' . mysql_error());
			}else{
			$_SESSION['editgameid'] = null;
			header("location:../managegames.php");
				}
			
}

// edit routine is here

if( $_REQUEST["mode"] == "edit"){

$gameid = 		$_SESSION['editgameid'];
$gamename = trim($_POST['game']);
$lives = trim($_POST['livespercred']);
$typeofgame = trim($_POST['gametype']);


$query='update games set gamename="'.$gamename.'", livespercredit="'.$lives.'" where gameid="'.$gameid.'";';	

if (!mysql_query($query)){
	die('Error: ' . mysql_error());
	}else {
		$_SESSION['editgameid'] == null;
		header("location:../managegames.php");
	}

}

*/

?>