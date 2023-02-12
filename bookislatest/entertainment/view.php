<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="" method="get">
    <button type="submit" name="submit">submit</button>

    </form> -->
    <a href="view.php?view=dummy.pdf">View</a>

</body>
</html>


<?php

if (isset($_GET['view'])) {
    $book = $_GET['view'];

    
    $file = 'uploaded_books/'.$book;

    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $file . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    readfile($file);
}else{

    header('location:view.php');
    echo 'could not';
}

?>