<?php 
    include('session.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>PROFILE</title>
  <link rel="stylesheet" type="text/css" href="../cuidad.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
  <div id="wrapper">
    <div class="row">
      <div class="con1">
      <img src="../pic/i.jpg" alt="logo">
    </div>
    <div class="con2">
      <ul>
        <li><a href="Inicio.php">Inicio &nbsp/</a></li>
        <li><a href="Nosotros.php">&nbsp Nosotros &nbsp/</a></li>
        <li><a href="Equipos.php">&nbsp Equipos &nbsp /</a></li>
        <li><a href="Blog.html">&nbsp Blog &nbsp/</a></li>
        <li><a href="contacto.php">&nbsp Contacto &nbsp/</a></li>
        <li><a class="color" href="userPanel.php">&nbsp Profile &nbsp/</a></li>
        <li style="float:right"><a href = "logout.php">&nbsp Log Out</a></li>
      </ul>
    </div>
  </div>
    <div class="pageinfo">
      <br>
      <h2>USER PROFILE</h2>
      <h6>INICIO > PROFILE</h6>
    </div>
    <div id="innerwrapper">
    	<div id="usercen">
        <h2>View Events</h2>
		</div>
		<div id="lowerbar1">
		<ul>
			<li><a href="userViewEvents.php">View Events</a></li>
			<li><a href="userRegisterEvents.php">Register Events </a></li>
		</ul>
	</div>
    </div>
  </div>
</body>

</html>
	<?php  
$link = mysqli_connect("localhost", "pxb0554_prithul", "Mirzapur@123", "pxb0554_MyDb"); 
  
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
        echo "<th>Action</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['eventName']."</td>"; 
            echo "<td>".$row['eventLocation']."</td>"; 
            echo "<td>".$row['eventDateTime']."</td>"; 
            echo "<td>".$row['eventDetails']."</td>";
            echo "<td></td>";
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
