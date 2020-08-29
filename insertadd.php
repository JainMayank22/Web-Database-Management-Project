<?php
include ("log_formdb.php");
$con= mysqli_connect($host,$user,$password,$dbname);

if ($con === false) { 
    die("ERROR: Could not connect. ".$con->connect_error); 
} 
	$eventName= $_POST['ename'];
	$eventLocation=$_POST['elocation'];
	$eventDateTime=$_POST['dateTime'];
	$eventDetails=$_POST['edetails'];
	$sql="INSERT INTO Events(ID,eventName,eventLocation,eventDateTime,eventDetails) VALUES ('','".$eventName."','".$eventLocation."','".$eventDateTime."','".$eventDetails."')";
	if ($con->query($sql) === true) 
{ 
    $sucess = "Records added successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$con->error; 
} 
  
// Close connection 
$con->close(); 

?> 