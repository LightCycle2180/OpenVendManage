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
					<td valign="top" width="200px">
						<div class="navigation">
						<?php include("includes/sidenav.php"); ?>
						</div>					
					</td>
					<td valign="top" width="440">

<!-- new table for showing the body content -->				
						<table cellspacing="0" cellpadding="0" width="100%" class="content">
							<tr><td><div class="title">Add A Location<Br></div></td></tr>
							<tr><td><div class="subtitle">Create a new location for vending.</div></td></tr>
							
							<tr><td>
							<div><br>
						
<?php 
							
							include("includes/adminconnect.inc"); 
							
							/*
							THIS IS GOING TO EVENTUALLY BE USED TO EDIT LOCATIONS, BUT RIGHT NOW WE CAN ONLY ADD, SO DON'T SCREW UP DUMMY
							
							The way this works is that basically, everything is the same, other than the values are pre-filled with original data
							and the mode should be edit instead of new.
							
							
							if(isset($_REQUEST["mode"])){

							$editid = $_SESSION['editgameid'];
							$gamequery = mysql_query('SELECT * FROM games WHERE gameid = '.$editid.'') or die(mysql_error());

							while($row = mysql_fetch_array( $gamequery )){

							$gameid=$row['gameid'];
							$gamename=$row['gamename'];
							$gamelives=$row['livespercredit'];
							$gametype=$row['gametype'];
							
							echo '
										<form id="newgame" method="post" action="utilprogs/gamemod.php?mode=edit">
														<div>Game Name: <input type="text" name="game" value="'.$gamename.'"/></div>
														<div>Lives / Plays Per Credit: <input type="text" size="3" maxlength="1" name="livespercred" value="'.$gamelives.'"/></div>
														<div>Game Type: 
												<select name="gametype" value="'.$gametype.'">
       								<option value="upright">Upright</option>
  													<option value="cocktail">Cocktail</option>
														<option value="cabaret">Cabaret</option>
														<option value="bartop">Bartop</option>
														<option value="cockpit">Cockpit</option>
														<option value="pinball">Pinball</option>
												</select>
												</div>
												<br>
												<input type="submit" name="submit" value="Submit"/>
									</form>
							';

							}}else{	*/						
							
							echo '
										<form id="newgame" method="post" action="utilprogs/locationmod.php?mode=add">
														<div>Location Name: <input type="text" name="location"/></div>
														<div>Address: <input type="text" name="address"/></div>
														<div>City: <input type="text" name="city"/></div>
														<div>State: <input type="text" name="state"/></div>
														<div>Zip Code: <input type="text" size="5" maxlength="5" name="zipcode"/></div>
														<div>Customer First Name: <input type="text" name="cust_name_first"/></div>
														<div>Customer Last Name: <input type="text" name="cust_name_last"/></div>
														<div>Customer Phone: <input type="text" name="cust_phone"/></div>
														<div>Customer Email: <input type="text" name="cust_email"/></div>
												<br>
												<input type="submit" name="submit" value="Submit"/>
									</form>
							';
									
									//};				
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
