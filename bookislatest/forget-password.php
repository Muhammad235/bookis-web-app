<?php
//error session start
session_start();

//get back data if there is error
$email = $_SESSION['signup-data']['email'] ?? null;
$password = $_SESSION['signup-data']['password'] ?? null;

//delete signup data
unset($_SESSION['signup-data']);

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>users</title>
</head>
<style>
    .error{
        margin: 0;
        position: absolute;
        top: 33%;
        left: 50%;
        transform: translate(-50%, -50%);  
        display: block;
        width: 100%;
    }
    .error p{
        color: red;
        font-size: 20px;
        text-align: center;
    }
</style>
<body>
        <!-- error page -->
        <div class="mobile" id="mobile">
            <div class="content">
                <h1 class="oops">OOPS!</h1>
                <p class="main-eror">You can only view this web app on your mobile device</p>
                <p class="coperation">Thanks for your cooperation</p>
            </div>
        </div>

    <section class="app">
        <img src="images/logo.png" alt="" class="top-logo">
        <?php
          
          if (isset($_SESSION['userEmail'])) {
            ?>  <h1 class="head forget-pass-head">Change password</h1> <?php
          }else{
            ?>  <h1 class="head forget-pass-head">Forget password</h1> <?php
          }

        ?>
        
        <h2 class="sign-head oops-forget">Oops</h2>

        <?php  if (isset($_SESSION['login'])) : ?>
            <div class="error">
            <p>
                <?= $_SESSION['login'];
                unset($_SESSION['login']);
                ?>
            </p>
            </div>
        <?php endif ?>

        <form action="server/resetfunc.php" method="POST" class="signin-form forget-pass-form">
            <div class="input-container email">
                <img src="images/Rectangle 4.png" alt="" class="rectangle"> 
                <img src="images/Vector-email.png" alt="" class="vector-email">
            <input type="text" placeholder="Email" name="email" value="<?= $email?>"> 
            </div>

            <div class="input-container pass">
                <img src="images/Rectangle 4.png" alt="" class="rectangle"> 
                <img src="images/Vector-pass.png" alt="" class="vector-reset">
            <input type="text" placeholder="New Password" name="password" value="<?= $password?>">
            </div>

            <button name="" class="sign-in-btn reset">Reset</button>

        </form>
    </section>



    <script src="js/app.js"></script>
</body>
</html>