<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //require 'server/db.php';

    session_start();
    session_unset();
    session_destroy();

    header('location: ../onboard1.html');

}

?>
