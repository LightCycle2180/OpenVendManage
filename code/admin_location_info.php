<?php session_start(); ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
 
	<?php include ("includes/functions.php"); theme_set(); ?>

</head>
<body>

<table align="center" class="main">
	<tr>
		<td><img src="images/header.png"></td>	
	</tr>
	
<!-- row for system stats  -->	
	<tr>
		<td>
			<?php include("includes/header.php"); ?>
		</td>	
	</tr>

<!-- row for main left and right  -->

	<tr>
		<td>
		<table align="center" class="inside">
				<tr>
					<td width="200px">
						<div class="navigation">
						<?php include("includes/sidenav.php"); ?>
						</div>					
					</td>
					<td valign="top" width="440">

<!-- new table for showing the multiple server info -->				
						<table cellspacing="0" cellpadding="0" width="100%" class="content">
							<tr><td><div class="title">Location Info<Br></div></td></tr>
							<tr><td><div class="subtitle">Specific information about a particular location.</div></td></tr>
							
							<tr><td>
							<div><br>
							<div class="mainbody">
							
<?php 

	
		include("includes/sqlconnect.inc");
		$id = $_REQUEST["location_id"];
		$alllocations = mysql_query("SELECT * FROM locations WHERE location_ID = $id");
		$num_rows = mysql_num_rows($alllocations);
		
		while($row = mysql_fetch_array( $alllocations )){

						$locationid=$row['location_id'];
						$name=$row['name'];
			  			$address=$row['address'];
			  			$firstname=$row['cust_name_first'];
			  			$lastname=$row['cust_name_last'];
			  			$phone=$row['cust_phone'];
							
							//echo 'Location ID'.$location_id.'';
							echo 'Location ID: '.$locationid.'<br>';
							echo 'Location Name: '.$name.'<br>';
							echo 'Location Address: '.$address.'<br>';
							echo 'Customer Name: '.$firstname.' ' .$lastname.'<br>';
							echo 'Customer Phone Number: '.$phone.'<br>';
				}


?>
<!-- -->
							</td></tr></div>
							


						</table>							

				</td>				
				</tr>
	</table>			
	</td>
	</tr>

<!-- row for footer  -->

	<tr>
		<td>
				<?php include("includes/footer.php"); ?>
		</td>	
	</tr>
	
	
</table>



</body>
</html>
