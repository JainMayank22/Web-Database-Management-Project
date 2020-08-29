<?php

$c_ferror = false;
$c2_error = false;

if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):
    $ourname = $_REQUEST['ourname'];
    $ouremail = $_REQUEST['ouremail'];
    $ourpassword = $_REQUEST['ourpassword'];
    $ourpassword_conf = $_REQUEST['ourpassword_conf'];
    $ourphone = $_REQUEST['ourphone'];
    $ouradr = $_REQUEST['ouradr'];
    
    
    
    $validate_fields = [$ourname, $ouremail, $ourpassword, $ourpassword_conf, $ourphone, $ouradr];    
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
    
    if (!(preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $ourphone))):
        echo "<div> Pattern not matched </div>";
        $c_ferror = true;
    endif;
    
    if (strlen($ourpassword) <= 6):
		$err_passlength = '<div class="error">Sorry, the password must be at least six characters</div>';
		$c_ferror = true;
	endif; 
    
    if ($ourpassword !== $ourpassword_conf) :
		$err_mypassconf = '<div class="error">Sorry, passwords must match</div>';
		$c_ferror = true;
	endif;
    
    date_default_timezone_set('US/Eastern');
    $currtime = time();
    $datefordb = date('Y-m-d H:i:s', $currtime);
    $salty = dechex($currtime).$ourpassword;
    $salted = hash('sha1', $salty);

    
    if(!($c2_error)):
        include("log_formdb.php");

		$forminfolink = mysqli_connect($host, $user, $password, $dbname);
		$forminfoquery = "INSERT INTO user_form_data (
		  ID,
		  Name,
		  Email,
		  Password,
		  Phone,
		  Address,
		  saltpassword
		)
		VALUES (
		    '',
		    '".$ourname."',
		    '".$ouremail."',
		    '".$ourpassword."',
		    '".$ourphone."',
		    '".$ouradr."',
		    '".$salted."'
		
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
        $subject = "From Gente&Cuidad --- New User Registration Form Mail";
        $message = "$ourname Thank you for filling the form.Welcome!";
        // $replyto = "Form: for";
    if (mail($to, $subject, $message)):
        $msg = "Thanks for filling out the form";
    else:
        $msg = "Problem sending the message. something problem might have occured. Please refill the form";
    endif;
    
    endif;

endif;

?>