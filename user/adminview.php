<?php
  include('session.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../cuidad.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="adminHeader">
		<center><img src="../pic/admin.png" alt="adminlogo">		
		</center>
	</div>
	<h2 style="float:right"><a href = "logout.php">Log Out</a></h2>
	<div id="adminData">
		<h2>Welcome Admin !</h2><?php echo $login_session; ?>
		<p>This is the backoffice of Gente & Cuidad website....</p>
		
		<p>Create, delete or edit events.</p>
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
