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
							<tr><td><div class="title">Locations<Br></div></td></tr>
							<tr><td><div class="subtitle">List of all locations.</div></td></tr>
							<tr><td><div class="subtitle"><a href="admin_addlocation.php">Add New Location</a></div></td></tr>
							
							<tr><td>
							<div><br>
							
						<table class="datatable">
						<tr>
						<td align= "center">Location ID</td>
						<td align= "center">Location</td>
						<td align= "center">Address</td>
						<td align= "center">Name</td>
						<td align= "center">Phone</td>
<?php 

	
		include("includes/sqlconnect.inc");

		$alllocations = mysql_query("SELECT * FROM locations ORDER BY location_id ASC");
		$num_rows = mysql_num_rows($alllocations);
		
		while($row = mysql_fetch_array( $alllocations )){

						$locationid=$row['location_id'];
						$name=$row['name'];
			  			$address=$row['address'];
			  			$firstname=$row['cust_name_first'];
			  			$lastname=$row['cust_name_last'];
			  			$phone=$row['cust_phone'];
							
							echo '<tr><td align="center"><a href="admin_location_info.php?location_id='.$locationid.'">'.$locationid.'</a></td>';
							echo '<td>'.$name.'</td>';
							echo '<td>'.$address.'</td>';
							echo '<td>'.$firstname.' ' .$lastname;
							echo '<td>'.$phone.'</td><tr>';
				}


?>
</table>
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
