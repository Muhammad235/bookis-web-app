<?php
//error session start
session_start();

//get back data if there is error
$fullname = $_SESSION['login-data']['fullname'] ?? null;
$password = $_SESSION['login-data']['password'] ?? null;

//delete signup data
unset($_SESSION['login-data']);




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
        top: 32%;
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
        <h1 class="head">Welcome back!</h1>
        <h2 class="sign-head">Sign In</h2>

        <?php  if (isset($_SESSION['login'])) : ?>
            <div class="error">
            <p>
                <?= $_SESSION['login'];
                unset($_SESSION['login']);
                ?>
            </p>
            </div>
        <?php endif ?>

        <form action="server/loginfunc.php" method="POST" class="signin-form">
            <div class="input-container">
                <img src="images/Rectangle 4.png" alt="" class="rectangle"> 
                <img src="images/Vector.png" alt="" class="vector-name">
            <input type="text" placeholder="Fullname" value="<?=$fullname?>" name="fullname">
            </div>

            <div class="input-container pass">
                <img src="images/Rectangle 4.png" alt="" class="rectangle"> 
                <img src="images/Vector-pass.png" alt="" class="vector-pass">
            <input type="text" placeholder="Password" value="<?=$password?>" name="password">
            </div>

            <div class="forget-pass-div">
                <a href="forget-password.php" class="forget-pass">Forget Password</a>
            </div>

            <button name="" class="sign-in-btn">Sign in</button>

            <h1 class="line">0r</h1>

            <div class="socials">
                <div class="google"><img src="images/Ellipse 4.png" alt=""></div>
                <div class="facebook"><img src="images/Ellipse 5.png" alt=""></div>
            </div>

            <div class="no-account">
            <p>Don't have an account?</p><a href="signup.php" class="sign-up">Sign Up</a>
            </div>

        </form>
    </section>



    <script src="js/app.js"></script>
</body>
</html>