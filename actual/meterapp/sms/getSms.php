<?php

    date_default_timezone_set("Asia/Kolkata"); 

    // echo date('d-m-Y H:i:s');

    if ( isset($_POST["sms"])) {

        $for = "";

        if ( isset($_POST["for"]) ) {
            $for = $_POST["for"];
        }
    

    	$smsData = $_POST["sms"];
    
    	// Do the real thing here, make new files with the given input
    	$currentFileName = "sms-" . $for . "-" . date("d-m H-i-s") . ".txt";
    	file_put_contents ($currentFileName, $smsData);
    }
    
    else {
    	echo "<p>Not on submitted page.</p>";
    }

?>