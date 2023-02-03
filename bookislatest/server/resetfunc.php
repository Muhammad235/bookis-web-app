<?php

require 'db.php';

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = post_data('email');
    $password = post_data('password');

    echo '<pre>'.$email.'</pre>';
    echo '<pre>'.$password.'</pre>';

     //validate users input
     if (empty($email) || empty($password)) {
        $_SESSION['login'] = 'Please fill all input fields';

    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $_SESSION['login'] = 'Please provide a valid email';
    }elseif(strlen($password) < 4){
      $_SESSION['login'] = 'password should be more than 3 characters';
    }else{
        
          //check if user already exist

          $sql = "SELECT * FROM bookis WHERE email=?";
          $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                  mysqli_stmt_error($stmt);
            }else{
              mysqli_stmt_bind_param($stmt, "s", $email);
              mysqli_stmt_execute($stmt);

              mysqli_stmt_store_result($stmt);
              $resultCheck = mysqli_stmt_num_rows($stmt);

              if ($resultCheck > 0) {
                    //$_SESSION['login'] = 'User trully exist';
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    $sql = "UPDATE `bookis` SET `password`=? WHERE email ='$email'";
                    
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        mysqli_stmt_error($stmt);
                    }else{
                    mysqli_stmt_bind_param($stmt, "s", $hashed_password);
                    mysqli_stmt_execute($stmt);

                    header("location: ../login.php");
                    } 
                }else{
                    $_SESSION['login'] = 'This is not a registered email';
                }


                }       
    }

}


//redirect back to signup if there is error
if (isset($_SESSION['login'])) {
  
    //if there is error send back user data
    $_SESSION['signup-data'] = $_POST;
    header("location: ../forget-password.php");
    die();
  }
  


function post_data($field){
    $_POST[$field] ??= "";
  
    return htmlspecialchars(stripslashes($_POST[$field]));
  
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../login.php"></a>
</body>
</html>