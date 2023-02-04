<?php

require 'db.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // echo '<pre>';
  //     var_dump($_POST);
  // echo '</pre>';

  $fullname = post_data('fullname');
  $email = post_data('email');
  $password = post_data('password');
  $checked = post_data('checked');


    //validate users input
    if (empty($fullname) || empty($email) || empty($password)) {
        $_SESSION['empty'] = 'Please fill all input fields';

    }elseif(!$checked == 1){
      $_SESSION['empty'] = 'Please accept terms and condition';

    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $_SESSION['empty'] = 'Please provide a valid email';

    }elseif(strlen($password) < 4){
      $_SESSION['empty'] = 'password should be more than 3 characters';

    }else{
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // echo "<h1>password :. $hashed_password </h1>";

        echo '<h1>'.$email.'</h1>';


        //validate user email with api

            // Initialize cURL.
            $ch = curl_init();

            curl_setopt_array($ch,[
              //Set the URL that you want to GET by using the CURLOPT_URL option.
                CURLOPT_URL => "https://emailvalidation.abstractapi.com/v1/?api_key=20986ee32543489bbf582bf598f7661b&email=$email",
                // Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
                CURLOPT_RETURNTRANSFER => true,
                // Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
                CURLOPT_FOLLOWLOCATION => true
            ]);
  
            $response = curl_exec($ch);
  
            $data = json_decode($response, true);

          if($data['deliverability'] === "UNDELIVERABLE" || $data['is_valid_format']['value'] === false || $data['is_disposable_email']['value'] === true){
              $_SESSION['empty'] = 'Please provide an authentic email';
          }else{
              //  echo '<h1>'.$email.' success'.'</h1>';

          //check if user already exist

          $sql = "SELECT * FROM users WHERE email=?";
          $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                  mysqli_stmt_error($stmt);
            }else{
              mysqli_stmt_bind_param($stmt, "s", $email);
              mysqli_stmt_execute($stmt);

              mysqli_stmt_store_result($stmt);
              $resultCheck = mysqli_stmt_num_rows($stmt);

              if ($resultCheck > 0) {
                    $_SESSION['empty'] = 'User already exist';
                    //  echo '<h1>'.$email.' already exist'.'</h1>';
              }else{
                $avatar = 0;
                $sql = "INSERT INTO users (fullname, email, password, avatar) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);

                mysqli_stmt_bind_param($stmt, 'ssss', $fullname, $email, $hashed_password, $avatar);
                mysqli_stmt_execute($stmt);

                header('location: ../login.php');
                echo '<h1>'.$email.' does now exist'.'</h1>';

                mysqli_stmt_close($stmt);
                mysqli_close($conn);
                echo 
                var_dump($data);
        
              }
            }
          }


        
    }
}else{
  header("location: ../signup.php");
  exit();
}

//redirect back to signup if there is error
if (isset($_SESSION['empty'])) {
  
  //if there is error send back user data
  $_SESSION['signup-data'] = $_POST;
  header("location: ../signup.php");
  die();
}


function post_data($field){
  $_POST[$field] ??= "";

  return htmlspecialchars(stripslashes($_POST[$field]));

}

  // echo '<pre>';
  //     var_dump($_POST);
  // echo '</pre>';

?>
