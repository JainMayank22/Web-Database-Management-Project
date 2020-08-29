<?php 
    include('session.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>View Events</title>
	<link rel="stylesheet" type="text/css" href="../cuidad.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="adminHeader">
		<center><img src="../pic/admin.png" alt="adminlogo">		
		</center>
	</div>
	
	<?php echo $login_session; ?>
	<div id="lowerbar">
		<ul>
			<li><a href="adminview.php">Home</a></li>
			<li><a href="viewEvents.php"> View Events</a></li>
			<li><a href="addEvents.php">Add Events </a></li>
			<li><a href="deleteEvents.php">Delete Events</a></li>
			<li><a href="editEvents.php">Edit Events</a></li>
			<!--<li><a href="editTeams.php">Edit Team</a></li> -->
		</ul>
	</div>
	</div>
	<div id="admincen">
		<h2>View Events</h2>
	</div>
	<h2 style="float:right"><a href = "logout.php">Log Out</a></h2>

</body>
</html>

	    	<?php  
	include("log_formdb.php");
$link = mysqli_connect($host,$user,$password,$dbname); 
  
if ($link === false) { 
    die("ERROR: Could not connect. "
                .mysqli_connect_error()); 
} 

$sql = "SELECT * FROM Events"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo '<table border="2" width="100%";><tr>'; 
        echo "<tr>"; 
        echo "<th>Event name</th>"; 
        echo "<th>Event location</th>"; 
        echo "<th>Date & Time</th>";
        echo "<th>Event details</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['eventName']."</td>"; 
            echo "<td>".$row['eventLocation']."</td>"; 
            echo "<td>".$row['eventDateTime']."</td>"; 
            echo "<td>".$row['eventDetails']."</td>";
            echo "</tr>"; 
        } 
        echo "</table>"; 
        mysqli_free_res($res); 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 

mysqli_close($link); 


?>



