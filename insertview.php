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
        echo "<table>"; 
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