<?php
include ("log_formdb");
$con= mysqli_connect($host,$user,$password,$dbname);

if ($con === false) { 
    die("ERROR: Could not connect. ".$con->connect_error); 
} 
	$eventName= $_POST['ename'];
	$eventLocation=$_POST['elocation'];
	$eventDateTime=$_POST['dateTime'];
	$eventDetails=$_POST['edetails'];
	$sql="UPDATE Events SET eventLocation='".$eventLocation."',eventDateTime='".$eventDateTime."',eventDetails='".$eventDetails."' WHERE eventName='".$eventName."'";
	    if ($con->query($sql) === true) 
{ 
    echo "Events edited successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$con->error; 
} 
  
// Close connection 
$con->close(); 

?> 