<?php

define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'bookis');


$conn = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

if($conn){
    //mysqli_connect_error();
    echo "con";
}else{
   mysqli_connect_error(); 
}
