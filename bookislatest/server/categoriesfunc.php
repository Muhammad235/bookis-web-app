<?php

session_start();
include 'db.php';

// function getAll($table){
//     global $conn;
//     $sql = 'SELECT * FROM $table';
//     return $sql_run = mysqli_query($conn, $sql) ;
// }

// function getAllActive($table, $id){

//     global $conn;
//     $sql = "SELECT * FROM $table WHERE id='$id' ";
//     return $sql_run = mysqli_query($conn, $sql);
// }

if (isset($_GET['categoryid'])) {
    $id = $_GET['categoryid'];

    echo $id;
    header('location: ../entertainment.php');


    // $sql ="DELETE FROM categories WHERE id = $id";

    // $result = mysqli_query($conn, $sql);

    // if($result){
    //     // echo "Deleted successfully";
    //     header('location: .php');
        
    // }else{
    //     die(mysqli_error($conn));
    // }
}


?>