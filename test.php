<?php

    date_default_timezone_set("Asia/Kolkata"); 
    
    $text = "";
    $line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";

    if ( isset($_GET['data']) ) {
    	$text = $line . " <br> " . $_GET['data'];
    }

    file_put_contents('test.html', $text . PHP_EOL, FILE_APPEND);
    file_put_contents('test-' . date('m-d H-i-s') . '-.html', $text);
?>