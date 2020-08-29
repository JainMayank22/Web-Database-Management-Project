<?php
   include('log_formdb.php');
   $db = mysqli_connect($host,$user,$password,$dbname);
   session_start();
   
   $user_check = $_SESSION['ouremail'];
   
   $ses_sql = mysqli_query($db,"SELECT Email FROM user_form_data WHERE Email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Email'];
   
   if(!isset($_SESSION['ouremail'])){
      header("location:iniciodesession.php");
      die();
   }
?>