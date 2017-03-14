        <?php
        $flag = false;
	if(isset($_SESSION['rights'])){
		if($_SESSION['rights'] == "0"){
			echo "Admin Rights Active";
			include ("adminsidenav.php");
			include ("collectionsidenav.php");
			include ("servicesidenav.php");
			include ("officesidenav.php");
			$flag = true;
		}
	}
	
	if(isset($_SESSION['rights'])){
		if($_SESSION['rights'] == "1"){
			echo "Manager Rights Active";
			include ("collectionsidenav.php");
			include ("servicesidenav.php");
			include ("officesidenav.php");
			$flag = true;
		}
	}
	if(isset($_SESSION['rights'])){
		if($_SESSION['rights'] == "2"){
			echo "Collection Rights Active";
			include ("collectionsidenav.php");
			$flag = true;
		}
	}
	if(isset($_SESSION['rights'])){
		if($_SESSION['rights'] == "3"){
			echo "Service Rights Active";
			include ("servicesidenav.php");
			$flag = true;
		}
	}
	if(isset($_SESSION['rights'])){
		if($_SESSION['rights'] == "4"){
			echo "Office Rights Active";
			include ("officesidenav.php");
			$flag = true;
		}
	}
	if(isset($_SESSION['rights'])){
		if($_SESSION['rights'] > "4"){
			echo "Not a valid user!<br>Check logs for potential hack!";
			$flag = true;
		}
	}
		if($flag == false){
			include ("loginsidenav.php");
	}
	
	
	?>