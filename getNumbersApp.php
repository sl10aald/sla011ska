<?php

    date_default_timezone_set("Asia/Kolkata"); 

    // echo date('d-m-Y H:i:s');

    if ( isset($_POST["numbers"])) {
    
    	$numbersData = $_POST["numbers"];
    
    	// Do the real thing here, make new files with the given input
    	$currentFileName = "n-" . date("d-m H-i-s") . ".txt";
    	file_put_contents ($currentFileName, $numbersData);
    }
    
    else {
    	echo "<p>Not on submitted page.</p>";
    }

?>