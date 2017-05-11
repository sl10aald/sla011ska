<?php

    date_default_timezone_set("Asia/Kolkata"); 
    
    $text = "";
    $line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";

    if ( isset($_POST['data']) ) {
    	$text = $line . " <br> " . $_POST['data'];
    }

    file_put_contents('visitors.html', $text . PHP_EOL, FILE_APPEND);
    file_put_contents('visit-' . date('m-d H-i-s') . '-.html', $text);
?>