<?php
include ("log_formdb");
$con= mysqli_connect($host,$user,$password,$dbname);

if ($con === false) { 
    die("ERROR: Could not connect. ".$con->connect_error); 
} 
	$eventName= $_POST['ename'];
	$sql="DELETE FROM Events WHERE eventName='".$eventName."'";
	    if ($con->query($sql) === true) 
{ 
    echo "Records deleted successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$con->error; 
} 
  
// Close connection 
$con->close(); 

?> 