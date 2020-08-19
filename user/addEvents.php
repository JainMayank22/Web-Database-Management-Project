<?php include "session.php";?>
<!DOCTYPE html>
<html>

<head>
	<title>Add Events</title>
	<link rel="stylesheet" type="text/css" href="../cuidad.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="adminHeader">
		<center><img src="../pic/admin.png" alt="adminlogo">		
		</center>
	</div>
	<div id="admincen">
		<h2>Add Events</h2>
	</div>
	<?php include("insertadd.php");?>
	<?php echo $login_session; ?>
	<h2 style="float:right"><a href = "logout.php">Log Out</a></h2>
	<div id=maincenter>
		<div id="maincenter1">
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" id="form1">
		  <label for="ename">Event name:</label><br>
		  <input type="text" id="ename" name="ename" required=""><br>
		  <label for="elocation">Event location:</label><br>
		  <input type="text" id="elocation" name="elocation" required=""><br>
		  <label for="dateTime">Date & Time:</label><br>
		  <input type="datetime-local" id="dateTime" name="dateTime" required=""><br><br>
		  <textarea rows="4" cols="50" name="edetails" form="form1" placeholder = "Enter Details"></textarea><br><br>
		  <button type="submit" name="action" value="submit">Add Event</button>
		  <span><?php echo $sucess ?></span>
		</form>
		
	</div>
	</div>
	<div id="lowerbar">
		<ul>
			<li><a href="adminview.php">Home</a></li>
			<li><a href="viewEvents.php"> View Events</a></li>
			<li><a href="addEvents.php">Add Events </a></li>
			<li><a href="deleteEvents.php">Delete Events</a></li>
			<li><a href="editEvents.php">Edit Events</a></li>
			<li><a href="editTeams.html">Edit Team</a></li> 
		</ul>
	</div>
</body>

</html>