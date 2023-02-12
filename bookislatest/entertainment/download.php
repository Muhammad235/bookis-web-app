<?php


if (!empty($_GET['file'])) {

    $filename = basename($_GET['file']);

    $filepath ='uploaded_books/'. $filename;
    
    if (!empty($filename) ) {
        

        // define headers
        header('Content-Type: application/pdf');
        header("Content-Disposition: attachment; filename=$filename");

        readfile($filepath);
        exit;

    }else{
        echo "File does not exist";
    }
}








?>