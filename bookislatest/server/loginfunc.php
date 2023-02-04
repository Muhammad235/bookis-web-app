<?php

require "db.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = post_data('fullname');
    $password = post_data('password');
    $checked = post_data('checked');
print_r($_POST);

    if (empty($fullname) || empty($password)) {
        $_SESSION['login'] = 'Please fill all input fields';
    }else{
        $sql = "SELECT * FROM `users` WHERE `fullname`=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
             mysqli_stmt_error($stmt);
        }else{
            mysqli_stmt_bind_param($stmt, "s", $fullname);
            mysqli_stmt_execute($stmt);
            
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdcheck = password_verify($password, $row['password']);
                    if ($pwdcheck == false) {
                    $_SESSION['login'] = 'password is incorrect';
                    }elseif($pwdcheck == true){
                       session_start();
                       $_SESSION['user_id'] = $row['id'];
                       $_SESSION['fullname'] = $row['fullname'];
                       $_SESSION['userEmail'] = $row['email'];

                     
                       header("location: ../entertainment.php");

                    }
                }else{
                $_SESSION['login'] = 'wrong password ';
                header("location: ../login.php");
                die(); 
                }
        }
        
        }

}else{
    header("location: ../login.php");
    die(); 
}


//redirect back to login if there is error
if (isset($_SESSION['login'])) {
  
    //if there is error send back user data
    $_SESSION['login-data'] = $_POST;
    header("location: ../login.php");
    die();
  }

function post_data($field){
    $_POST[$field] ??= "";
  
    return htmlspecialchars(stripslashes($_POST[$field]));
  
  }


?>
