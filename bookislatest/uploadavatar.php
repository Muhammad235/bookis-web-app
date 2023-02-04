<?php
//upload.php
require_once 'server/db.php';

session_start();
 $chkemail = $_SESSION['userEmail'];

if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = rand(100, 999) . '.' . $ext;
 $location = 'uploaded_profiles/' . $name;  
 echo $location;
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);

$sql = "UPDATE users SET `avatar` ='$name' WHERE `email`= '$chkemail' ";

mysqli_query($conn, $sql);


}
?>
