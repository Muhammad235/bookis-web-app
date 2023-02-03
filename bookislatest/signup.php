<?php
//error session start
session_start();

//get back data if there is error
$fullname = $_SESSION['signup-data']['fullname'] ?? null;
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
    <title>Bookis</title>
</head>
<style>
    .error{
        margin: 0;
        position: absolute;
        top: 31%;
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

    @media only screen and (max-width: 500px) {
        .error{
        margin: 0;
        position: absolute;
        top: 22%;
        left: 50%;
        transform: translate(-50%, -50%);  
        display: block;
        width: 100%;
    }
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
        <img src="images/logo.png" alt="" class="top-logo right-logo">
        <h1 class="head down-head">Hello!</h1>
        <h2 class="sign-head signup-head">Sign Up</h2>
        <?php  if (isset($_SESSION['empty'])) : ?>
            <div class="error">
            <p>
                <?= $_SESSION['empty'];
                unset($_SESSION['empty']);
                ?>
            </p>
            </div>
        <?php endif ?>
        <form action="server/signupfunc.php" method="POST" class="signin-form signup-form">
            <div class="input-container">
                <img src="images/Rectangle 4.png" alt="" class="rectangle"> 
                <img src="images/Vector.png" alt="" class="vector-name">

            <input type="text" placeholder="Fullname" class="fullname" name="fullname" value="<?=$fullname?>">
            </div>

            <div class="input-container email">
                <img src="images/Rectangle 4.png" alt="" class="rectangle"> 
                <img src="images/Vector-email.png" alt="" class="vector-email">
            <input type="text" placeholder="Email" class="fullname" name="email" value="<?=$email?>">
            </div>

            <div class="input-container pass">
                <img src="images/Rectangle 4.png" alt="" class="rectangle"> 
                <img src="images/Vector-pass.png" alt="" class="vector-pass vector-pass2">
            <input type="text" placeholder="Password" class="fullname" name="password" value="<?=$password?>">
            </div>

            <div class="terms">
                <input type="checkbox" name="checked" value="1"> 
                <p>I accept all terms & conditions</p>
            </div>

            <button class="sign-in-btn" style="margin-top: 10px;">Sign Up</button>

            <h1 class="line">0r</h1>

            <div class="socials">
                <div class="google"><img src="images/Ellipse 4.png" alt=""></div>
                <div class="facebook"><img src="images/Ellipse 5.png" alt=""></div>
            </div>

            <div class="no-account">
            <p>Already have an account?</p><a href="login.php" class="sign-up">Sign In</a>
            </div>

        </form>
    </section>



    <script src="js/app.js"></script>
</body>
</html>