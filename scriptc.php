<?php

$c_ferror = false;
$c2_error = false;

if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):
    $ourname = $_REQUEST['ourname'];
    $ouremail = $_REQUEST['ouremail'];
    $ourevent = $_REQUEST['ourevent'];
    $eventdetail = $_REQUEST['eventdetail'];
    
    
    
    $validate_fields = [$ourname, $ouremail, $ourevent, $eventdetail];    
    foreach ($validate_fields as $key){
            if($key === '') :
                echo "<div> Sorry, Please fill the input field</div>";
                $c_ferror = true;            
            endif;
    }
    
    if (!(preg_match('/[A-Za-z]+/', $ourname))):
        echo "<div> Pattern not matched </div>";
        $c_ferror = true;
    endif;
    
    
    date_default_timezone_set('US/Eastern');
    $currtime = time();
    $datefordb = date('Y-m-d H:i:s', $currtime);
    
    if(!($c2_error)):
        include("log_formdb.php");

		$forminfolink = mysqli_connect($host, $user, $password, $dbname);
		$forminfoquery = "INSERT INTO contactform_data (
		  id,
		  name,
		  email,
		  reason,
		  brief
		)
		VALUES (
		    '',
		    '".$ourname."',
		    '".$ouremail."',
		    '".$ourevent."',
		    '".$eventdetail."'
		
		)";
		
    	if ($forminforesult = mysqli_query($forminfolink, $forminfoquery)):
		  $msg1 = "Your form data has been processed. Thanks.";
		else:
		  $msg1 = "Problem with database";
		endif; //write to database

		mysqli_close($forminfolink);

	endif; // check for form errors

    
    if(!($c_ferror)) :
        $to = "$ouremail";
        $subject = "From Gente&Cuidad ---Contact Form Mail";
        $message = "$ourname Thank you for filling the form. We will contact you soon";
        // $replyto = "Form: for";
    if (mail($to, $subject, $message)):
        $msg = "Thanks for filling out the form";
    else:
        $msg = "Problem sending the message. something problem might have occured. Please refill the form";
    endif;
    
    endif;

endif;

?>